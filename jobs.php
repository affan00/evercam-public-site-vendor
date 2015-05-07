<?php require('blog/wp-blog-header.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Current positions at Evercam.io. We’re always interested in hearing from the bright and the beautiful.">
    <meta name="author" content="evercam.io">
    <title>Evercam.io</title>
    <!-- Bootstrap -->
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
  
    <? include 'nav.php'; ?>
    
    <div class="alt-color">
      <header>
        <div class="banner">
          <div class="banner-content">
            <h1>Jobs</h1>
          </div>
        </div>
      </header>
    </div>
    
    <section>  
      <div class="wordpress-page">
        <?php
        $args = array( 'numberposts' => 10, 'post_status'=>"publish",'post_type'=>"job",'orderby'=>"post_date");
        $postslist = get_posts( $args );
        foreach ($postslist as $post) : setup_postdata($post); ?>
           <div class="row article">
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                      <p><?php the_date(); ?></p>
                       <p><?php the_excerpt(); ?></p>
          </div>
        <?php endforeach; ?> 
      </div>
      </section>

  
    <? include 'footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" async></script>
    <script src="/js/bootstrap.min.js" async></script>
    <script src="/js/custom.min.js" async></script>
  </body>
</html>
