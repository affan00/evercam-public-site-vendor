<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Evercam -  Apps for IP Cameras. Get more from your camera.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="cameras, apps, integration, recording, remote storage, sharing, api, developer platform">
    <meta name="description" content="Add remote storage, sharing, time-lapses, notifications, logs, access from any mobile device. ERP Integration - for Construction Site monitoring, Manufacturing, Weighbridge and more.">
    <meta name="author" content="Evercam">
    <title>Evercam.io</title>
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" async></script>
    <script src="https://cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
    <script src="/js/bootstrap.min.js" async></script>
    <script src="/js/custom.min.js" async></script>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <div class="alt-color">
      <header>
        <div class="banner">
          <h1><img id="image" style="display:none; width:200px; height:auto; margin-right:20px; margin-top:-20px;"><span id="heading"></span></h1>
          <h2><span id="sub-heading" style='word-wrap: break-word; '></span></h2>
          <a href="/public"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
      </header>
    </div>
    <div id="public-models">
      <section style="padding-top:0px;">
        <div id="modelDetails" style="display:none">
          <h2 id="h2_jpgUrl" style="display:none;">Jpg Url: <span id="jpgUrl" style="color:black;"></span></h2>
          <h2 id="h2_mjpgUrl" style="display:none;">MJpeg Url: <span id="mjpgUrl" style="color:black;"></span></h2>
          <h2 id="h2_h264Url" style="display:none;">H264 Url: <span id="h264Url" style="color:black;"></span></h2>
          <h2 id="h2_shape" style="display:none;">Shape: <span id="shape" style="color:black;"></span></h2>
          <h2 id="h2_resolution" style="display:none;">Resolution: <span id="resolution" style="color:black;"></span></h2>
          <h2 id="h2_official_url" style="display:none;">Official Url: <span id="official_url" style="color:black;"></span></h2>
          <h2 id="h2_audio_url" style="display:none;">Audio Url: <span id="audio_url" style="color:black;"></span></h2>
          <h2 id="h2_more_info" style="display:none;">More Info: <span id="more_info" style="color:black;"></span></h2>
          <h2 id="h2_poe" style="display:none;">POE: <span id="poe" style="color:black;"></span></h2>
          <h2 id="h2_wifi" style="display:none;">Wifi: <span id="wifi" style="color:black; "></span></h2>
          <h2 id="h2_upnp" style="display:none;">UPNP: <span id="upnp" style="color:black;"></span></h2>
          <h2 id="h2_ptz" style="display:none;">PTZ: <span id="ptz" style="color:black;"></span></h2>
          <h2 id="h2_infrared" style="display:none;">Infrared: <span id="infrared" style="color:black;"></span></h2>
          <h2 id="h2_varifocal" style="display:none;">Varifocal: <span id="varifocal" style="color:black;"></span></h2>
          <h2 id="h2_sd_card" style="display:none;">SD Card: <span id="sd_card" style="color:black;"></span></h2>
          <h2 id="h2_audio_io" style="display:none;">Audio IO: <span id="audio_io" style="color:black;"></span></h2>
          <h2 id="h2_onvif" style="display:none;">OnVif: <span id="onvif" style="color:black;"></span></h2>
          <h2 id="h2_psia" style="display:none;">PSIA: <span id="psia" style="color:black;"></span></h2>
          <h2 id="h2_discontinued" style="display:none;">Discontinued: <span id="discontinued" style="color:black;"></span></h2>
          <h2 id="h2_username" style="display:none;">Default Username: <span id="username" style="color:black;"></span></h2>
          <h2 id="h2_password" style="display:none;">Default Password: <span id="password" style="color:black;"></span></h2>
        </div>
        <div id="loading" style="display:none">Loading...</div>
        <div id="modelList" style="display:none">
          <table id="modelsTable" class="display table table-bordered" cellspacing="0" width="100%" style="display:none">
            <thead>
              <tr>
                <th>Model</th>
                <th>Name</th>
                <th>Vendor</th>
                <th>Jpg Url</th>
                <th>Mjpg Url</th>
                <th>H264 Url</th>
              </tr>
            </thead>
          </table>
        </div>
      </section>
    </div>
    <?php include 'footer.php'; ?> 
    <script src="/js/models.js"></script>
    <script>
      $(document).ready(function() {
        initModels();
      });
    </script>
  </body>
</html>