<?php get_header(); ?>
 <?php $general_options = get_option( 'meanthemes_theme_general_options_lolly' ); ?>
 <?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>



<div class="wrapper full-wrap">

	<div class="content archive-content">
	
	<div id="post-<?php the_ID(); ?>">
	
<?php if( (isset($general_options[ 'hide_archive_title' ])) && ($general_options[ 'hide_archive_title' ])) { ?>
	
	<?php } else { ?>
		            <h1 class="searching">
		            <?php if ( is_day() ) : ?>
		            				<?php printf( __( "Daily Archives: <span>%s</span>" , "meanthemes" ), get_the_date() ); ?>
		            <?php elseif ( is_month() ) : ?>
		            				<?php printf( __( "Monthly Archives: <span>%s</span>" , "meanthemes" ), get_the_date('F Y') ); ?>
		            <?php elseif ( is_year() ) : ?>
		            				<?php printf( __( "Yearly Archives: <span>%s</span>" , "meanthemes" ), get_the_date('Y') ); ?>
		            <?php else : ?>
		            				<?php _e( "Archives: " , "meanthemes" ); ?><span><?php echo single_cat_title(); ?></span>
		            <?php endif; ?>
		            			</h1>
	<?php } ?>
	
	
		<?php
		rewind_posts();
		if (have_posts()) :
		while (have_posts()) : the_post();
		if(!get_post_format()) {
		   get_template_part('format', 'standard');
		} else {
		   get_template_part('format', get_post_format());
		}
		endwhile;
		endif;
		?>

</div>
</div>
</div>
	
<?php if( (isset($general_options[ 'show_nav' ])) && ($general_options[ 'show_nav' ])) { ?>
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
<?php } ?>


		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<div class="navigation">
				<div class="wrapper">
					<?php meanthemes_pagination(); ?>
					<div class="nav-next"><?php next_posts_link( __( 'Next Page &gt;', 'meanthemes' ) ); ?></div>
					<div class="nav-previous"><?php previous_posts_link( __( '&lt; Previous Page', 'meanthemes' ) ); ?></div>
			</div><!-- /wrapper -->
		</div><!-- /navigation -->
<?php endif; ?>
	
	
	
	

  
<?php get_footer();  ?>