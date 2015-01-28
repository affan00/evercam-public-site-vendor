<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>              		
              					<article class="format-audio" id="post-<?php the_ID(); ?>">
              						<div class="post-audio<?php if(!has_post_thumbnail()) { echo " full-audio"; }?>">
  										<?php get_template_part( 'format-post-thumb', 'image' ); ?>
              						 	<script>
              						 	jQuery(document).ready(function(){
              						 	
              						 		jQuery("#jquery_jplayer_<?php the_ID(); ?>").jPlayer({
              						 			ready: function (event) {
              						 				jQuery(this).jPlayer("setMedia", {
              						 					mp3:"<?php echo get_post_meta($post->ID, 'single_format_audio', true); ?>",
              						 					oga:"<?php echo get_post_meta($post->ID, 'single_format_audio_oga', true); ?>"
              						 				});
              						 			},
              						 			swfPath: "<?php echo get_template_directory_uri(); ?>/assets/js/plugins",
              						 			supplied: "mp3, oga",
              						 			wmode: "window",
              						 			cssSelectorAncestor: "#jp-audio-container-<?php the_ID(); ?>"
              						 		});
              						 	});
              						 	</script>
              						 	
              						 		<div id="jquery_jplayer_<?php the_ID(); ?>" class="jp-jplayer"></div>
              						 		
              						 		<div id="jp-audio-container-<?php the_ID(); ?>" class="jp-audio">
              						 			<div class="jp-type-playlist">
              						 				<div class="jp-gui jp-interface">
              						 					<ul class="jp-controls">
              						 						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
              						 						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
              						 						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
              						 						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
              						 						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
              						 						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
              						 						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
              						 						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
              						 					</ul>
              						 					<div class="jp-progress">
              						 						<div class="jp-seek-bar">
              						 							<div class="jp-play-bar"></div>
              						 						</div>
              						 					</div>
              						 					<div class="jp-volume-bar">
              						 						<div class="jp-volume-bar-value"></div>
              						 					</div>
              						 					<div class="jp-time-holder">
              						 						<div class="jp-current-time"></div>
              						 						<div class="jp-duration"></div>
              						 					</div>
              						 					<ul class="jp-toggles">
              						 						<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
              						 						<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
              						 						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
              						 						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
              						 					</ul>
              						 				</div>
              						 				
              						 				<div class="jp-no-solution">
              						 					<span>Update Required</span>
              						 					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
              						 				</div>
              						 		</div><!-- .jp-audio -->
              						 		</div>
              						 	
              						</div> 
              						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php the_title(); ?></a></h2>
              						<?php get_template_part( 'format-post-top', 'meta' ); ?>
              						
              			   			   <?php get_template_part( 'format-post-excerpt', 'content' ); ?>				   
              			   			   <?php get_template_part( 'format-post-bottom', 'meta' ); ?>				   
              					</article><!-- /article -->	
              		
              		      		<?php comments_template( '', true ); ?>