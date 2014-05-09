<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
<?php get_header(); ?>
<div class="wrapper full-wrap page-wrap">
	<div class="content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
			<article class="format-<?php 
			$postFormat = "";
			if (has_post_format('aside') ) 
			{ 
			$postFormat = "aside"; 
			} 
			if (has_post_format('audio') ) 
			{ 
			$postFormat = "audio"; 
			} 
			if (has_post_format('chat') ) 
			{  
			$postFormat = "chat"; 
			} 
			if (has_post_format('gallery') ) 
			{  
			$postFormat = "gallery"; 
			} 
			if (has_post_format('image') ) 
			{  
			$postFormat = "image"; 
			} 
			if (has_post_format('link') ) 
			{  
			$postFormat = "link"; 
			} 
			if (has_post_format('quote') ) 
			{  
			$postFormat = "quote"; 
			} 
			if (has_post_format('status') ) 
			{  
			$postFormat = "status"; 
			} 
			if (has_post_format('video') ) 
			{  
			$postFormat = "video"; 
			} 
			if (!$postFormat)
			{  
			$postFormat = "standard"; 
			} 
			echo $postFormat;
			
			?>" id="post-<?php the_ID(); ?>">
			
			
				
				<?php if($postFormat == "video") 
				{
				?>
				<span class="post-video">
				 	<?php echo get_post_meta($post->ID, 'single_format_video', true); ?>
				</span> 
				<?php
				}
				?>
				
				
				<?php 
				if ( ($postFormat == "standard") || ($postFormat == "image") )
				{  
					if( ($general_options[ 'no_thumbnail' ]) ) {
					} else {
						get_template_part( 'format-post-thumb', 'image' );
					}
				}
				 ?>
				 <?php 
				 if ($postFormat == "audio")
				 {  
				 	?>
				 	
				 	<div class="post-audio<?php if( (isset($general_options[ 'no_thumbnail' ])) && ($general_options[ 'no_thumbnail' ]))  { echo " full-audio"; } ?>">
	 			<?php if( (isset($general_options[ 'no_thumbnail' ])) && ($general_options[ 'no_thumbnail' ])) {				 	
	 				} else {
				 			get_template_part( 'format-post-thumb', 'image' );
				 		} ?>
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
				 	
				 	<?php
				 }
				  ?>
				  
				  <?php 
				  if ($postFormat == "gallery")
				  {
				  ?>
				  
				  <div class="flexslider">
				  	<ul class="slides">
		 			<?php if( (isset($general_options[ 'no_thumbnail_gallery' ])) && ($general_options[ 'no_thumbnail_gallery' ])) { ?>
				  <?php } else { ?>
				       <?php if(has_post_thumbnail()) { ?>
				            	<li><?php get_template_part( 'format-post-thumb', 'image' ); ?></li>
				            <?php } ?>	
				       <?php } ?>
				       <?php 
				       // strip attachments and add into gallery rotator
				       		
				       		$args = array(
				       		    'orderby' => 'menu_order',
				       		    'order' => 'ASC',
				       		    'post_type' => 'attachment',
				       		    'post_parent' => $post->ID,
				       		    'post_mime_type' => 'image',
				       		    'post_status' => null,
				       		    'numberposts' => -1
				       		);
				       		$attachments = get_posts($args);
				       		if( !empty($attachments) ) {
				       		    $i = 0;
				       		    foreach( $attachments as $attachment ) {
				       		        if( $attachment->ID == $thumbid ) continue;
				       		        $src = wp_get_attachment_image_src( $attachment->ID, "mobile-thumb" );
				       		        $image_single = wp_get_attachment_image_src( $attachment->ID, "single-thumb" );
				       		        $caption = $attachment->post_excerpt;
				       		        $caption = ($caption) ? $caption : $posttitle;
				       		        $alt = ( !empty($attachment->post_content) ) ? $attachment->post_content : $attachment->post_title;
				       		        
				       		        echo "<li><img class='img-width featured-image' src='$src[0]' data-fullsrc='$image_single[0]' alt='$alt' /></li>";
				       		        $i++;
				       		    }
				       		}			
				       				?>	
				       
				       </ul>
				  <div class="flex-container"></div>	             
				      	
				  </div><!-- /flexslider -->						
				  
				  <?php if( (isset($general_options[ 'gallery_slideshow' ])) && ($general_options[ 'gallery_slideshow' ])) {
				  		$gallerySlideshow = "true";	
				  		} else {
				  		$gallerySlideshow = "false";
				  		}
				  		?>
				  <script>
				  	jQuery(window).load(function() {
				  	  jQuery('.flexslider').flexslider({
				  	  	controlsContainer: ".flex-container",
				  	    smoothHeight: true,
				  	    animation: "slide",
				  	    slideshow: <?php echo $gallerySlideshow; ?>,
				  	   	<?php if( (isset($general_options[ 'gallery_slideshow_interval' ])) && ($general_options[ 'gallery_slideshow_interval' ])) { ?>
				  	    slideshowSpeed: <?php echo sanitize_text_field( $general_options['gallery_slideshow_interval'] );?>,
				  	    <?php } ?>
				  	    <?php if( (isset($general_options[ 'gallery_slideshow_pause' ])) && ($general_options[ 'gallery_slideshow_pause' ])) { ?>
				  	    pauseOnHover: true,
				  	    <?php } ?>
				  	    directionNav: true, 
				  	    controlNav: false,
				  	    controlsContainer: '#post-<?php the_ID(); ?> .flex-container',
				  	    prevText: "<",
				  	    nextText: ">"
				  	  });
				  	});
				  </script>
				  
				  <?php 
				  }  
				  ?>
				<div class="wrapper full-wrap">
				  <?php if ( ($postFormat !== "aside") && ($postFormat !== "quote") ) 
				  				{ ?>
				  				<h1><?php 
				  				if ($postFormat == "link") 
				  				{ 
				  				?>
				  				<a href="<?php echo get_post_meta($post->ID, 'single_format_link_url', true); ?>" title="<?php echo get_post_meta($post->ID, 'single_format_link_text', true); ?>"><?php
				  				 } 
				  				 ?><?php the_title(); ?><?php 
				  				 if ($postFormat == "link") 
				  				 { 
				  				 ?></a><?php 
				  				 } 
				  				 ?></h1>
				  				<?php } ?>
				  
				  
				  				<?php if ($postFormat == "quote")
				  				{ ?>
				  				<h1><?php echo get_the_content(); ?></h1>
				  				<?php
				  				}
				  				?>
				<?php get_template_part( 'format-post-top', 'meta' ); ?>
				  				
				  				
				  
				  
				  <?php if($postFormat == "link") 
				  {
				  ?>
				  <p class="post-link meta"><?php echo get_post_meta($post->ID, 'single_format_link_text', true); ?></p>
				  <?php
				  }
				  ?>
					
				 <?php if ($postFormat !== "quote")	
				 {
				 ?>
				 	<div class="post-content">
					   <?php the_content(); ?>
					</div>   				   
				<?php 
				}
				 ?>	  
				 <?php if ($postFormat == "quote")	
				 {
				 ?> 
				 
 	   			   		<p class="meta source"><?php echo get_post_meta($post->ID, 'single_format_quote', true); ?></p>
				<?php 
				}
				 ?>	  
				 
					   <?php get_template_part( 'format-post-bottom', 'meta' ); ?>				   
		
	          
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'meanthemes' ), 'after' => '</div>' ) ); ?>
	          
	        </div>
	        
			</article>
		<?php endwhile; ?>
			    
	</div>		
</div>  
<?php if( (isset($general_options[ 'show_nav' ])) && ($general_options[ 'show_nav' ])) { ?>
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
<?php } ?>


	<div class="navigation">
		<div class="wrapper">
			<div class="nav-next"><?php next_post_link( '%link &gt;' ); ?></div>
			<div class="nav-previous"><?php previous_post_link( '&lt; %link' ); ?></div>
		</div><!-- /wrapper -->
	</div><!-- /navigation -->
	
	
				

	<?php comments_template( '', true ); ?>		
		    
<?php get_footer(); ?>