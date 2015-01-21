<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
              <ul class="meta top">
    			<?php if( (isset($general_options[ 'show_author' ])) && ($general_options[ 'show_author' ])) { ?>
              		  <li class="author"><?php echo sanitize_text_field( $content_options['written_by'] ); ?> <?php the_author_posts_link(); ?> <span class="separator"> <?php echo sanitize_text_field( $content_options['separator'] ); ?> </span>
              		  </li>
              	<?php } ?>
              	<li class="time"><time datetime="<?php the_time('Y-m-d', '', ''); ?>"><?php the_time(get_option('date_format')); ?></time></li>
    			<?php if( (isset($general_options[ 'comments_off' ])) && ($general_options[ 'comments_off' ])) { ?>
              	<?php } else { ?>
              		<li class="comments"><span class="separator"> <?php echo sanitize_text_field( $content_options['separator'] ); ?> </span><?php comments_popup_link( __( '0 Responses','meanthemes' ), __( '1 Response','meanthemes' ), __( '% Responses','meanthemes' ) ); ?></li>
              	<?php } ?>
              	<?php if ( !is_single() ) { ?>
              		<div class="divide"><div class="divider"></div></div>
              	<?php } ?>
              </ul>