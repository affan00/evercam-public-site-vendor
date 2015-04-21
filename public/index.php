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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  </head>
  <body>
    <? include '../nav.php'; ?>
    <div class="alt-color">
      <header>
        <div class="banner">
          <div class="banner-content">
            <h1>Public Cameras</h1>
            <h2>A list of cameras connected to Evercam and shared publically</h2>
          </div>
        </div>
      </header>
    </div>
    <div id="public-cameras">
    <div class="sidebar">
      
    </div>
      <div id="public-map">
        
      </div>
    </div>
    <? include '../footer.php'; ?>
    <script src="../js/public-google-maps.js"></script>
  </body>
</html>