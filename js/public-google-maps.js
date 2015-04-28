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


  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  
  searchBox = new google.maps.places.SearchBox(input);
  autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

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

  // // Listen for the event fired when the user selects an item from the
  // // pick list. Retrieve the matching places for that item.
  // google.maps.event.addListener(searchBox, 'places_changed', function() {
  //   var places = searchBox.getPlaces();

  //   if (places.length == 0) {
  //     return;
  //   }

  //   clearMarkers();

  //   // For each place, get the icon, place name, and location.
  //   var bounds = new google.maps.LatLngBounds();
  //   for (var i = 0, place; place = places[i]; i++) {
  //     var image = {
  //       url: place.icon,
  //       size: new google.maps.Size(71, 71),
  //       origin: new google.maps.Point(0, 0),
  //       anchor: new google.maps.Point(17, 34),
  //       scaledSize: new google.maps.Size(25, 25)
  //     };

  //     // Create a marker for each place.
  //     var marker = new google.maps.Marker({
  //       map: map,
  //       icon: image,
  //       title: place.name,
  //       position: place.geometry.location
  //     });

  //     markers.push(marker);

  //     bounds.extend(place.geometry.location);
  //   }

  //   map.fitBounds(bounds);
  // });

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });

  // user clicks 'show cameras near me' link
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

  if (!place) {
    var request = { location: pos, radius: '1' };
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, function(places, status) {
      if (status == google.maps.places.PlacesServiceStatus.OK) {
        place = places[0];
        $("#pac-input").val(place.name)
        searchBox.setBounds(map.getBounds());

        var marker = new google.maps.Marker({
          map: map,
          title: place.name,
          place: {
            placeId: place.place_id,
            location: place.geometry.location
          }
        });

        if (place.photos) {
          console.log("Place Photo: " + place.photos[0].getUrl());
          marker.icon = place.photos[0].getUrl({'maxWidth': 35, 'maxHeight': 35});
        }
        
        markers.push(marker);

        var infowindow = new google.maps.InfoWindow();
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    });
  }

  if (place) {
    var marker = new google.maps.Marker({
      map: map,
      title: place.name,
      place: {
        placeId: place.place_id,
        location: place.geometry.location
      }
    });

    if (place.photos) {
      marker.icon = place.photos[0].getUrl({'maxWidth': 35, 'maxHeight': 35});
    }

    markers.push(marker);

    var infowindow = new google.maps.InfoWindow();
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.setContent(place.name);
      infowindow.open(map, this);
    });
  }
}

// load cameras from evercam api, near given location 
// and place markers on map for each camera
function loadCameras() {
  $(".cameras-wrapper").html('');
  camera_count.html("<span><small>Loading public cameras</small></span>");
  $(".cameras-wrapper").append(camera_count);
  
  //clearMarkers();

  $.ajax({
    type: 'GET',
    url: "https://api.evercam.io/v1/public/cameras?thumbnail=true&is_near_to=" + userLat + "," + userLng,
    success: function(response) {
      camera_count.html("<span><small>Found <strong>" + response.cameras.length + "</strong> cameras</small></span>");

      for (var i = 0; i < response.cameras.length; i++) {
        if (response.cameras[i].location && response.cameras[i].location.lat != "0" && response.cameras[i].location.lng != "0") {
          camera_container = $("<div class='camera-container' />");
          if (response.cameras[i].thumbnail) {
            camera_container.append("<img class='camera-snapshot' src='" + response.cameras[i].thumbnail + "'>"); 
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(response.cameras[i].location.lat, response.cameras[i].location.lng),
              map: map,
              title: response.cameras[i].name,
              icon: {
                size: new google.maps.Size(220,220),
                scaledSize: new google.maps.Size(32,32),
                origin: new google.maps.Point(0,0),
                url: response.cameras[i].thumbnail,
                anchor: new google.maps.Point(16,16)
              }
            });
            markers.push(marker);
          } else {
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(response.cameras[i].location.lat, response.cameras[i].location.lng),
              map: map,
              title: response.cameras[i].name
            });
            markers.push(marker);
          }

          camera_container.append("<div class='camera-name'>" + response.cameras[i].name + "</div>");
          $(".cameras-wrapper").append(camera_container);
        }
      }
    },
    error: function(response){
      console.log("LoadCameras Err: " + response.message);
    },
  });
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