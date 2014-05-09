<?php require('blog/wp-blog-header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Evercam.io | Help</title>

    <? include 'styles.php'; ?>
</head>
  <body class="red-blue">
   
   <? include 'header.php'; ?>  
      
  <div class="container" id="docs">     

<!-- SIDEBAR
================================================== -->
  <div class='col-sm-2 left-nav'>
      
      <?php
                  // output quick links list of help categories
                  $terms = get_terms('help_category');
                  if (count($terms)) {
                  //echo "<p style=\"text-align:left;\">Jump to";
                  echo "<p class=\"help-nav\">";
                  }
                  $i=0; // counter for printing separator bars
                  foreach ($terms as $term) {
                  $wpq = array ('taxonomy'=>'help_category','term'=>$term->slug);
                  $query = new WP_Query ($wpq);
                  $article_count = $query->post_count;
                  echo "<a href=\"#".$term->slug."\">".$term->name."</a>";
                 
                  $i++;
                  }
                  ?>              

  </div>

<!-- Main
================================================== -->
    <div class="col-md-10 developer">
        <div class="row-header">
          <h3><a href="/help">evercam.io<span class="bold">/help</span></a></h3>Sometimes you just need a little help.
        </div>
        
        <!--<div class="row search">
          <div class="col-lg-3"></div>
         <div class="col-lg-6">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
             </button>
             </span>
             </div>
        </div>
        <div class="col-lg-3"></div>
        </div>-->
                  <?php
                  // output quick links list of help categories
                  $terms = get_terms('help_category');
                  if (count($terms)) {
                  //echo "<p style=\"text-align:left;\">Jump to";
                  echo "<p class=\"help-nav\">";
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
                  echo "<h3 class=\"term-heading\" id=\"".$term->slug."\">";
                  echo $term->name;
                  echo "</h3>";
                  if ($article_count) {
                  echo "<ul>";
                  $posts = $query->posts;
                  foreach ($posts as $post) {
                  echo "<li><a href=\"".get_permalink()."\">".$post->post_title."</a></li>";
                  }
                  echo "</ul>";
                  }
                  echo "<p><a href=\"#top\">Back to top</a></p>";
                  }
                  ?>


          
                
              <!--<p><?php the_excerpt(); ?></p>-->
        </div>
     
  


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
  </body>
</html>
