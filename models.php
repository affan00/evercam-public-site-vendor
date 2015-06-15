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
          <h2>Jpg Url: <span id="jpgUrl" style="color:black;"></span></h2>
          <h2>MJpeg Url: <span id="mjpgUrl" style="color:black;"></span></h2>
          <h2>H264 Url: <span id="h264Url" style="color:black;"></span></h2>
          <h2>Default Username: <span id="username" style="color:black;"></span></h2>
          <h2>Default Password: <span id="password" style="color:black;"></span></h2>
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