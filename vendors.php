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
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css">
    <link href="/css/main.css" rel="stylesheet">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" async></script>
    <script src="https://cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
    <script src="/js/bootstrap.min.js" async></script>
    <script src="/js/custom.min.js" async></script>
  </head>
  <body id="vendors">
    <?php include 'nav.php'; ?>    
    <header>
      <div class="banner">
        <div class="col-md-12">
          <h1><img id="logo" style="display:none; width:150px; height:auto; margin-right:20px; margin-top:-20px;"><span id="heading"></span></h1>
          <h2><span id="sub-heading" style='word-wrap: break-word; '></span></h2>
          <a id="back" href="javascript:history.go(-1)" style="display:none"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
      </div>
    </header> 
    <div id="public-vendors" class="alt-color">
      <section>
        <div id="vendorDetails" style="display:none">
          <table id="modelsTable" class="table table-bordered" cellspacing="0" width="100%" style="display:none">
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
        <div id="loading" style="display:none">Loading...</div>
        <div id="vendorList" style="display:none">
          <table id="vendorsTable" class="table table-bordered" cellspacing="0" width="100%" style="display:none">
            <thead>
              <tr>
                <th>Vendor</th>
                <th>Name</th>
                <th>MAC</th>
              </tr>
            </thead>
          </table>
        </div>
      </section>
    </div>
    <?php include 'footer.php'; ?>
    <script src="/js/vendors.js"></script>
    <script>
      $(document).ready(function() {
        initVendors();
      });
    </script>
  </body>
</html>