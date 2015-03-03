<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Unleash the power of your camera. A developer platform for cameras with an app store for camera owners.">
    <meta name="author" content="evercam.io">
    <title>Evercam.io/develop</title>
    <? include '../styles.php'; ?>
    <meta property="twitter:account_id" content="4503599630778866" />
    <script type="text/javascript" src="../js/hotjar-tracking.js"></script>
  </head>
  <body id="develop">
  
  <? include '../nav.php'; ?>
  
  <header>
    <div class="banner">
      <div class="banner-content">
        <h1>A RESTful API for Cameras</h1>
        <h2>Write Software using our API and we guarantee it will work with any camera connectable to the internet.</h2>
        <a class="btn btn-grey-outline btn--inverted" href="https://dash.evercam.io/v1/users/signup" role="button">Create Account</a>
      </div>
      <!--<div class="banner-image">
        <img src="../img/header-banner.pngs">
      </div>-->
    </div>
  </header>
  <div class="alt-color">
    <section>
      <div class="develop">
      <div class="row">
        <div class="develop-feature">
        <img src="../img/sep-of-concerns.svg">
          <h3>Separation of concerns</h3>
          <p>Don't get bogged down supporting local network issues. Get the camera owner to take care of getting their camera connected & keeping it connected.</p>
        </div>
        <div class="develop-feature">
        <img src="../img/icon-feature-api.svg">
          <h3>Beautiful Documentation</h3>
          <p>Run requests from our endpoints with our interactive documentation.</p>
          <a class="btn btn-grey-outline" href="https://dash.evercam.io/swagger" target="_blank">Interactive docs <span class="ti-arrow-top-right"></span></a>
        </div>
        <div class="develop-feature">
          <img src="../img/wrappers.svg">
          <h3>Lots of Wrappers</h3>
          <p>We have wrappers around the Evercam API in <a href="https://github.com/evercam/evercam-ruby">Ruby</a>, <a href="https://github.com/evercam/evercam-node">Nodejs</a>, <a href="https://github.com/evercam/evercam.java">Java</a> &amp; <a href="https://github.com/evercam/evercam.net">.NET</a>.</p>
          <a class="btn btn-grey-outline" href="https://github.com/evercam" target="_blank">Client Bindings <span class="ti-arrow-top-right"></span></a>
        </div>
      </div>
      </div>
    </section>
  </div> 

  <? include '../footer.php'; ?>
    
  </body>
</html>