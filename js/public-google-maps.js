var map;
var place;
var camera;
var autocomplete;
var infosList = [];
var markers = [];
var markersList = {};
var userCamerasList = {};
var camerasList = {};
var camera_count;
var userLat = 0;
var userLng = 0;
var userLocation;
var userPosition;
var markerClusterer;
var place_changed = false;
var reload_cameras = true;
var set_bounds = false;
var zoom_change = false;
var MINIMAL_RIGHTS = "list,snapshot";
var DEFAULT_ZOOM = 15;
var DEFAULT_DISTANCE = 2000;
var DEFAULT_LOCATION = "Dublin, Ireland";
var DEFAULT_POSITION = new google.maps.LatLng(53.3401496, -6.2611343);

function initialize() {
  camera_count = $(".cameras-count");

  // initialize map
  map = new google.maps.Map(document.getElementById('public-map'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: DEFAULT_ZOOM
  });
  markerClusterer = new MarkerClusterer(map);
  
  $(".home-link").prepend("<div id='login-user'></div>");

  // set markers overlay id to be used in css
  var myoverlay = new google.maps.OverlayView();
  myoverlay.draw = function () {
    this.getPanes().markerLayer.id='markerLayer';
  };
  myoverlay.setMap(map);

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  // try getting user's geo location
  if (navigator.geolocation) {
    function success(position) {
      userLat = position.coords.latitude;
      userLng = position.coords.longitude;
      userPosition = new google.maps.LatLng(userLat, userLng);
      
      reload_cameras = true;
      place_changed = true;
      map.setCenter(userPosition);
      var request = { location: userPosition, radius: '1' };
      var service = new google.maps.places.PlacesService(map);
      service.nearbySearch(request, function(places, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          userLocation = places[0];
          $("#pac-input").val(userLocation.name);
          $("#lnkMyLocation").html("Show me cameras near my location (" + userLocation.name + ")");
          console.log("Your location is " + userLocation.name);
        }
      });
    };
    function error() {
      reload_cameras = true;
      place_changed = true;
      map.setCenter(DEFAULT_POSITION);
      $("#pac-input").val(DEFAULT_LOCATION);
      $("#lnkMyLocation").html("Show me cameras near " + DEFAULT_LOCATION);
      console.log("Unable to retrieve your location");
    };

    navigator.geolocation.getCurrentPosition(success, error);
  } else {
    console.log("Geolocation is not supported by this browser");
  }

  // load logged in user's all cameras
  loadUserCameras();

  // handles map dragstart event and set flag as being dragged
  google.maps.event.addListener(map, 'dragend', function() {
    reload_cameras = true;
    closeInfos();
  });

  // handles map dragstart event and set flag as being dragged
  google.maps.event.addListener(map, 'zoom_changed', function() {
    reload_cameras = true;
    zoom_change = true;
    closeInfos();
  });

  // handles map idle event, raised after any chagnes happens in viewport
  google.maps.event.addListener(map, 'idle', function() {
    var bounds = map.getBounds();
    var center = map.getCenter();

    if (set_bounds) {
      set_bounds = false;
      return;
    }

    if (center) {
      userLat = center.lat();
      userLng = center.lng();
      var pos = new google.maps.LatLng(userLat, userLng);

      if (bounds)
      {
        var pos2 = new google.maps.LatLng(bounds.getNorthEast().lat(), bounds.getNorthEast().lng());
        DEFAULT_DISTANCE = google.maps.geometry.spherical.computeDistanceBetween(pos, pos2) - 300;
      }
      
      var request = { location: pos, radius: '1' };
      var service = new google.maps.places.PlacesService(map);
      service.nearbySearch(request, function(places, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          place = places[0];

          //// no need to update search text box if user has changed the place
          if (place_changed) {
            place_changed = false;
          } else if (reload_cameras) {
            $("#pac-input").val(place.name)
          }

          if (reload_cameras) {
            clearMarkers();

            reload_cameras = false;

            clearCameras();
            clearMarkers();

            loadPublicCameras();
          }
        }
      });
    }
  });

  // binds autocomplete textbox place_changed event
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }

    place_changed = true;
    reload_cameras = true;

    userLat = place.geometry.location.lat();
    userLng = place.geometry.location.lng();

    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
    }
  });

  // handles user click on 'show cameras near me' link
  // and try getting user's geo location
  $("#lnkMyLocation").click(function() {
    history.replaceState( {} , '/public/cameras/', '/public/' );

    if (userPosition && userLocation) {
      $("#pac-input").val(userLocation.name);
      reload_cameras = true;
      place_changed = true;
      map.setCenter(userPosition);
    } else {
      $("#pac-input").val(DEFAULT_LOCATION);
      reload_cameras = true;
      place_changed = true;
      map.setCenter(DEFAULT_POSITION);
    }
    
    $( "#camera-single" ).hide();
    $( "#public-map" ).fadeIn( 'slow' );
  });

  // handles user click on Back button on single camera page
  $("#lnkBacktoMap").click(function() {
    history.replaceState( {} , '/public/cameras/', '/public/' );

    $( "#camera-single" ).hide();
    $( "#public-map" ).fadeIn( 'slow' );

    resetCamera();
  });
  $("#static-map").click(function() {
    history.replaceState( {} , '/public/cameras/', '/public/' );

    $( "#camera-single" ).hide();
    $( "#public-map" ).fadeIn( 'slow' );

    resetCamera();
  });

  $("#lnkAddtoAccount").click(function() {
    if (localStorage.getItem("api_id") && localStorage.getItem("api_key") && localStorage.getItem("user_email")) {
      var result = shareCamera(camera_id, localStorage.getItem("user_email"), MINIMAL_RIGHTS);
      var result = shareCamera(camera.id, response.users[0].email, MINIMAL_RIGHTS);
      if (result.shares)
        alert("Camera '" + camera.id + "' is now shared with you.");
      else if (result.code === "duplicate_share_error")
        alert("Camera '" + camera.id + "' is already shared with you.");
      else 
        alert("Could not share camera '" + camera.id + "' with you.");
    } else {
      $("#myModal").modal('show');
    }
  });

  $("#singin").on('click', function(event) {
    var login = $("#username").val();
    var password = $("#password").val();
    $.ajax({
      type: 'GET',
      url: "https://api.evercam.io/v1/users/" + login + "/credentials?password=" + password,
      success: function(response) {
        localStorage.setItem("api_id", response.api_id);
        localStorage.setItem("api_key", response.api_key)
        
        $.ajax({
          type: 'GET',
          url: "https://api.evercam.io/v1/users/" + login + "?api_id=" + response.api_id + "&api_key=" + response.api_key,
          success: function(response) {
            localStorage.setItem("user_id", response.users[0].id);
            localStorage.setItem("user_username", response.users[0].username);
            localStorage.setItem("user_firstname", response.users[0].firstname);
            localStorage.setItem("user_lastname", response.users[0].lastname);
            localStorage.setItem("user_email", response.users[0].email);
            
            // sets new user email on login area
            $("#login-user").html(localStorage.getItem("user_email"));

            var result = shareCamera(camera.id, response.users[0].email, MINIMAL_RIGHTS);
            if (result.shares)
              alert("Camera '" + camera.id + "' is now shared with you.");
            else if (result.code === "duplicate_share_error")
              alert("Camera '" + camera.id + "' is already shared with you.");
            else 
              alert("Could not share camera '" + camera.id + "' with you.");

            // load logged in user's all cameras
            loadUserCameras();

            // reload cameras list to show/hide share icon
            clearCameras();
            clearMarkers();
            loadPublicCameras();

            $("#myModal").modal('hide');
          },
          error: function(xhr) {
            alert("Invalid user information.");
          },
        });
      },
      error: function(xhr){
        alert("Invalid user name and/or password.");
      },
    });
  });
  
  $('.cameras-containers').css('height', window.innerHeight - 150);
}

// shares given public camera with given user id
function shareCamera(camera_id, user_email, user_rights) {
  return $.ajax({
    async: false,
    type: 'POST',
    dataType: 'json',
    data: { email: user_email, rights: user_rights },
    ContentType: 'application/json',
    url: "https://api.evercam.io/v1/cameras/" + camera_id + "/shares?api_id=" + localStorage.getItem("api_id") + "&api_key=" + localStorage.getItem("api_key"),
  }).responseJSON;
}

// fetch camera with given id from Evercam
function getCamera(camera_id) {
  return $.ajax({
    async: false,
    type: 'GET',
    url: "https://api.evercam.io/v1/public/cameras?id_starts_with=" + camera_id + "&thumbnail=true",
  }).responseJSON.cameras[0];
}

// loads single camera details
function loadCamera(id) {
  history.replaceState( {} , '/public/', '/public/cameras/' + id );
  resetCamera();

  camera = camerasList[id];
  if (camera) {
    $("#camera-image").attr("src", camera.thumbnail);
    if (camera.is_online) {
      $("#camera-image-container").html( "<div class='live-view' id='ec-container'></div> <script src='https://dash.evercam.io/live.view.widget.js?refresh=1&camera=" + camera.id + "&private=false' async></script>" );
    } else {
      $("#camera-image-container").html( "<img id='camera-image' src='" + camera.thumbnail + "' />" );
    }

    $("#camera-name").text(camera.name);
    $("#camera-id").text(camera.id);
    $("#camera-owner").text(camera.owner);
    if (camera.vendor_name)
      $("#camera-vendor").text(camera.vendor_name);
    else
      $("#camera-vendor").text("Not available");
    if (camera.model_name)
      $("#camera-model").text(camera.model_name);
    else
      $("#camera-model").text("Not available");
    $("#camera-created").text(timestamp2date(camera.created_at));
    if (camera.is_online)
      $("#camera-status").text("Online");
    else
      $("#camera-status").text("Offline");
    $("#camera-timezone").text(camera.timezone);

    $("#static-map").attr("src", "https://maps.googleapis.com/maps/api/staticmap?zoom=14&size=780x350&maptype=roadmap&markers=label:C|" + camera.location.lat + ",%20" + camera.location.lng);

    var camera_position = new google.maps.LatLng(camera.location.lat, camera.location.lng);

    //// sets map center to selected camera location
    // reload_cameras = false;
    // place_changed = false;
    // map.setCenter(camera_position);

    $( "#public-map" ).hide();
    $( "#camera-single" ).fadeIn( 'slow' );
  } else {
    console.log("Could not find camera '" + id + "'.");
  }
}

function loadUserCameras() {
  if (localStorage.getItem("api_id") && localStorage.getItem("api_key") && localStorage.getItem("user_email")) {
    var userCameras = $.ajax({
      async: false,
      type: 'GET',
      url: "https://api.evercam.io/v1/cameras?api_id=" + localStorage.getItem("api_id") + "&api_key=" + localStorage.getItem("api_key"),
    }).responseJSON.cameras;

    for (var i=0; i<Object.keys(userCameras).length ; i++) {
      userCamerasList[userCameras[i].id] = userCameras[i].name;
    }

    //localStorage.setItem("userCameras", Object.keys(userCameras));
    //console.log(localStorage.getItem("userCameras"));
  }
}

// load public cameras from evercam api, near given location 
// and place markers on map for each camera
function loadPublicCameras() {
  $(".cameras-containers").html('');
  camera_count.html("<span><small>Looking for public cameras</small></span>");

  $.ajax({
    async: false,
    type: 'GET',
    url: "https://api.evercam.io/v1/public/cameras?thumbnail=true&within_distance=" + DEFAULT_DISTANCE + "&is_near_to=" + userLat + "," + userLng,
    success: function(response) {
      if (response.cameras.length > 0) {
        mapCameras(response.cameras);
      } else {
        $.ajax({
          type: 'GET',
          url: "https://api.evercam.io/v1/public/cameras?thumbnail=true&within_distance=" + (DEFAULT_DISTANCE * 2) + "&is_near_to=" + userLat + "," + userLng,
          success: function(response) {
            if (response.cameras.length > 0) {
              mapCameras(response.cameras);
            } else {
              $.ajax({
                type: 'GET',
                url: "https://api.evercam.io/v1/public/cameras?thumbnail=true&within_distance=" + (DEFAULT_DISTANCE * 4) + "&is_near_to=" + userLat + "," + userLng,
                success: function(response) {
                  if (response.cameras.length > 0) {
                    mapCameras(response.cameras);
                  } else {
                    camera_count.html("<span><small><strong>0</strong> cameras showing</small></span>");
                  }
                },
                error: function(response){
                  $(".cameras-wrapper").html('');
                  clearMarkers();
                  console.log("LoadCameras Err#3: " + response.message);
                },
              });
            }
          },
          error: function(response){
            $(".cameras-wrapper").html('');
            clearMarkers();
            console.log("LoadCameras Err#2: " + response.message);
          },
        });
      }
    },
    error: function(response){
      $(".cameras-wrapper").html('');
      clearMarkers();
      console.log("LoadCameras Err#1: " + response.message);
    },
  });
}

// show given cameras on map
function mapCameras(cameras) {
  $(".cameras-containers").html('');
  var bounds = new google.maps.LatLngBounds();
  for (var i = 0; i < cameras.length; i++) {
    if (cameras[i].is_online && cameras[i].location && cameras[i].location.lat != "0" && cameras[i].location.lng != "0") {
      camera_container = $("<div class='camera-container' />");
      var marker;
      if (cameras[i].thumbnail) {
        camera_container.append("<div id='wrap-" + cameras[i].id + "' class='camera-wrap'><div id='" + cameras[i].id + "' class='camera'><img id='img-" + cameras[i].id + "' class='camera-snapshot' src='" + cameras[i].thumbnail + "'></div></div>");

        // // if camera id is not in user's own+shared camera list then show share icon
        // var userCameras = localStorage.getItem("userCameras");
        // if (userCameras) {
        //   for (var i=0 ; i<userCameras.length ; i++) {
        //     console.log(userCameras[0]);
        //   }
        // }

        //if ($.inArray(cameras[i].id, userCameras) == -1)
        if (!(cameras[i].id in userCamerasList)) {
          console.log("Share: " + cameras[i].id);
          camera_container.append("<a class='add-to-account' id='add-" + cameras[i].id + "' camera='" + cameras[i].id + "' title='Add to my account'><i class='fa fa-plus add-top-right'></i></a>");
        }

        camera_container.on('click', "#" + cameras[i].id, function(e) {
          google.maps.event.trigger(markersList["marker_" + this.id], 'click');
        });
        camera_container.on('mouseover', "#" + cameras[i].id, function(e) {
          google.maps.event.trigger(markersList["marker_" + this.id], 'mouseover');
        });
        camera_container.on('mouseout', "#" + cameras[i].id, function(e) {
          google.maps.event.trigger(markersList["marker_" + this.id], 'mouseout');
        });

        camera_container.on('click', "#add-" + cameras[i].id, function(e) {
          camera = camerasList[this.getAttribute("camera")];
          if (camera) { 
            if (localStorage.getItem("api_id") && localStorage.getItem("api_key") && localStorage.getItem("user_email")) {
              var result = shareCamera(camera.id, localStorage.getItem("user_email"), MINIMAL_RIGHTS);
              if (result.shares) {
                userCamerasList[camera.id] = camera.name;
                $("#add-" + camera.id).remove();
                alert("Camera '" + camera.id + "' is now shared with you.");
              }
              else if (result.code === "duplicate_share_error")
                alert("Camera '" + camera.id + "' is already shared with you.");
              else 
                alert("Could not share camera '" + camera.id + "' with you.");
            } else {
              $("#myModal").modal('show');
            }
          }
        });

        marker = new google.maps.Marker({
          position: new google.maps.LatLng(cameras[i].location.lat, cameras[i].location.lng),
          map: map,
          title: cameras[i].name,
          icon: {
            size: new google.maps.Size(220,220),
            scaledSize: new google.maps.Size(32,32),
            origin: new google.maps.Point(0,0),
            url: cameras[i].thumbnail,
            anchor: new google.maps.Point(16,16),
          },
          optimized:false
        });
      } else {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(cameras[i].location.lat, cameras[i].location.lng),
          map: map,
          title: cameras[i].name,
          optimized:false
        });
      }

      // process multiple info windows
      addInfoWindow(marker, cameras[i].id, cameras[i].name, cameras[i].thumbnail);

      markers.push(marker);
      markersList["marker_" + cameras[i].id] = marker;
      markerClusterer.addMarker(marker);

      bounds.extend(new google.maps.LatLng(marker.position.lat(), marker.position.lng()));

      if (cameras[i].is_online)
        camera_container.append("<div class='camera-name'>" + cameras[i].name + "</div>");
      else
        camera_container.append("<div class='camera-name off'><i class='red fa fa-chain-broken'/> " + cameras[i].name + "</div>");
      
      $(".cameras-containers").append(camera_container);
      camerasList[cameras[i].id] = cameras[i];
    }
  }
  camera_count.html("<span><small><strong>" + Object.keys(camerasList).length + "</strong> cameras showing</small></span>");
  //set_bounds = true;

  //map.setZoom(DEFAULT_ZOOM);
  if (!zoom_change) {
    zoom_change = false;
    map.fitBounds(bounds);
    console.log("fitBounds");
  }
  //map.setCenter(bounds.getCenter());
}

// add infowindow to given marker
function addInfoWindow(marker, cameraId, cameraName, cameraThumbnail) {
  (function (marker) {
    var infowindow = new google.maps.InfoWindow({
      content: "<div id='camera-info-" + cameraId + "' class='camera-info'><img class='camera-thumbnail' src='" + cameraThumbnail + "'><span class='camera-info-name'>" + cameraName + "</span></div>"
    });
    google.maps.event.addListener(marker, 'mouseover', function () {
      set_bounds = true;
      google.maps.event.addListener(infowindow, 'domready', function() {
        var iwOuter = $('.camera-info').parent().parent().parent();
        iwOuter.prev().css({'display' : 'none'});
        iwOuter.next().css({'display' : 'none'});
        iwOuter.parent().parent().css({left: '-75px', top: '35px'});
      });
      closeInfos();
      infowindow.open(map, marker);
      $("#wrap-" + cameraId).css("border-color", "#333");
    });

    google.maps.event.addListener(marker, 'mouseout', function() {
      infowindow.close();
      $("#wrap-" + cameraId).css("border-color", "#fff");
    });

    google.maps.event.addListener(marker, 'click', function() {
      closeInfos();
      loadCamera(cameraId);
    });

    infosList.push(infowindow);
  })(marker);
}

// clear all cameras
function clearCameras() {
  console.log("Reloading cameras...");
  camera = undefined;
  camerasList = {};
  camerasList.length = 0;
}

// clear all markers from map
function clearMarkers() {
  closeInfos();
  if (markers) {
    for (var m in markers) {
      markers[m].setMap(null);
    }
    markers = [];
    markers.length = 0;
    markersList = {};
    markersList.length = 0;
    markerClusterer.clearMarkers();
  }
}

// close all open infowidows
function closeInfos() {
  for (i = 0; i < infosList.length; i++) {
    infosList[i].close();
  }
}

// get url part after '/public/cameras/'
function getCameraId() {
  var pathArray = window.location.pathname.split( '/' );
  if (pathArray.length && pathArray[3])
    return pathArray[3];
}

// clearup single camera details
function resetCamera() {
  $("#camera-name").text("");
  $("#camera-id").text("");
  $("#camera-owner").text("");
  $("#camera-vendor").text("");
  $("#camera-model").text("");
  $("#camera-created").text("");
  $("#camera-status").text("");
  $("#camera-timezone").text("");
}

// converts a unix timestamp datetime
function timestamp2date(timestamp) {
  var a = new Date(timestamp * 1000);
  var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  var hour = a.getHours();
  var min = a.getMinutes();
  var sec = a.getSeconds();
  var time = month + ' ' + date + ', ' + year + ' ' + hour + ':' + min;
  return time;
}

// bind initialize event with page load
google.maps.event.addDomListener(window, 'load', initialize);

// bind resize event
google.maps.event.addDomListener(window, 'resize', function() {
  $('.cameras-containers').css('height', window.innerHeight - 150);
});