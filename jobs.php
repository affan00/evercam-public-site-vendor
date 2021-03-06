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
    <link rel="apple-touch-icon" sizes="57x57" href="https://dash.evercam.io/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://dash.evercam.io/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://dash.evercam.io/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://dash.evercam.io/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://dash.evercam.io/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://dash.evercam.io/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://dash.evercam.io/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://dash.evercam.io/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://dash.evercam.io/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="https://dash.evercam.io/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://dash.evercam.io/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="https://dash.evercam.io/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://dash.evercam.io/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="https://dash.evercam.io/manifest.json">
    <meta name="msapplication-TileColor" content="#dc4c3f">
    <meta name="msapplication-TileImage" content="https://dash.evercam.io/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body id="jobs">

    <? include 'nav.php'; ?>

    <div class="alt-color">
      <header>
        <div class="banner">
          <div class="banner-content">
            <h1>Jobs</h1>
            <br>

                  <?php
              $args = array( 'numberposts' => 10, 'post_status'=>"publish",'post_type'=>"current_jobs",'orderby'=>"post_date");
              $postslist = get_posts( $args );
              foreach ($postslist as $post) : setup_postdata($post); ?>

                    <p><a href="#<?php the_id(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>


              <?php endforeach; ?>
            <br>
            <h3>Overview - About Evercam</h3>
            <p>
              Evercam enables people to see the people, the places & the things that they care about and allows them to share that imagery with others.
            </p>
            <p>
              We call this Camera Management and it is our mission is to build the best Camera Management Software in the world.
            </p>
            <p>
              To achieve this we’ve chosen to write our software in the open enabling anyone to come and modify or improve our applications as much as they want. We’ve chosen to be hardware independent and to be API first. We believe that these three decisions are the fundamentals upon which we can best build the Evercam tools.
            </p>
            <p>
              Our core team is spread across Dublin (HQ), Pakistan, Serbia and the USA with many hundreds of contributions from developers, customers and partners across the rest of the world.
            </p>
            <p>
              In general, we’re looking for people who share our values and are excited about creating a piece of utility scale software that is a necessary piece of the Internet’s Infrastructure that is currently lacking.
            </p>

          </div>
        </div>
      </header>
    </div>



    <section>
      <div class="jobs">
        <?php
        $args = array( 'numberposts' => 10, 'post_status'=>"publish",'post_type'=>"current_jobs",'orderby'=>"post_date");
        $postslist = get_posts( $args );
        foreach ($postslist as $post) : setup_postdata($post); ?>
           <div class="article">
              <h3 id="<?php the_ID(); ?>"><?php the_title(); ?></h3>

                      <p><i><?php the_date(); ?></i></p>
                       <p><?php the_content(); ?></p>
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