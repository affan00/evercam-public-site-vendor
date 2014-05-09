     
     
<?php get_header(); ?>
		        <?php $general_options = get_option( 'meanthemes_theme_general_options_lolly' ); ?>
		        <?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
		       
		       
		       
<div class="wrapper full-wrap">

	<div class="content archive-content">
	
	<div id="post-<?php the_ID(); ?>">
	
	
		       	<h1 class="searching">
		       	
		       	<?php
		       	$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
		       	?>
		       	<?php echo sanitize_text_field( $content_options['written_by'] ); ?> <span><?php echo $curauth->display_name; ?></span>
		       	</h1>
		       	
		       	
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
		       
		       		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		       		<div class="navigation">
		       				<div class="wrapper">
		       					<?php meanthemes_pagination(); ?>
		       					<div class="nav-next"><?php next_posts_link( __( 'Next Page &gt;', 'meanthemes' ) ); ?></div>
		       					<div class="nav-previous"><?php previous_posts_link( __( '&lt; Previous Page', 'meanthemes' ) ); ?></div>
		       			</div><!-- /wrapper -->
		       		</div><!-- /navigation -->
		       <?php endif; ?>
		       	
		       	
		       	
		       	
		       	
		       
		       <?php if( (isset($general_options[ 'show_nav' ])) && ($general_options[ 'show_nav' ])) { ?>
		       	<div class="sidebar">
		       		<?php get_sidebar(); ?>
		       	</div>
		       <?php } ?>
		       
		         
		       <?php get_footer();  ?>