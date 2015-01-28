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
  <div class='col-md-2 col-xs-12 left-nav help-nav'>
      
      <?php
        // output quick links list of help categories
        $terms = get_terms('help_category');
        if (count($terms)) {
        //echo "<p style=\"text-align:left;\">Jump to";
        echo "<p class=\"help-list\">";
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
      <div class="help">
        
        <div class="row header">
          <div class="col-md-12">
            <h3><a href="/help">evercam.io<span class="bold">/help</span></a></h3><p>Sometimes you just need a little help. If you can&apos;t find what you&apos;re looking for here, <a href="mailto:ciaran@evercam.io" data-uv-trigger position="bottom">get in touch</a> and we&apos;ll get straight back to you with an answer.</p>
          </div>

      
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
                  
              </div>  
            </div>
        </div>
     
  

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
    <script src="js/uservoice.js"></script>
  </body>
</html>
