<?php require('../wordpress/wp-blog-header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Evercam.io/help</title>
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
<div class='col-md-2 col-xs-12 left-nav'>

<ul>
  <li class="doc-categories">
    API V1
    <ul class="sub-menu">
      <li><a href='/docs/'>Getting Started</a></li>
      <li><a href='/docs/authentication'>Authentication</a></li>
      <!--<li><a href='/docs/swagger'>Docs</a></li>-->
      <li><a href='/docs/evercamjs'>Evercam.js</a></li>
    </ul>
  </li>
</ul>
<ul>
  <li class="doc-categories">
  Client Bindings
    <ul class="sub-menu">
      <li><a href='/docs/client-bindings'>Current Clients</a></li>
    </ul>
  </li>
</ul>
<ul>
  <li class="doc-categories">
  <a href='/docs/help'>Help Pages</a>
    <ul class="sub-menu">
      <li><a href='/docs/help#common-issues' class="scroll">Common Issues</a></li>
      <li><a href='/docs/help#using-evercam' class="scroll">Using Evercam</a></li>
      <li><a href='/docs/help#camera-setup' class="scroll">Camera Setup</a></li>
      <li><a href='/docs/help#user-accounts' class="scroll">Accounts</a></li>
      <li><a href='/docs/help#pricing' class="scroll">Pricing</a></li>
    </ul>
  </li>
</ul>
<ul>
  <li class="doc-categories">
  Widgets
    <ul class="sub-menu">
      <li><a href='/docs/widget-live'>Live View</a></li>
      <li><a href='/docs/widget-recorded'>Recorded Images</a></li>
    </ul>
  </li>
</ul>
<ul>
  <li class="doc-categories">
    Connect
    <ul class="sub-menu">
      <li><a href="http://blog.evercam.io/blog/evercam-connect/" target="_blank">Android Connect</a></li>
    </ul>
  </li>
</ul>
<ul>
  <li class="doc-categories">
    <a href="/docs/changelog">Changelog</a>
  </li>
</ul>
</div>
  

  <!-- DOCS
    ================================================== -->
  <div class='col-md-10 developer'>
    <div class="doc">

      <div class="row header">
          <h3>evercam.io<span class="bold">help</span></h3>
          <p>Sometimes you just need a little help.</p><p> If you can&apos;t find what you&apos;re looking for here, drop us an email at <span class="bold">support@evercam.io</span> and we&apos;ll get straight back to you.</p>
      </div>
       
    <div class="row article">
              <?php
              // output quick links list of help categories
              $terms = get_terms('help_category');
              if (count($terms)) {
              echo "<p class=\"help-nav-top\">";
              }
              $i=0; // counter for printing separator bars
              foreach ($terms as $term) {
              $wpq = array ('taxonomy'=>'help_category','term'=>$term->slug);
              $query = new WP_Query ($wpq);
              $article_count = $query->post_count;
              echo "<a href=\"#".$term->slug."\">".$term->name."</a>";
              // output separator bar if not last item in list
              if ( $i < count($terms)-1 ) {
              echo "  |  " ;
              }
              $i++;
              }
              if (count($terms)) {
              echo "</p>";
              }
              foreach ($terms as $term) {
              $wpq = array ('taxonomy'=>'help_category','term'=>$term->slug);
              $query = new WP_Query ($wpq);
              $article_count = $query->post_count;
              echo "<h5 class=\"term-heading\" id=\"".$term->slug."\">";
              echo $term->name;
              echo "</h5>";
              if ($article_count) {
              echo "<ul>";
              $posts = $query->posts;
              foreach ($posts as $post) {
              echo "<li><a href=\"".get_permalink()."\">".$post->post_title."</a></li>";
              }
              echo "</ul>";
              }
             /* echo "<p><a href=\"#top\">Back to top</a></p>";*/
              }
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
