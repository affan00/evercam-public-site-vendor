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
    <link href="/css/public-google-map.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" async></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places,geometry"></script>
    <script src="/js/bootstrap.min.js" async></script>
    <script src="/js/custom.min.js" async></script>
    <script src="/js/markerclusterer.js"></script>
  </head>
  <body>
    
  <div id="wrapper">
    
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <div class="sidebar-nav">
        <div class="search-container">
          <input id="pac-input" class="controls" type="text" placeholder="Search the map for Cameras">
          <small><a id="lnkMyLocation" href="#">Show me cameras near my location</a></small>
        </div>
      </div>
      <div class="cameras-wrapper">
        <div id='cameras-count'><div class='cameras-count'></div></div>
        <div class='cameras-containers'></div>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
              <div id="public-map" style="display:none"></div>
              
              <div id="camera-single" style="display:none">
                <div id="camera-image-container" class="row">
                  <img id="camera-image" src="">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <table>
                      <tr>
                        <td>Name</td>
                        <td><span id="camera-name"></span></td>
                      </tr> 
                      <tr>
                        <td>ID</td>
                        <td><span id="camera-id"></span></td>
                      </tr>
                      <tr>
                        <td>Owner</td>
                        <td><span id="camera-owner"></span></td>
                      </tr>
                      <tr>
                        <td>Vendor</td>
                        <td><span id="camera-vendor"></span></td>
                      </tr>
                      <tr>
                        <td>Model</td>
                        <td><span id="camera-model"></span></td>
                      </tr>
                      <tr>
                        <td>Created</td>
                        <td><span id="camera-created"></span></td>
                      </tr> 
                      <tr>
                        <td>Status</td>
                        <td><span id="camera-status"></span></td>
                      </tr>
                      <tr>
                        <td>Timezones</td>
                        <td><span id="camera-timezone"></span></td>
                      </tr> 
                    </table>
                  </div>
                  <div class="col-md-4 pull-right">
                    <div id="camera-map" style="border:1px #000 solid; height:250px; width:100%;"></div>
                  </div>
                </div>
                <div><a id="lnkBacktoMap" href="#">< Back</a></div>
              </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  
  <script src="/js/public-google-maps.js"></script>
  </body>
</html>