<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
			<article class="format-link" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php echo esc_url(get_post_meta($post->ID, 'single_format_link_url', true)); ?>" title="<?php echo get_post_meta($post->ID, 'single_format_link_text', true); ?>"><?php the_title(); ?></a></h2>	
				   <div class="post-content meta">
				   		<?php echo get_post_meta($post->ID, 'single_format_link_text', true); ?>			   
				   </div>	
	   			   <?php get_template_part( 'format-post-bottom', 'meta' ); ?>				   
			</article><!-- /article -->	

      		<?php comments_template( '', true ); ?>