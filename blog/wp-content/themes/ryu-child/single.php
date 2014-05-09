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
			
				<div id="sidebar">
	                <div class="top-sidebar">
	                	<h3>Categories</h3>
				          <a href="/ecblog">All</a>
				          <?php wp_list_categories('exclude=4,7&title_li='); ?>
				    </div>
	                 
	                 <h3>Latest Posts</h3>
		                 <?php
			                $args = array( 'numberposts' => 5, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
			                $postslist = get_posts( $args );
			                foreach ($postslist as $post) : setup_postdata($post); ?>
			             <div class="sidebar-item"<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
			                <span class="date"><?php echo get_the_date(); ?></span>
			            </div>

		                <?php endforeach; ?> 
	            </div>

				<div id="left-content">
					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>
						
						<div class="disqus-footer">
					
						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								comments_template();
						?>
						</div>

				</div>
				
				
				
				<?php ryu_content_nav( 'nav-below' ); ?>
			
			<?php endwhile; // end of the loop. ?>
		</div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>