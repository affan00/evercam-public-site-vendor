<?php require('../wordpress/wp-blog-header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Evercam.io/evercamjs</title>
 <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.css">    
    <!-- Proxima Nova Sans -->
   <link rel="stylesheet" href="/fonts/proxima-nova/promina-nova.css">
    <!-- 
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400, 700' rel='stylesheet' type='text/css'>        
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300, 600' rel='stylesheet' type='text/css'>-->
    
    <!-- Stylesheet -->
    <link  rel="stylesheet" href="/css/style.css">
    <link href="../css/prettify.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
  <body id="docs-body">
   
  <? include '../header.php'; ?>  

  <div class="container" id="docs">
  
  <!-- SIDEBAR
    ================================================== -->
    <? include 'sidebar.php'; ?> 
  

  <!-- DOCS
    ================================================== -->
  <div class='col-md-10 developer'>
    <div class="doc">

      <div class="row header">
          <h3>Evercam.js</h3>
          <p>Evercam.js allows you to easily access all evercam.io APIs and also works as jQuery plugin which can easily show image from any evercam-enabled camera on a website. jQuery is dependency and it has to be included before evercam.js.</p>
      </div>
       
 <div class="row article">
                    <?php
                      $post_id = 3231;
                      $queried_post = get_post($post_id);
                      echo $queried_post->post_content;
                      ?>

      </div>

   
   
      <div class="row footer">
          <div class='col-sm-12'>
              <div id="disqus_thread"></div>
              <script type="text/javascript">
                  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                  var disqus_shortname = 'evercamio'; // required: replace example with your forum shortname

                  /* * * DON'T EDIT BELOW THIS LINE * * */
                  (function() {
                      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                  })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments.</a></noscript>
              <!--<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>-->
        </div>  
     </div>


    </div><!-- doc -->
  </div><!-- developer -->
</div><!-- container -->

    <? include '../footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/js/jquery.mixitup.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
    <script src="/js/init.js"></script>
    <script src="../js/uservoice.js"></script>
    <script src="/js/prettify.js"></script>
  </body>
</html>
