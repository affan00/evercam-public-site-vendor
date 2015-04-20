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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">
  </head>
  <body>
    <nav>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img alt="evercam.io" src="/img/logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
          <div class="menu">
            <ul>
              <li><a href="/apps">Apps</a></li>
              <li><a href="/uses/">Use Cases</a></li>
              <li><a href="/vendors">Vendors</a></li>
              <li><a href="/models">Models</a></li>
              <li><a class="btn btn-grey-outline sign-in" href="http://dash.evercam.io">Sign In</a></li>
            </ul>
          </div>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <div class="alt-color">
      <header>
        <div class="banner">
          <a id="back" href="javascript:history.go(-1)" style="display:none"><< Back</a>
          <h1><img id="logo" style="display:none; width:200px; height:auto; margin-right:20px; margin-top:-20px;"><span id="heading"></span></h1>
          <h2><span id="sub-heading" style='word-wrap: break-word;'></span></h2>
        </div>
      </header>
    </div>
    <div id="public-vendors">
      <section>
        <div id="vendorDetails" style="display:none">
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
        <div id="loading" style="display:none">Loading...</div>
        <div id="vendorList" style="display:none">
          <table id="vendorsTable" class="display table table-bordered" cellspacing="0" width="100%" style="display:none">
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
<footer>      
  <div class="container">
    <div class="row">
      <div class="footer-menu">
        <ul>
          <h3>Company</h3>
          <li><a href="/blog">Blog</a></li>
          <!--<li><a href="#">About</a></li>-->
          <li><a href="/team">Team</a></li>
          <li><a href="/values">Values</a></li>
          <li><a href="/press">Press</a></li>          
          <li><a href="/terms">Terms</a></li>
          <li><a href="/brand">Brand</a></li>
          <li><a href="/contact">Contact</a></li>  
        </ul>
        <ul>
          <h3>Developer</h3>
          <li><a href="/develop">Develop</a></li>
          <li><a href="https://dash.evercam.io/swagger" target="_blank">Documentation  <span class="fa fa-external-link"></span></a></li>
          <li><a href="https://dash.evercam.io/v1/users/signup">Create Account</a></li>
          <li><a href="/licence">Licence</a></li>
          <li><a href="/vendors">Vendors</a></li>
          <li><a href="/models">Models</a></li>
          <!--<li><a href="#">Pricing</a></li>-->
          <!--<li><a href="#">Help</a></li>-->     
        </ul>
        <ul>
          <h3>Camera Owner</h3>
          <li><a href="/apps">App Store</a></li>
          <li><a href="/uses">Use Cases</a></li>
          <li><a href="https://dash.evercam.io/v1/users/signup">Create Account</a></li>
          <h3>Manufacturer</h3>
          <li><a href="/camera-manufacturers">Why OEM Evercam? </a></li>
        </ul>
        </div>
      <div class="footer-about">
        <div class="footer-connect">
          <h3>Connect</h3>            
          <div class="subscribe">
            <p>Subscribe to our newsletter</p>
            <div class="sendgrid-subscription-widget" data-token="aC%2F8dfsfHE91irEczhV9ClBlsxsJ3bsi1DJ6HDCJdSYKMN5NOTtQKu6TO7MpLFG8">              
            </div>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://s3.amazonaws.com/subscription-cdn/0.2/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "sendgrid-subscription-widget-js");</script>
          </div>      
        <div class="social-links">
          <ul>            
            <li><a href="https://github.com/evercam" target="_blank"><i class="fa fa-github-alt"></i> Github</a></li>
            <li><a href="https://medium.com/evercam-blog" target="_blank"><i class="fa fa-medium"></i> Medium</a></li>
            <li><a href="https://twitter.com/evrcm" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
            <li><a href="https://www.facebook.com/evrcm" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
          </ul>        
           <ul>            
            <li><a href="https://www.linkedin.com/company/evercam" target="_blank"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
            <li><a href="https://plus.google.com/+Evercam/videos" target="_blank"><i class="fa fa-google-plus"></i> Google+</a></li>            
            <li><a href="https://angel.co/evercam" target="_blank"><i class="fa fa-angellist"></i> AngelList</a></li>
            <li><a href="/blog" target="_blank"><i class="fa fa-pencil"></i> Blog</a></li>
          </ul>
        </div>
        </div>
        </div>
      </div>
    </div>  
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/vendors.js"></script>
  </body>
</html>