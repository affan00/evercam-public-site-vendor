<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
			<article class="format-quote" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php echo get_the_content(); ?></a></h2>
	   			   <ul class="meta bottom">
	   			   		<li class="source"><?php echo get_post_meta($post->ID, 'single_format_quote', true); ?></li>
	   			   		<li class="more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php echo sanitize_text_field( $content_options['read_more'] ); ?></a></li>
	   			   </ul>			   
			</article><!-- /article -->	

      		<?php comments_template( '', true ); ?>