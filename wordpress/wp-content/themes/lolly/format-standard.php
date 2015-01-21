<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
			<article class="format-standard" id="post-<?php the_ID(); ?>">
				<?php get_template_part( 'format-post-thumb', 'image' ); ?>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php the_title(); ?></a></h2>
				   <?php get_template_part( 'format-post-top', 'meta' ); ?>
	   			   <?php get_template_part( 'format-post-excerpt', 'content' ); ?>				   
	   			   <?php get_template_part( 'format-post-bottom', 'meta' ); ?>				   
			</article><!-- /article -->	

      		<?php comments_template( '', true ); ?>