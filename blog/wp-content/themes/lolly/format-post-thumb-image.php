<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
				
				
              <?php if(has_post_thumbnail()) { ?>
              
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'mobile-thumb' ); ?>
              <?php $image_sidebar = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-sidebar-thumb' ); ?>
              <?php $image_single = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-thumb' ); ?>
             
              <?php if(!is_single()) { ?>
              	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>">
              <?php } ?>	
          	<?php if (has_post_format('audio')) { ?>
          	<?php } else { ?>
              	<span class="post-thumb">
          	<?php } ?>
    			<?php if( (isset($general_options[ 'show_nav' ])) && ($general_options[ 'show_nav' ])) { ?>
              		<img class="featured-image" src="<?php echo $image[0]; ?>" data-fullsrc="<?php echo $image_sidebar[0]; ?>" alt="<?php the_title(); ?>" />
              	<?php } else { ?>	
              		<img class="featured-image" src="<?php echo $image[0]; ?>" data-fullsrc="<?php echo $image_single[0]; ?>" alt="<?php the_title(); ?>" />
              	<?php } ?><?php if (has_post_format('audio')) { ?>
              	<?php } else { ?>
              		</span>
              	<?php } ?><?php if(!is_single()) { ?></a><?php } ?>
              <?php } ?>	