<?php require('../wordpress/wp-blog-header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<title>evercam.io/docs/changelog</title>
 <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.css">    
    <!-- Proxima Nova Sans -->
   <link rel="stylesheet" href="../fonts/proxima-nova/promina-nova.css">
    <!-- 
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400, 700' rel='stylesheet' type='text/css'>        
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300, 600' rel='stylesheet' type='text/css'>-->
    
    <!-- Stylesheet -->
    <link  rel="stylesheet" href="/css/style.css">
    <link href="/css/prettify.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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
          <h3>Changelog</h3>
          <p>Information about new features and products we've added.</p>
      </div>
       
    <div class="row article">
           <!-- From WordPress Admin - Changelog -->
      <div class="col-md-11">
            <?php
              $args = array( 'numberposts' => 15, 'post_status'=>"publish",'post_type'=>"changelog",'orderby'=>"post_date");
              $postslist = get_posts( $args );
              foreach ($postslist as $post) : setup_postdata($post); ?>
          <div class="row">
              <!--<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                      <p><?php the_date(); ?></p>-->
                      <div class="changelog-date">
                        <?php 

                              $format_in = 'Ymd'; // the format your value is saved in (set in the field options)
                              $format_out = 'M j, Y'; // the format you want to end up with

                              $date = DateTime::createFromFormat($format_in, get_field('changelog_date'));

                              echo $date->format( $format_out );

                        ?>
                      </div>
                       <p><?php the_content(); ?></p>
          </div>
                     <?php endforeach; ?> 
       </div>
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
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/jquery.mixitup.min.js"></script>
    <script src="../js/masonry.pkgd.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
    <script src="../js/init.js"></script>
    <script src="/js/uservoice.js"></script>
  </body>
</html>
