<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Ryu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			
		<div class="bs-container">
			<div class="help-article">
				<div class="help-header">
          <h3><a href="/help">evercam.io<span class="bold">/help</span></a></h3> Sometimes you just need a little help.
			     </div>
			     <div class="new-help-nav">
			     <p><a href="/docs/help">Back to help pages</a><p>
			     </div>
					<!--<?php
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
                  echo "<a href=\"http://www.evercam.io/help#".$term->slug."\">".$term->name."</a>";
                  // output separator bar if not last item in list
                  if ( $i < count($terms)-1 ) {
                  echo "  |  " ;
                  }
                  $i++;
                  }
                 
                  ?>-->
					<?php while ( have_posts() ) : the_post(); ?>

							<h1 class="entry-title"><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>

							
						<?php ryu_content_nav( 'nav-below' ); ?>
			</div>
		</div>
			<!--<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>-->

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>