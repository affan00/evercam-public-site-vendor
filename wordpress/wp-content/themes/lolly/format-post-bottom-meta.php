<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
<?php $image_single = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-thumb' ); ?>

              <ul class="meta bottom">
              <?php if( !is_page() ) { ?>
              		<li class="cats"><?php echo sanitize_text_field( $content_options['filed_in'] ); ?> <?php the_category(', '); ?></li>
              	<?php if( get_the_tags() ) { ?>
              		<li class="tags"><?php echo sanitize_text_field( $content_options['tagged_as'] ); ?> <?php the_tags('', ', ', ''); ?></li>
              	<?php } ?>
              	<?php } ?>
              	<?php if( (!is_single()) && (!is_page()) ) { ?>
              			<li class="more-divide"><div class="divide"><div class="divider"></div></div></li>
              		  <?php if( (isset($general_options[ 'hide_read_more' ])) && ($general_options[ 'hide_read_more' ])) { 
              		  } else { ?>
              		<li class="more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php echo sanitize_text_field( $content_options['read_more'] ); ?></a></li>
  	              	<?php } ?>	
              	<?php } ?>	
              	<?php if( (is_single()) || (is_page()) ) { ?>
					<?php if( (isset($general_options[ 'show_social_share' ])) && ($general_options[ 'show_social_share' ])) { ?>
              		<li class="post-share">
              			<?php echo sanitize_text_field( $content_options['share_on'] ); ?> 
						<a target="blank" title="<?php the_title(); ?>" href="http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>" onclick="window.open('http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>','twitter','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" class="share-twitter"><?php _e('Twitter' , 'meanthemes'); ?></a>
						
						 <?php echo sanitize_text_field( $content_options['separator'] ); ?> 
						
						<a onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="share-google"><?php _e('Google+' , 'meanthemes'); ?></a>

						 <?php echo sanitize_text_field( $content_options['separator'] ); ?> 

						<a target="blank" title="<?php the_title(); ?>" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="window.open('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>','facebook','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" class="share-facebook"><?php _e('Facebook' , 'meanthemes'); ?></a>

						 <?php echo sanitize_text_field( $content_options['separator'] ); ?> 
						
						<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo $image_single[0]; ?>&amp;description=<?php echo urlencode( get_the_title() ); ?>" target="_blank" class="share-pinterest"><?php _e('Pinterest' , 'meanthemes'); ?></a>
						
					</li>
					<?php } ?>
              	<?php } ?>
              </ul>
              <?php if( is_single() ) { ?>
              	<?php if( (isset($general_options[ 'show_author' ])) && ($general_options[ 'show_author' ])) { ?>
              		<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
              							<div class="author-meta">
              									<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 70 ) ); ?>
          									<div class="author-info">
              									<h6><?php echo sanitize_text_field( $content_options['written_by'] ); ?> 
              									
              									<a href="<?php the_author_meta('user_url'); ?>" title="<?php the_author_meta('display_name'); ?>"><?php the_author_meta('display_name'); ?></a>
              									
              									</h6>
              									<p><?php the_author_meta( 'description' ); ?></p>
              									<p><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo sanitize_text_field( $content_options['author_more'] ); ?> </a></p>
              								</div>	
              							</div>
              		<?php endif; ?>
              	<?php } ?>	
              <?php } ?>
              