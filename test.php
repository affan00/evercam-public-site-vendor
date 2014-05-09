<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

<title>Evercam.io | Contact</title>

    <? include 'styles.php'; ?>
</head>

  <body class="red-blue">
   
   <? include 'header.php'; ?>  

        <!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
      
       

<div id="map-canvas" style="height:400px; width:600px;"></div>





     <div class="container" id="contact">
   
    <div class="row address">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <h3>Dublin</h3>
            <p>The Ierne Ballroom, 12 Parnell Square East,<br />
              Dublin 1, Ireland</p>
              <p>Telephone: +353 (1) 538 3333</p>
              <p>E-Mail: howrya@evercam.io</p>
              
              
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <h3>Mountain View, California</h3>
            <p>800 W. El Camino Real, Suite 350, Mountain View,<br />
             CA 94040, USA</p>
              <p>Telephone: +1 (650) 419 3588</p>
              <p>E-Mail: whassup@evercam.io</p>
          </div>
         <!-- <div class="col-md-4 col-sm-4 col-xs-12">
            <h3>Contact Us</h3>
            <form role="form">
              <div class="form-group">
             <input type="text" class="form-control" id="exampleInputName" placeholder="Full Name" required>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
               <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                <div class="clearfix"></div>
              </div>
              <div class="form-group textarea">
                <textarea rows="6" class="form-control" id="exampleInputMessage" placeholder="Write Message" required></textarea>
                <div class="clearfix"></div>
              </div>

              <button type="submit" class="btn">SEND MESSAGE</button>
            </form>-->
        </div>

        </div>
      

        

      
    

    </div>

    
    <? include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/init.js"></script>
    
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&">
function initialise() {
         
    var myLatlng = new google.maps.LatLng(53.354377, -6.262908); // Add the coordinates
    var mapOptions = {
        zoom: 8, // The initial zoom level when your map loads (0-20)
        center: myLatlng, // Centre the Map to our coordinates variable
        mapTypeId: google.maps.MapTypeId.ROADMAP, // Set the type of Map
      }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions); // Render our map within the empty div
         
}
google.maps.event.addDomListener(window, 'load', initialise); // Execute our 'initialise' function once the page has loaded. 

var image = new google.maps.MarkerImage(&quot;marker.png&quot;, null, null, null, new google.maps.Size(40,52)); // Create a variable for our marker image.
             
var marker = new google.maps.Marker({ // Set the marker
    position: myLatlng, // Position marker to coordinates
    icon:image, //use our image as the marker
    map: map, // assign the market to our map variable
    title: 'Click to visit our company on Google Places' // Marker ALT Text
});
var infowindow = new google.maps.InfoWindow({ // Create a new InfoWindow
    content:&quot;&lt;h3&gt;Snowdown Summit Cafe&lt;/h3&gt;&lt;p&gt;Railway Drive-through available.&lt;/p&gt;&quot; // HTML contents of the InfoWindow
});
 
google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker
    infowindow.open(map,marker); // Open our InfoWindow
});
    </script>
  </body>
</html>
