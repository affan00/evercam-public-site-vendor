<?php $general_options = get_option ( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
<article class="format-gallery" id="post-<?php the_ID(); ?>">
				
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
						    $thumbid = "";
						    $posttitle = "";
						    foreach( $attachments as $attachment ) {
						        if( $attachment->ID == $thumbid ) continue;
						        $src = wp_get_attachment_image_src( $attachment->ID, "mobile-thumb" );
						        $image_single = wp_get_attachment_image_src( $attachment->ID, "single-thumb" );
						        $caption = $attachment->post_excerpt;
						        $caption = ($caption) ? $caption : $posttitle;
						        $alt = ( !empty($attachment->post_content) ) ? $attachment->post_content : $attachment->post_title;
						        $the_title = get_the_title();
						        $the_permalink = get_permalink();
						        
						        echo "<li><a href='$the_permalink' title='$the_title'><img class='img-width featured-image' src='$src[0]' data-fullsrc='$image_single[0]' alt='$alt' /></a></li>";
						        $i++;
						    }
						}			
								?>	
				
				</ul>
				<div class="flex-container"></div>	             
				    	
				</div><!-- /flexslider -->		
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php the_title(); ?></a></h2>
					<?php get_template_part( 'format-post-top', 'meta' ); ?>
	   			   <?php get_template_part( 'format-post-excerpt', 'content' ); ?>				   
	   			   <?php get_template_part( 'format-post-bottom', 'meta' ); ?>	
	   			   <?php if( (isset($general_options[ 'gallery_slideshow' ])) && ($general_options[ 'gallery_slideshow' ])) {
	   			   		$gallerySlideshow = "true";	
	   			   		} else {
	   			   		$gallerySlideshow = "false";
	   			   		}
	   			   		?>
	   			   <script>
	   			   	jQuery(window).load(function() {
	   			   	  jQuery('#post-<?php the_ID(); ?> .flexslider').flexslider({
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
			</article><!-- /article -->	

        
		<?php comments_template( '', true ); ?>
