<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
              <div class="post-content">
    			<?php if( (isset($general_options[ 'show_blog_full' ])) && ($general_options[ 'show_blog_full' ])) { ?>
              		<?php global $more; $more = 0; ?>
              		<?php the_content('',FALSE,''); ?>
              	<?php } else { ?>
              		<?php global $more; $more = 0; ?>
              		<?php
              		$ismore = @strpos( $post->post_content, '<!--more-->');
              		if($ismore) : the_content('',FALSE,'');
              		else : the_excerpt();
              		endif;
              		?>
              	<?php } ?>	
                 </div>
                 