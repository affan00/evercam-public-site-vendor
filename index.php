<?php require('wordpress/wp-blog-header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABPVJREFUeNrsW01IFFEcf5tiaV8rUkpEaEinwo0gOgRtdCkIM/BQXVSqQxDhXiIqOlV006RbReulOnSo8NAlUujQzZUiKKSvQ6QRbh+imVTvN7yN3XXe/83778zu2O4fhlndnXnz+73/93sjREUqUtYSCXqA8f27ovIUl0dMHm3yiKrP0byfpuWRUucx9Xm4dWgkvegIkKCb5alDHl0KbCECIgblcV+S8S7UBEjg3Qp0PKAJGwYZkohkqAiQwDHbffJoLpLpQhMSkoj7JSVAqfqtAGfci0b0FGIaSwpU99ESghdq7FH1LMXTADkgZp09aM3GVlG1fIWoXtskqhubcr6bfZ5yzjPqbCFJqQk9gRKgQtoTW88OwMt37BS1m2Ni2Rbvl869GRczL1Li++NHzmePEWO3TeiMBAV+iZzh1Qc6xco9e52ZLlSgGVN3kl40w4oEGwJGvYAH8Poj3WJ1e2cgRg8iJvuviPnJTyQJkoCtvhHg1eYBGuBBQpDye/qH+HL9mmMahfqEiAfw3SrUkbO+pveMY+fFlM9SEwwk9JiSpoiHOD/qkrfngF93ud9xdKUQAwnwA1upPMGUB9wKM3gINK9WH1miRu01pLfxMIPPSOO5i5TfiSss1hrQRw3acPxkKMBnJgPPw8ES4Tg+ODuwzpXpZ0/F3Nvxf1kfBAmSbaKULx+OHqLCo6tDrNb8uMvk8bnAEb7cHhIJzpQ8w54bjvG0CyEYTpHAlDRqgPL8b6lB6g/blwEeQpYv/sWgBS35EcHNB3SQ6S0jw7MBn0l0Pp7tNWV7WvMkpMOLE9SqP/J62ywPwG3AZ5NAqLOgnpGQLpIAVfDEmDd3lanb/O4V/IKtFsBsiEmKKYxaDdDGfVR0tjY5ywDg5jhtpZaOJHGKgBjzpu4z+CIlChWYAqfhQkiMCoNtzJu6R4zDvIhRqNS0kM/aRmmANu9f2hKOrM+LVNGOOsoygcUkhkgVY2lAISlq0U2ANteoTTn830uFgAoBC1tI2qTmP5E0RUCqDCY9RSVCaSqrs40ESGO/PbwXag3IJ2BMVw7PT9jn9EtlOJoJn+mMsUyAAwQFVG348ocURcCw7ipUdR4XKBfUA35kdugQccpxF8nBWJX9x8Dr97OnNjXDBFxXMyM1NaJu23Y7LWhsciq6n69esp947ekLzrjo9uB+iEh/fs2xZr91aOSqKQ8Y1F2Nzg6nPEXLmjN7mHl0n7PbXLjP+oEb3Jb8AmxV+f+QGgBv1+t2NViHFnDs2gER8Z5PAGCTBO82FohZta+do1knpJbnRAHdusAToekOYfANN++yV4DhS74+uOeESLduEYiqk4dXjcF90Dv0oJnYc7h7gVlrCIDnCmxhJLvbk3GsIJS70oT7TFw6b4pUB912lWlXhyUJWBto1n2PxRGfvLJvgh0kmibsOwm+xbYYSlCDYYWHExZL1AjRYjHtD9D6guz4HIZFUkQozTqCq+17LYd7qPogs4JTak0gwKcVBl4/QK2jJUwOCCRw+vd+2T2xgpQw7SL1dZMUnCKSnqA3SWXCKYATnt+fTVJZJIRimxw07qsssZFLELHf321yioCSbpTEjMPWDcAz1Z7/GyU5JGSntYt+qyzHJ1CELMrN0i7pMjYfRUPQ4kpw3yIp+xcmKq/M+PlUZfvSlMY0yu+1OSJ0xkVIX5ysSEXKXP4KMAA0TEMOSBp2iAAAAABJRU5ErkJggg==">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>evercam.io/home</title>

    <? include 'styles.php'; ?>
  <script src="http://api.html5media.info/1.1.6/html5media.min.js"></script>

  </head>

  <body class="red-blue">
<?php include_once("analyticstracking.php") ?>    
    <? include 'header.php'; ?>

        <!-- Home Section -->
    <div id="home" class="section half-home">      
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-12 empty"></div>
            <div class="col-md-10 col-sm-10 col-xs-12">
              <h1 class="welcome">We make it easier to write software for cameras.</h1> 
              <h3 class="welcome">Beautiful APIs. Easy to Support. World's first App Store for Cameras.</h3> 

            </div>
            <div class="col-md-1 col-sm-1 col-xs-12"></div>
          <div class="col-md-12 col-sm-12 col-xs-12">
             <a class="btn" id="create-account" href="http://dashboard.evercam.io/signup">Create an Account</a>
           </div>

          </div>
        </div>        
      </div>
     <div class="dark-overlay">

<video id="video" class="dark-overlay" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" width="100%"> 
<source src="http://wanderingfox.es/videos/home.mp4" type="video/mp4"><source src="http://wanderingfox.es/videos/home.ogg" type="video/ogg"></video>


      </div> 
    </div><!-- /.container -->
   
    
    <!-- Services Section -->
    <div id="services" class="section">
      <div class="container">
        
        <div class="content">
                   <!-- <div class="text-center">
                      <h2 class="title"><span class="icon-gear"></span>How you ask?</h2>            
                    </div>
                    <div class="row">
                      <div class="col-md-2 col-sm-2 col-xs-12"></div>
                      <div class="col-md-8 col-sm-8 col-xs-12">
                        <p class="description">Evercam.io makes it easier for you to connect your camera and share it with the world.
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12"></div>
                    </div>-->
         
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="service">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12"><i class="fa fa-camera fa-3x"></i></div>
                    <div class="col-md-12"><h3>Get your client to connect their Camera to Evercam</h3></div>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-12">
                    <div class="button">
                      <a href="/connect"><h5 class="title">evercam.io<span class="bold">/connect</span><i class="fa fa-arrow-right"></i></h5></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="service">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12"><span class="code-icon-home">{ }</span></div>
                    <div class="col-md-12"><h3>Start developing with our beautifully documented API</h3></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="button">
                      <a href="/develop/docs"><h5 class="title">evercam.io<span class="bold">/develop</span><i class="fa fa-arrow-right"></i></h5></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="service">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12"><div class="basket"></div></div>
                    <div class="col-md-12"><h3>Put your App in our store &amp; start selling</h3></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="button">
                      <a href="/apps"><h5 class="title">evercam.io<span class="bold">/apps</span><i class="fa fa-arrow-right"></i></h5></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
          
        </div><!-- /.content -->
      </div>
    </div>



<!-- Features Section -->
<div id="features" class="section">
  
    
<div id="feature-1">  
  <div class="container">
    <div class="row left">
      <div class="col-md-6 col-sm-6 col-xs-12" id="developers">
        <h3>A Beautiful REST API.</h3>
        <p>We built Evercam with Developers in mind and offer wrappers in Ruby, Python, Nodejs, Java & .Net to help get you started in minutes.</p>
        <p>Write Software using our API and we guarantee it will work with <strong>any</strong> camera connectable to the internet.</p>
         
         <a href="/develop/docs"><h5 class="title">evercam.io<span class="bold">/develop</span><i class="fa fa-arrow-right"></i></h5></a>

      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="pretty-code">
          <!--<pre class="find-cameraOption prettyprint curl" style="display: none;"><code>
curl https://api.evercam.io:443/v1/public/cameras \
-d "radius=10km" \
-d "location=123 Test Street, Sunnyvale, CA 94085, US" \
</code></pre>-->
<pre class="add-cameraOption prettyprint curl" style="display: none;"><code>
curl https://api.evercam.io:443/v1/cameras \
-d "id=RemembranceCam" \
-d "name=Garden Of Remembrance" \
-d "endpoints=http://remcam.dyndns.com:8000" \
-d "jpg_URL=/snapshot.jpg"
-d "is_public=true" \
-d  "auth=null"</code></pre>
<pre class="snapshotOption prettyprint curl" style="display: none;"><code>
WGET 
https://api.evercam.io:443/v1/cameras/marcoscam/snapshot.jpg
              </code></pre>

                <div id="example-controls" class="change form-control">
                  <select name="action" class='action select-special method' id="getFname" onchange="admSelectCheck(this);">
                   <!-- <option value="find-cameraOption">Find A Public Camera</option>-->
                    <option value="add-cameraOption">Add A Camera</option>
                    <option value="snapshotOption">Grab a Snapshot</option>
                  </select>
                  <span class="using">using</span>
                  <select name="lang" class='lang select-special '>
                  <option value="curl">curl</option>
                  </select>
                </div>
          </div>
        </div>
    </div><!-- row left -->
  </div><!-- container -->
</div><!-- feature -->

<div id="feature-2">  
  <div class="container">
    <div class="row left">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <h3>Separation of Concerns</h3>
         <p>
          Don't get bogged down supporting local network issues. Get the camera owner (your client) to take care of getting their camera connected - and keeping it connected.
         </p>
        <a href="/apps"><h5 class="title">evercam.io<span class="bold">/apps</span><i class="fa fa-arrow-right"></i></h5></a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <img class="img-responsive concerns" src="img/sepofconcerns-white.png">
      </div>
    </div><!-- row right -->
  </div><!-- container -->
</div><!-- feature -->

<div id="feature-grey">  
  <div class="container">
   <div class="row left">
      <div class="col-md-6 col-sm-6 col-xs-12" id="agnostic">
        <h3>Lots of Wrappers</h3>
        <p>We have wrappers around the Evercam API in all your favourite languages - Ruby, Nodejs, Python, Java &amp; .Net with installation instructions and basic usage examples.</p>
        <!--<a class="btn" href="#"><span class="icon-resize-full"></span>MORE DETAILS</a>-->
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 lots">
       <img class="img-responsive" src="img/wrappers.png">
      </div>
    </div><!-- row left -->
  </div><!-- container -->
</div><!-- feature -->

<div id="feature-1">  
  <div class="container">
    <div class="row left">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <h3>A Marketplace for Apps</h3>
        <p>The world's first App store for Cameras. With over 2,000 cameres connected to evercam.io and more every day - we bring customers to you.</p>
        <a href="/apps"><h5 class="title">evercam.io<span class="bold">/apps</span><i class="fa fa-arrow-right"></i></h5></a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <img class="img-responsive" src="img/macbook.png">
      </div>
    </div><!-- row right -->
  </div><!-- container -->
</div><!-- feature -->


<div id="feature-2">  
  <div class="container">
   <div class="row left">
      <div class="col-md-6 col-sm-6 col-xs-12" id="agnostic">
        <h3>Bring your own Device</h3>
        <p>Our software is hardware agnostic. We work with over 1,600 cameras and counting..</p>
        <p>If we don't already support it, let us know and we'll add it.</p>
        <!--<a class="btn" href="#"><span class="icon-resize-full"></span>MORE DETAILS</a>-->
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
       <img class="img-responsive" src="img/cameras.png">
      </div>
    </div><!-- row left -->
  </div><!-- container -->
</div><!-- feature -->

  
</div><!-- End Features

        
      
    
    
    <!-- Pricing Section -->
    <div id="pricing-sect" class="section">
      
      <div class="container">
        <div class="text-center">
          <h2 class="title"><span class="icon-dollar"></span>Flexible Pricing</h2>            
        </div>        
        <div class="content">          
          <div class="pricing">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="wrapper">
                  <h3 class="text-center"><i class="icon-circle-blank"></i>Free API</h3>
                  <table class="table">
                    <thead>
                      <tr><th><span class="price">$0</span></th></tr>
                    </thead>
                    <tbody>
                      <tr><td>100 requests per day</td></tr>
                      <tr><td>Peer to peer</td></tr>
                      <tr><td>Suitable for most uses</td></tr>  
                     <!-- <tr><td><a class="btn" href="#">Create Account</a></td></tr>--> 
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="wrapper">
                  <div class="promo"></div>
                  <h3 class="text-center"><i class="icon-star"></i>Pay As You Go</h3>
                  <table class="table">
                    <tr><td>For 10,000 additional requests</td></tr>
                    <thead>
                      <tr><th><span class="price">$20</span></th></tr>
                    <tbody>
                      <tr><td>Peer to peer</td></tr>
                      <tr><td>For the power user</td></tr>  
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="wrapper">   
                <div class="promo"></div>             
                  <h3 class="text-center"><i class="icon-trophy"></i>All You Can Eat</h3>
                  <table class="table">
                    <thead>
                      <tr><th><span class="price">$15</span></th></tr>
                    </thead>
                    <tbody>
                      <tr><td>1 Camera Unlimited requests</td></tr>
                      <tr><td>30 day archive</td></tr>  
                      <tr><td>SSL connection</td></tr>  
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </div>
    
 
 <!-- Blog Section -->
    <div id="blog" class="section">
      <div class="container">
        
        <div class="content">
           <div class="col-md-4 col-sm-4 col-xs-12">
             <a href="/blog"><h3 class="title">evercam.io<span class="bold">/blog</span>    <i class="fa fa-arrow-right"></i></h3></a>
              <p>Our blog is updated regularly with the latest <br>goings on around Evercam. News, Events &<br> Tech.</p> 
    
           </div>
                
           <div class="col-md-8 col-sm-8 col-xs-12">
             <h3>Latest Posts</h3>
                     <?php
                      $args = array( 'numberposts' => 4, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
                      $postslist = get_posts( $args );
                      foreach ($postslist as $post) : setup_postdata($post); ?>
                      <div class="post-header"><p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                      <span class="date"><?php echo get_the_date(); ?></span>    </div>
                    <?php endforeach; ?> 
          </div>
          
        </div><!-- /.content -->
      </div><!-- /.container -->
    </div>
    

    <? include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/mine.js"></script>
    <script src="/assets/prettify/prettify.js"></script>

</body>
</html>
