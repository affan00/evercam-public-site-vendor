<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php get_header(); ?>
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
 				    <?php get_template_part( 'format-post-bottom', 'meta' ); ?>				   
		        </div>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'meanthemes' ), 'after' => '</div>' ) ); ?>
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
