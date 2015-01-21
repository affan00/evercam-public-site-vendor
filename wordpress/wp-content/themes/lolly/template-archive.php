<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php
/**
 Template Name: Page - Archives
 *
 * @package WordPress
 * @subpackage Lolly
 * @since Lolly 1.0
 */
get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="wrapper full-wrap page-wrap">
	<div class="content">
	    <article id="post-<?php the_ID(); ?>">
	    	
	    	<?php if(!has_post_thumbnail()) { ?>
	    		
	    		<?php } else {?>
	    			<span class="post-thumb"><?php the_post_thumbnail("single-thumb"); ?></span>
	    		<?php } ?> 
<div class="wrapper full-wrap">
	    			    <h1><?php the_title(); ?></h1>
	    		<div class="post-content">
	        		<?php the_content(); ?>
	        		
	        		<div class="archives">
	        			        			<h3><?php _e("30 most recent posts" , "meanthemes"); ?></h3>
	        			        			<ul>
	        			        				<?php
	        			        					$args = array( 'numberposts' => '30', 'post_status' => 'publish' );
	        			        					$recent_posts = wp_get_recent_posts( $args );
	        			        					foreach( $recent_posts as $recent ){
	        			        						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	        			        					}
	        			        				?>
	        			        			</ul>
	        			        			<h3><?php _e("By author" , "meanthemes"); ?></h3>
	        			        			<ul>
	        			        			<?php wp_list_authors('optioncount=1'); ?>
	        			        			</ul>
	        				        		<h3><?php _e("By month" , "meanthemes"); ?></h3>
	        				        		<ul>
	        				        			<?php wp_get_archives(); ?>
	        				        		</ul>	
	        				        		
	        				        		<h3><?php _e("By year" , "meanthemes"); ?></h3>
	        				        		<ul>
	        				        			<?php wp_get_archives('type=yearly'); ?>
	        								</ul>
	        		
	        				        		<h3><?php _e("By category" , "meanthemes"); ?></h3>
	        				        		<ul>
	        					        		<?php wp_list_categories('hierarchical=0&title_li='); ?> 
	        					        	</ul>	
	        							</div>
	        		
		        </div>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'meanthemes' ), 'after' => '</div>' ) ); ?>
			<?php get_template_part( 'format-post-bottom', 'meta' ); ?>	
			</div>
	        <?php endwhile; ?>
	    </article>
	</div>    
</div>	   
<?php if( (isset($general_options[ 'show_nav' ])) && ($general_options[ 'show_nav' ])) { ?>
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
<?php } ?>
<?php get_footer(); ?>
