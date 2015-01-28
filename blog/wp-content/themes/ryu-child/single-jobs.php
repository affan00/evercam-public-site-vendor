<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Ryu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
	<div class="bs-container">
		<div id="job-post">
			<div class="jobs-header">
      <h3><a href="https://www.evercam.io/jobs">evercam.io<span class="bold">/jobs</span></a></h3>
      
    		</div>
				<!--<span class="categories-links"><a href="https://www.evercam.io/jobs">Job Listing</a></span>-->
				
					
					<div id="job-title">
						<h1 class="entry-title"><?php the_title(); ?></h1>
							<div class="job-details">
								
								<div class="job-detail"><strong>Location:</strong> <?php the_field('job_location'); ?></div>
								<div class="job-detail"><strong>Salary:</strong> <?php the_field('salary'); ?></div>
							</div>
					</div>
							<div class="job-description">	
								<span><strong>Description</strong></span>
								<p><?php the_content(); ?></p>
								<p><a href="/jobs">Back to Listings</a></p>
							</div>
					
		</div>
		
	</div>
			



			

			<!--<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>-->
		</div>
		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>