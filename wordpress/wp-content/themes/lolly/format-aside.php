<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
			<article class="format-aside" id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'format-post-top', 'meta' ); ?>
	   			   <?php get_template_part( 'format-post-excerpt', 'content' ); ?>				   
	   			   <?php get_template_part( 'format-post-bottom', 'meta' ); ?>				   
			</article><!-- /article -->	

      		<?php comments_template( '', true ); ?>