<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
			<article class="format-video" id="post-<?php the_ID(); ?>">
				<span class="post-video">
				 	<?php echo get_post_meta($post->ID, 'single_format_video', true); ?>
				</span> 
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php the_title(); ?></a></h2>
				<?php get_template_part( 'format-post-top', 'meta' ); ?>
	   			   <?php get_template_part( 'format-post-excerpt', 'content' ); ?>				   
	   			   <?php get_template_part( 'format-post-bottom', 'meta' ); ?>				   
			</article><!-- /article -->	

      		<?php comments_template( '', true ); ?>