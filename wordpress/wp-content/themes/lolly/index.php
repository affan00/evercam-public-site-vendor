<?php get_header(); ?>
 <?php $general_options = get_option( 'meanthemes_theme_general_options_lolly' ); ?>
 <?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>

<?php if( (isset($general_options[ 'show_lead' ])) && ($general_options[ 'show_lead' ])) { ?>
	<article class="lead">
		<div class="title"><?php echo balanceTags( $content_options['lead_text'] );?></div>
	</article>
<?php } ?>	

	<div class="wrapper full-wrap">
	
		<div class="content archive-content">
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
	
		
	<?php if( (isset($general_options[ 'show_nav' ])) && ($general_options[ 'show_nav' ])) { ?>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	<?php } ?>
	

<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts('&paged=' . $paged);
?>

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