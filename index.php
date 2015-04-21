<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Evercam -  Apps for IP Cameras. Get more from your camera.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="cameras, CCTV, apps, integration, recording, remote storage, sharing, api, developer platform">
    <meta name="description" content="Add remote storage, sharing, time-lapses, notifications, logs, access from any mobile device to your CCTV or IP camera. ERP Integration - for Construction Site monitoring, Manufacturing, Weighbridge and more.">
    <meta name="author" content="Evercam">
    <link href="css/main.css" rel="stylesheet">
    <meta property="twitter:account_id" content="4503599630778866" />
    <script type="text/javascript" src="../js/hotjar-tracking.js" async></script>
  </head>
  <body id="home">
  <? include 'nav.php'; ?>
  <header>
    <div class="banner">
      <div class="banner-content">
        <h1>Apps for Cameras</h1>
        <h2>Get more from your CCTV system with our Apps and Developer tools.</h2>
        <h2>Check out our <a href="/uses">Use Cases</a></h2>        
        <a class="btn btn-grey-outline btn--inverted" href="#add-camera" role="button">Add a Camera</a>
      </div>
      <div class="banner-image">
        <img src="img/browser-border.svg">          
      </div>
      <div class="phone"><img src="img/phone.jpg"></div>
      <div class="desktop">
        <video width="778" height="438" autoplay loop>
        <source src="img/dash.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </header>
  <div class="alt-color">
    <section>
      <div class="apps">
        <div class="title">
          <div class="text-content">
            <h1>Apps</h1>
            <h2>Connect your camera to Evercam and add additional functionality to your camera with our growing range of apps.</h2>
          </div>
        </div>
        <div class="cards">
          <a href="http://snapmail.evercam.io" target="_blank">  
          <div class="card">
            <div class="card-inner">
              <i class="fa fa-send fa-2x circle"></i>

              <h3>Snapmail</h3>
              <p>Schedule email notifications from your camera</p>
              <i class="fa fa-external-link-square"></i>
            </div>
          </div>
          </a>        
          <div class="card">
            <div class="card-inner">
              <i class="fa fa-cloud-download fa-2x circle"></i>
              <h3>Remote Storage</h3>
              <p>Camera footage is safely stored and easy to access</p>
            </div>
          </div>    
          <a href="http://timelapse.evercam.io/" target="_blank">
          <div class="card">
            <div class="card-inner">
              <i class="fa fa-history fa-2x circle"></i>
              <h3>Timelapse</h3>
              <p>Create and share timelapses from your camera</p>
              <i class="fa fa-external-link-square"></i>
            </div>
          </div>
          </a>
        </div>
        <a class="pull-right btn btn-grey-outline" href="/apps" role="button">View all our Apps</a>
      </div>
    </section>
  </div>
    <section>
      <div class="use-cases">        
        <div class="title">
          <div class="text-content">
            <h6>Use Case</h6>
            <h1><a href="/uses/construction">Construction Camera</a></h1>
            <h2>Keep an eye on your site and manage access to the camera.</h2>
            <h2>Sharing, Remote Recording, Snapmail, Timelapse..<br><i><small>..works with any camera</small></i></h2>            
            <a class="btn btn-grey-outline pull-left" href="/uses/construction" role="button">View Use Case</a>
          </div>
          <div class="title-image">
            <img src="img/stephens-green-cam.jpg">
          </div>
        </div>
        <div class="gallery">          
          <div class="use-case">
            <a href="/uses/weighbridge"><h3>Weighbridge <span class="ti-arrow-right"></span></h3></a>
            <p>Embeded CCTV images in transaction documents from footage at a Weighbridge.</p>
          </div>
          <div class="use-case">
            <h3>SAP MII <!--<span class="ti-arrow-right"></span>--></h3>
            <p>Integration with SAP Manufacturing </p>
          </div>
          <div class="use-case">
            <h3>Community CCTV <!--<span class="ti-arrow-right"></span>--></h3>
            <p>Allow multiple people to securely share cameras</p>
          </div>
        </div>
        <a class="btn btn-grey-outline pull-right" href="/uses" role="button">View All Use Cases</a>
      </div>
    </section>
    <div id="add-camera" class="alt-color">
      <section>
        <div class="add-camera">        
          <div class="text-content">
            <h1>Add your Camera</h1>
          </div>
          <div class="add-a-camera own-camera">
            <div class="card-inner">
                <div class="widget">
                  <div evercam="add-camera-public"></div><script type="text/javascript" src="https://dash.evercam.io/widgets/add.camera.js" async></script>
                </div>
            </div>
          </div>
            <div class="add-a-camera">
              <h3>
                Or, use your mobile device as a Camera
              </h3>
              <div class="card-inner">
                <div class="row">
                  <div class="add-camera-mobile-description">
                    <p>Evercam Capture turns your phone into a camera (actually 2 cameras if you have 2 cameras on your phone) and connects them securely to your account on Evercam.</p><br>
                    <a href="https://play.google.com/store/apps/details?id=io.evercam.capture&hl=en" target="_blank"><img src="img/google_play_download.png" alt="Get it on Google Play"></a>
                  </div>
                </div>
              </div>
            </div> 
          </div>
      </section>
    </div>
    <div class="create-account">
      <a class="btn btn-grey-outline" href="https://dash.evercam.io/v1/users/signup">Create a Free Account</a>
    </div>
    <? include 'footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" async></script>
    <script src="/js/bootstrap.min.js" async></script>
    <script src="/js/custom.min.js" async></script>
  </body>
</html>