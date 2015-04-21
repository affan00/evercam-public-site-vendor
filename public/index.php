<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Evercam -  Public Cameras Map</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="cameras, public, cameras, apps, integration, recording, remote storage, sharing, api, developer platform">
    <meta name="description" content="Add remote storage, sharing, time-lapses, notifications, logs, access from any mobile device. ERP Integration - for Construction Site monitoring, Manufacturing, Weighbridge and more.">
    <meta name="author" content="Evercam">
    <!-- Bootstrap -->
    <link href="/css/main.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
  </head>
  <body>
    
  <div id="wrapper">
    
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <div class="sidebar-nav">
        <div class="search-container">
          <input id="pac-input" class="controls" type="text" placeholder="Search the map for Cameras">
          <small><a href="#">Show me cameras near my location</a></small>
        </div>
        <div class="cameras-wrapper">
          <div class="cameras-count">
            <span><small># of Cameras Showing</small></span>
          </div>
          <div class="camera-container">
            <img class="camera-snapshot" src="../img/stephens-green-cam.jpg">
            <div class="camera-name">Camera Name</div>
          </div>
          <div class="camera-container">
            <img class="camera-snapshot" src="../img/stephens-green-cam.jpg">
            <div class="camera-name">Camera Name</div>
          </div>
          <div class="camera-container">
            <img class="camera-snapshot" src="../img/stephens-green-cam.jpg">
            <div class="camera-name">Camera Name</div>
          </div>
          <div class="camera-container">
            <img class="camera-snapshot" src="../img/stephens-green-cam.jpg">
            <div class="camera-name">Camera Name</div>
          </div>
          <div class="camera-container">
            <img class="camera-snapshot" src="../img/stephens-green-cam.jpg">
            <div class="camera-name">Camera Name</div>
          </div>
          <div class="camera-container">
            <img class="camera-snapshot" src="../img/stephens-green-cam.jpg">
            <div class="camera-name">Camera Name</div>
          </div>
          <div class="camera-container">
            <img class="camera-snapshot" src="../img/stephens-green-cam.jpg">
            <div class="camera-name">Camera Name</div>
          </div>    
        </div>                           
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
              <div id="public-map"></div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" async></script>
  <script src="../js/bootstrap.min.js" async></script>
  <script src="../js/public-google-maps.js"></script>
  </body>
</html>