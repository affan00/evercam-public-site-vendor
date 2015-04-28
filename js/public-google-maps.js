var map;
var place;
var searchBox;
var autocomplete;
var markers = [];
var camera_count;
var userLat = 0;
var userLng = 0;

function initialize() {
  camera_count = $("<div class='cameras-count' />");

  // initialize map
  map = new google.maps.Map(document.getElementById('public-map'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: 14
  });
  
  // try getting user's geo location
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function( position ) {
      userLat = position.coords.latitude;
      userLng = position.coords.longitude;
      
      showMap(null, false);
      loadCameras();
    });
  } else {
    console.log("Geolocation is not supported by this browser");
  }

  // set markers overlay id to be used in css
  var myoverlay = new google.maps.OverlayView();
  myoverlay.draw = function () {
    this.getPanes().markerLayer.id='markerLayer';
  };
  myoverlay.setMap(map);

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');  
  searchBox = new google.maps.places.SearchBox(input);
  autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  // binds autocomplete textbox place_changed event
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }

    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
    }

    userLat = place.geometry.location.lat();
    userLng = place.geometry.location.lng();
    
    showMap(place, true);
    loadCameras();
  });


  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });

  // handles user click on 'show cameras near me' link
  $("#lnkMyLocation").click(function() {
    // try getting user's geo location
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function( position ) {
        userLat = position.coords.latitude;
        userLng = position.coords.longitude;

        showMap(null, true);
        loadCameras();
      });
    } else {
      console.log("Geolocation is not supported by this browser");
    }
  });
}

// show up google map at given location
function showMap(place, panTo) {
  console.log("Location: " + userLat + "," + userLng);
  camera_count.html("");
  
  var pos = new google.maps.LatLng(userLat, userLng);
  if (panTo)
    map.panTo(pos);
  else
    map.setCenter(pos);

  clearMarkers();

  // adds marker to user current location
  // if (place) {
  //   var marker = new google.maps.Marker({
  //     map: map,
  //     title: place.name,
  //     animation: google.maps.Animation.DROP,
  //     place: {
  //       placeId: place.place_id,
  //       location: place.geometry.location
  //     }
  //   });

  //   if (place.photos) {
  //     console.log("Place Photo: " + place.photos[0].getUrl());
  //     marker.setIcon(place.photos[0].getUrl({'maxWidth': 50, 'maxHeight': 50}));
  //   }

  //   markers.push(marker);
  // }

  if (!place) {
    var request = { location: pos, radius: '1' };
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, function(places, status) {
      if (status == google.maps.places.PlacesServiceStatus.OK) {
        place = places[0];
        $("#pac-input").val(place.name)
        searchBox.setBounds(map.getBounds());

        // adds marker to user current location
        // var marker = new google.maps.Marker({
        //   map: map,
        //   title: place.name,
        //   animation: google.maps.Animation.DROP,
        //   place: {
        //     placeId: place.place_id,
        //     location: place.geometry.location
        //   }
        // });

        // if (place.photos) {
        //   console.log("Place Photo: " + place.photos[0].getUrl());
        //   marker.setIcon(place.photos[0].getUrl({'maxWidth': 50, 'maxHeight': 50}));
        // }
        
        // markers.push(marker);
      }
    });
  }
}

// load cameras from evercam api, near given location 
// and place markers on map for each camera
function loadCameras() {
  $(".cameras-wrapper").html('');
  camera_count.html("<span><small>Looking for public cameras</small></span>");
  $(".cameras-wrapper").append(camera_count);
  
  $.ajax({
    type: 'GET',
    url: "https://api.evercam.io/v1/public/cameras?thumbnail=true&is_near_to=" + userLat + "," + userLng,
    success: function(response) {
      camera_count.html("<span><small><strong>" + response.cameras.length + "</strong> cameras showing</small></span>");

      var bounds = new google.maps.LatLngBounds();
      for (var i = 0; i < response.cameras.length; i++) {
        if (response.cameras[i].location && response.cameras[i].location.lat != "0" && response.cameras[i].location.lng != "0") {
          camera_container = $("<div class='camera-container' />");
          var marker;
          if (response.cameras[i].thumbnail) {
            camera_container.append("<img class='camera-snapshot' src='" + response.cameras[i].thumbnail + "'>"); 
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
          marker.set("marker_id", "marker_" + response.cameras[i].id);

          // process multiple info windows
          addInfoWindow(marker, response.cameras[i].id, response.cameras[i].name, response.cameras[i].thumbnail);

          markers.push(marker);

          bounds.extend(new google.maps.LatLng(marker.position.lat(), marker.position.lng()));
          //map.panToBounds(bounds);
          map.fitBounds(bounds);

          camera_container.append("<div class='camera-name'>" + response.cameras[i].name + "</div>");
          $(".cameras-wrapper").append(camera_container);
        }
      }
      //var markerCluster = new MarkerClusterer(map, markers);
    },
    error: function(response){
      console.log("LoadCameras Err: " + response.message);
    },
  });
}

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
      infowindow.open(map, marker);
    });

    google.maps.event.addListener(marker, 'mouseout', function() {
      infowindow.close();
    });
  })(marker);
}

// clear all markers from map
function clearMarkers() {
  if (markers) {
    for (m in markers) {
      markers[m].setMap(null);
    }
    markers.length = 0;
  }
}

google.maps.event.addDomListener(window, 'load', initialize);