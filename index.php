<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Unleash the power of your camera. A developer platform for cameras with an app store for camera owners.">
    <meta name="author" content="evercam.io">
    <title>Evercam.io</title>
    <? include 'styles.php'; ?>
    <script src="http://api.html5media.info/1.1.6/html5media.min.js"></script>
    <meta property="twitter:account_id" content="4503599630778866" />
  </head>
  <body id="home">
  
<? include 'nav.php'; ?>
  <header>
    <div class="banner">
      <div class="banner-content">
        <h1>Apps for Cameras</h1>
        <h2>Get more from your CCTV system with our Apps and Developer tools.</h2>
        <h2>Check out our <a href="#Use-Cases">Use Cases</a></h2>
        <a class="btn btn-primary" href="https://dash.evercam.io/v1/users/signup" role="button">Create a Free Account</a>
      </div>
      <div class="banner-image">
        <img src="img/browser.svg">          
      </div>
      <!--<div class="dash-scroll"><img src="img/dash.png"></div>-->
      <div class="browser"><img src="img/switch.gif"></div>
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
              <img class="app-logo" src="img/snapmail.png">
              <h3>Snapmail</h3>
              <p>Schedule email notifications from your camera</p>
              <span class="ti-arrow-top-right"></span>
            </div>
          </div>
          </a>
          
            <div class="card">
              <div class="card-inner">
                <img class="app-logo" src="img/remote-storage2.svg">
                <h3>Remote Storage</h3>
                <p>Footage from your camera is safely stored and easy to access and share</p>

                
              </div>
            </div>

          <a href="https://play.google.com/store/apps/details?id=io.evercam.capture" target="_blank">
          <div class="card">
            <div class="card-inner">
              <img class="app-logo" class="app-logo" src="img/timelapse.png">
              <h3>Timelapse</h3>
              <p>Create and share timelapses from your camera</p>
              <span class="ti-arrow-top-right"></span>
            </div>
          </div>
          </a>
      </div>
      <a class="pull-right btn btn-grey-outline" href="/apps" role="button">View all Apps</a>
    </section>
  </div>
    <section>
      <div class="use-cases">        
        <div class="title">
          <div class="text-content">
            <h6>Use Case<h6>
            <h1>Construction Camera</h1>
            <h2>Keep an eye on your site and manage access to the camera.</h2>
            <h2>Sharing, Remote Recording, Snapmail, Timelapse..<br><i><small>..works with any camera</i></small></h2>
            <a class="btn btn-grey-outline" href="/uses/construction" role="button">View Use Case</a>
          </div>
          <div class="title-image">
            <img src="img/stephens-green.jpg">
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
        <a class="btn pull-right btn-grey-outline" href="/uses/construction" role="button">View All Use Cases</a>
      </div>
    </section>
    <!--<div id="add-camera" class="alt-color">
      <section>
        <div class="add-camera">        
          <div class="text-content">
            <h1>Add a Camera</h1>
          </div>
          
          <div class="add-a-camera">
            <h3>
              I have my own Camera
            </h3>
            <div class="card-inner">
                
            </div>
          </div>
          <div class="add-a-camera">
            <h3>
              Browse Public Cameras
            </h3>
            <div class="card-inner">
              <div class="public-map">
                <input type="text" class="form-control" placeholder="Search">
                <img src="http://placehold.it/560x350">
              </div>
              <div class="public-description">
                <p>
                  Any camera added to Evercam can be made public and becomes accessible through our Public Camera page in the Evercam dashboard.<br>
                  You can search through Public Cameras and and find cameras located nearby.
                </p>
                <a class="btn btn-primary" href="#" role="button">View Map in Dashboard</a>
              </div>
            </div>
            </div>
            <div class="add-a-camera">
              <h3>
                Use your mobile device as a Camera
              </h3>
              <div class="card-inner">
                <div class="row">
                  <div class="add-camera-mobile-description">
                    <p>Evercam Capture turns your phone into a camera (actually 2 cameras if you have 2 cameras on your phone) and connects them securely to your account on Evercam.</p><br>
                    <a href="https://play.google.com/store/apps/details?id=io.evercam.capture&hl=en" target="_blank"><img src="img/google_play_download.png" alt="Get it on Google Play"></a>
                  </div>
                  <div class="add-camera-mobile-app">
                  <img src="img/evercam-caprture-02.svg" class="">
                  </div>
                </div>
              </div>
            </div> 
          </div>
      </section>
    </div>-->
  <? include 'footer.php'; ?>
  
  </body>
</html>