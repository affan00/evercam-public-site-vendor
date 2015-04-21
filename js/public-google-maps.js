 function initialize() {
        var mapOptions = {
          center: { lat: -34.397, lng: 150.644},
          zoom: 8,
          scrollwheel: false
        };
        var map = new google.maps.Map(document.getElementById('public-map'),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);

     