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
    <?php include '../nav.php'; ?>
    <div class="alt-color">
      <header>
        <div class="banner">
          <h1>Evercam Public Assets</h1>
          <h2><span style='word-wrap: break-word; '>Currently on Evercam, there are:</span></h2>
        </div>
      </header>
    </div>
    <div id="public-assets">
      <section style="padding-top:0px;">
        <div id="assetDetails">
          <h2>Public Cameras: <a href="/public/cameras"><span id="totalCameras">counting...</span></a></h2>
          <h2>Vendors: <a href="../vendors"><span id="totalVendors">counting...</span></a></h2>
          <h2>Models: <a href="../models"><span id="totalModels">counting...</span></a></h2>
        </div>
      </section>
    </div>
    <?php include '../footer.php'; ?>
    <script src="/js/assets.js"></script>
    <script>
      $(document).ready(function() {
        initAssets();
      });
    </script>
  </body>
</html>