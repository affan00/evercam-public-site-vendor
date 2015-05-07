var map;
var place;
var autocomplete;
var infosList = [];
var markers = [];
var markersList = {};
var camera_count;
var userLat = 0;
var userLng = 0;
var userLocation;
var userPosition;
var markerClusterer;
var place_changed = false;
var reload_cameras = true;
var current_zoom = 15;

var camera_map;
var camera_marker;

var DEFAULT_ZOOM = 15;
var DEFAULT_DISTANCE = 1000;
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
          console.log("User location " + userLocation.name);
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

  // handles map dragstart event and set flag as being dragged
  google.maps.event.addListener(map, 'dragend', function() {
    reload_cameras = true;
  });

  // handles map dragstart event and set flag as being dragged
  google.maps.event.addListener(map, 'zoom_changed', function() {
    // reload camera only if user zoom out
    if (current_zoom > map.getZoom()) {
      reload_cameras = true;
    }
    current_zoom = map.getZoom();
    closeInfos();
  });

  // handles map idle event, raised after any chagnes happens in viewport
  google.maps.event.addListener(map, 'idle', function() {
    var bounds = map.getBounds();
    var center = map.getCenter();

    if (center) {
      userLat = center.lat();
      userLng = center.lng();
      var pos = new google.maps.LatLng(userLat, userLng);

      if (bounds)
      {
        var pos2 = new google.maps.LatLng(bounds.getNorthEast().lat(), bounds.getNorthEast().lng());
        DEFAULT_DISTANCE = google.maps.geometry.spherical.computeDistanceBetween(pos, pos2);
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
            reload_cameras = false;

            loadCameras();
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
  });

  // handles user click on Back button on single camera page
  $("#lnkBacktoMap").click(function() {
    $( "#camera-single" ).hide();
    $( "#public-map" ).fadeIn( 'slow' );
    resetCamera();
  });

  // initialize single camera map
  camera_map = new google.maps.Map(document.getElementById('camera-map'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: DEFAULT_POSITION,
    zoom: DEFAULT_ZOOM
  });

  $('.cameras-containers').css('height', window.innerHeight - 145);
  $( "#public-map" ).fadeIn( 'slow' );
}

// loads single camera details
function loadCamera(id) {
  resetCamera();
  $.ajax({
    type: 'GET',
    url: "https://api.evercam.io/v1/public/cameras?id_starts_with=" + id + "&thumbnail=true",
    success: function(response) {
      var camera = response.cameras[0];
      if (camera) {
        $("#camera-image").on({
          load: function(){
            //$("#camera-image").show();
          }, 
          error: function(){
            //$("#camera-image").hide();
            $("#camera-image").attr("src", camera.thumbnail);
            console.log("Error loading camera image");
          }
        });
        $("#camera-image").attr("src", "https://api.evercam.io/v1/cameras/" + id + "/live/snapshot.jpg");
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
        $("#camera-created").text(camera.created_at);
        if (camera.is_online)
          $("#camera-status").text("Online");
        else
          $("#camera-status").text("Offline");
        $("#camera-timezone").text(camera.timezone);

        var camera_position = new google.maps.LatLng(camera.location.lat, camera.location.lng);
        camera_map.setCenter(camera_position);
        map.setCenter(camera_position);

        camera_marker = new google.maps.Marker({
          position: camera_position,
          map: camera_map,
          title: camera.name
        });
      }
      $( "#public-map" ).hide();
      $( "#camera-single" ).fadeIn( 'slow' );
    },
    error: function(response){
      console.log("LoadCamera(" + id + ") Err: " + response.message);
    },
  });  
}

// clearup single camera details
function resetCamera() {
  $("#camera-image").attr("src", "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
  $("#camera-name").text("");
  $("#camera-id").text("");
  $("#camera-owner").text("");
  $("#camera-vendor").text("");
  $("#camera-model").text("");
  $("#camera-created").text("");
  $("#camera-status").text("");
  $("#camera-timezone").text("");

  camera_map.setCenter(DEFAULT_POSITION);

  if (camera_marker) {
    camera_marker.setMap(null);
  }
}

// load cameras from evercam api, near given location 
// and place markers on map for each camera
function loadCameras() {
  clearMarkers();

  $(".cameras-containers").html('');
  camera_count.html("<span><small>Looking for public cameras</small></span>");

  $.ajax({
    type: 'GET',
    url: "https://api.evercam.io/v1/public/cameras?thumbnail=true&within_distance=" + DEFAULT_DISTANCE + "&is_near_to=" + userLat + "," + userLng,
    success: function(response) {
      $(".cameras-containers").html('');

      camera_count.html("<span><small><strong>" + response.cameras.length + "</strong> cameras showing</small></span>");
      var bounds = new google.maps.LatLngBounds();
      for (var i = 0; i < response.cameras.length; i++) {
        if (response.cameras[i].location && response.cameras[i].location.lat != "0" && response.cameras[i].location.lng != "0") {
          camera_container = $("<div class='camera-container' />");
          var marker;
          if (response.cameras[i].thumbnail) {
            camera_container.append("<div id='" + response.cameras[i].id + "' class='camera'><img class='camera-snapshot' src='" + response.cameras[i].thumbnail + "'></div>");

            camera_container.on('click', "#" + response.cameras[i].id, function(e) {
              loadCamera(this.id);
            });

            camera_container.on('mouseover', "#" + response.cameras[i].id, function(e) {
              google.maps.event.trigger(markersList["marker_" + this.id], 'mouseover');
            });
            camera_container.on('mouseout', "#" + response.cameras[i].id, function(e) {
              google.maps.event.trigger(markersList["marker_" + this.id], 'mouseout');
            });

            marker = new google.maps.Marker({
              position: new google.maps.LatLng(response.cameras[i].location.lat, response.cameras[i].location.lng),
              map: map,
              title: response.cameras[i].name,
              icon: {
                size: new google.maps.Size(220,220),
                scaledSize: new google.maps.Size(32,32),
                origin: new google.maps.Point(0,0),
                url: response.cameras[i].thumbnail,
                anchor: new google.maps.Point(16,16),
              },
              optimized:false
            });
          } else {
            marker = new google.maps.Marker({
              position: new google.maps.LatLng(response.cameras[i].location.lat, response.cameras[i].location.lng),
              map: map,
              title: response.cameras[i].name,
              optimized:false
            });
          }

          // process multiple info windows
          addInfoWindow(marker, response.cameras[i].id, response.cameras[i].name, response.cameras[i].thumbnail);

          markers.push(marker);
          markersList["marker_" + response.cameras[i].id] = marker;
          markerClusterer.addMarker(marker);

          bounds.extend(new google.maps.LatLng(marker.position.lat(), marker.position.lng()));
          //reload_cameras = false;
          //map.setZoom(DEFAULT_ZOOM);
          //map.fitBounds(bounds);

          camera_container.append("<div class='camera-name'>" + response.cameras[i].name + "</div>");
          $(".cameras-containers").append(camera_container);
        }
      }
    },
    error: function(response){
      $(".cameras-wrapper").html('');
      clearMarkers();
      console.log("LoadCameras Err: " + response.message);
    },
  });
}

// add infowindow to given marker
function addInfoWindow(marker, cameraId, cameraName, cameraThumbnail) {
  (function (marker) {
    var infowindow = new google.maps.InfoWindow({
      content: "<div id='camera-info-" + cameraId + "' class='camera-info'><img class='camera-thumbnail' src='" + cameraThumbnail + "'><span class='camera-info-name'>" + cameraName + "</span></div>"
    });
    google.maps.event.addListener(marker, 'mouseover', function () {
      google.maps.event.addListener(infowindow, 'domready', function() {
        var iwOuter = $('.camera-info').parent().parent().parent();
        iwOuter.prev().css({'display' : 'none'});
        iwOuter.next().css({'display' : 'none'});
        iwOuter.parent().parent().css({left: '-75px', top: '35px'});
      });
      closeInfos();
      
      infowindow.open(map, marker);
    });

    google.maps.event.addListener(marker, 'mouseout', function() {
      infowindow.close();
    });

    google.maps.event.addListener(marker, 'click', function() {
      closeInfos();
      loadCamera(cameraId);
    });

    infosList.push(infowindow);
  })(marker);
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

// bind initialize event with page load
google.maps.event.addDomListener(window, 'load', initialize);

// bind resize event
google.maps.event.addDomListener(window, 'resize', function() {
  $('.cameras-containers').css('height', window.innerHeight - 145);
});