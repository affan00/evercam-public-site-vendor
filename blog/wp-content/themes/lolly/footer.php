<?php $general_options = get_option( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $social_options = get_option ( 'meanthemes_theme_social_options_lolly' ); ?>
<?php $styling_options = get_option( 'meanthemes_theme_styling_options_lolly'); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>

</section>
			
			<footer>
				<?php if( (isset($general_options[ 'show_widget_footer' ])) && ($general_options[ 'show_widget_footer' ])) { ?>
				<div class="footer-widgets">
				<div class="wrapper">
				
						<div class="widgets">
								<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget Area')) : ?>
							<?php endif; ?>
						</div><!-- /widgets -->
				</div>
				</div>
												<?php } ?>
					
					<div class="foot">
						<div class="wrapper">
						<p class="copyright"><?php _e('&copy;', 'meanthemes') ?> <?php echo date("Y"); ?> <?php bloginfo('name'); ?> 
						<?php if( (isset($general_options[ 'show_footer_credit' ])) && ($general_options[ 'show_footer_credit' ])) { ?>
							<a class="credit" href="http://www.meanthemes.com/" title="MeanThemes - Another WordPress Theme website">- A MeanThemes Theme</a></p>
						<?php } ?>
						<?php if( (isset($general_options[ 'social_footer' ])) && ($general_options[ 'social_footer' ])) { ?>
						<?php
							$twitter = esc_url( $social_options['twitter'] );
							$facebook = esc_url( $social_options['facebook'] );
							$linkedIn = esc_url( $social_options['linkedin'] );
							$googlePlus = esc_url( $social_options['googleplus'] );
							$vimeo = esc_url( $social_options['vimeo'] );
							$youTube = esc_url( $social_options['youtube'] );
							$pinterest = esc_url( $social_options['pinterest'] );
							$zerply = esc_url( $social_options['zerply'] );
							$dribbble = esc_url( $social_options['dribbble'] );
							$github = esc_url( $social_options['github'] );
							$instagram = esc_url( $social_options['instagram'] );
							$flickr = esc_url( $social_options['flickr'] );
							$rss = esc_url( $social_options['rss'] );
							$behance = esc_url( $social_options['behance'] );
							$adn = esc_url( $social_options['adn'] );
							if($twitter) {
								$twitter = '<li><a class="twitter" href="'. esc_url( $social_options['twitter'] ) .'" title="'. __('Twitter', 'meanthemes') .'"><span>'. __('Twitter', 'meanthemes') .'</span></a></li>';
							}
							if($adn) {
								$adn = '<li><a class="adn" href="'. esc_url( $social_options['adn'] ) .'" title="'. __('App.net', 'meanthemes') .'"><span>'. __('App.net', 'meanthemes') .'</span></a></li>';
							}
							if($facebook) {
								$facebook = '<li><a class="facebook" href="'. esc_url( $social_options['facebook'] ) .'" title="'. __('Facebook', 'meanthemes') .'"><span>'. __('Facebook', 'meanthemes') .'</span></a></li>';
							}
							if($googlePlus) {
								$googlePlus = '<li><a class="googleplus" href="'. esc_url( $social_options['googleplus'] ) .'" title="'. __('Google +', 'meanthemes') .'"><span>'. __('Google +', 'meanthemes') .'</span></a></li>';
							}
							if($linkedIn) {
								$linkedIn = '<li><a class="linkedin" href="'. esc_url( $social_options['linkedin'] ) .'" title="'. __('Linked In', 'meanthemes') .'"><span>'. __('Linked In', 'meanthemes') .'</span></a></li>';
							}
							if($vimeo) {
								$vimeo = '<li><a class="vimeo" href="'. esc_url( $social_options['vimeo'] ) .'" title="'. __('Vimeo', 'meanthemes') .'"><span>'. __('Vimeo', 'meanthemes') .'</span></a></li>';
							}
							if($youTube) {
								$youTube = '<li><a class="youtube" href="'. esc_url( $social_options['youtube'] ) .'" title="'. __('YouTube', 'meanthemes') .'"><span>'. __('YouTube', 'meanthemes') .'</span></a></li>';
							}
							if($pinterest) {
								$pinterest = '<li><a class="pinterest" href="'. esc_url( $social_options['pinterest'] ) .'" title="'. __('Pinterest', 'meanthemes') .'"><span>'. __('Pinterest', 'meanthemes') .'</span></a></li>';
							}
							if($zerply) {
								$zerply = '<li><a class="zerply" href="'. esc_url( $social_options['zerply'] ) .'" title="'. __('Zerply', 'meanthemes') .'"><span>'. __('Zerply', 'meanthemes') .'</span></a></li>';
							}
							if($dribbble) {
								$dribbble = '<li><a class="dribbble" href="'. esc_url( $social_options['dribbble'] ) .'" title="'. __('Dribbble', 'meanthemes') .'"><span>'. __('Dribbble', 'meanthemes') .'</span></a></li>';
							}
							if($github) {
								$github = '<li><a class="github" href="'. esc_url( $social_options['github'] ) .'" title="'. __('Github', 'meanthemes') .'"><span>'. __('Github', 'meanthemes') .'</span></a></li>';
							}
							if($instagram) {
								$instagram = '<li><a class="instagram" href="'. esc_url( $social_options['instagram'] ) .'" title="'. __('Instagram', 'meanthemes') .'"><span>'. __('Instagram', 'meanthemes') .'</span></a></li>';
							}
							if($flickr) {
								$flickr = '<li><a class="flickr" href="'. esc_url( $social_options['flickr'] ) .'" title="'. __('Flickr', 'meanthemes') .'"><span>'. __('Flickr', 'meanthemes') .'</span></a></li>';
							}
							if($behance) {
								$behance = '<li><a class="behance" href="'. esc_url( $social_options['behance'] ) .'" title="'. __('Behance', 'meanthemes') .'"><span>'. __('Behance', 'meanthemes') .'</span></a></li>';
							}
							if($rss) {
								$rss = '<li><a class="rss" href="'. esc_url( $social_options['rss'] ) .'" title="'. __('RSS Feed', 'meanthemes') .'"><span>'. __('RSS Feed', 'meanthemes') .'</span></a></li>';
							}
						?>
						<ul class="social<?php if (isset( $general_options['social_white_header'] ) ) { echo(" social-white"); } ?>">
							<?php echo $twitter; ?>
							<?php echo $adn; ?>
							<?php echo $facebook; ?>
							<?php echo $googlePlus; ?>
							<?php echo $linkedIn; ?>
							<?php echo $zerply; ?>
							<?php echo $vimeo; ?>
							<?php echo $youTube; ?>
							<?php echo $pinterest; ?>
							<?php echo $dribbble; ?>
							<?php echo $github; ?>
							<?php echo $instagram; ?>
							<?php echo $flickr; ?>
							<?php echo $behance; ?>
							<?php echo $rss; ?>
						</ul>
						<?php } ?>
						</div><!-- /wrapper -->
					</div>
			</footer>
			<?php if( (isset($general_options[ 'show_topper' ])) && ($general_options[ 'show_topper' ])) { ?>
			<div class="topper one"></div><div class="topper two"></div><div class="topper three"></div><div class="topper four"></div>
			<?php } ?>
	</div><!-- /content-wrapper -->
</div><!-- /block-wrapper -->


<?php if( (isset($general_options[ 'truncate_comment_links' ])) && ($general_options[ 'truncate_comment_links' ])) { ?>
<script>
jQuery(document).ready(function () {
 //
 // Truncate links
 //
 if( jQuery('body').hasClass("mobile") ) {
 	jQuery('.comment-text a').truncate({
 					width: '150',
 					after: '&hellip;',
 					center: false,
 					addtitle: true,
 				});
 } else {
 	jQuery('.comment-text a').truncate({
 					width: '500',
 					after: '&hellip;',
 					center: false,
 					addtitle: true,
 				});
 }
});
</script>
<?php } ?>

<?php if( (isset($general_options[ 'mean_menu_kickin' ])) && ($general_options[ 'mean_menu_kickin' ])) { ?>
<script>
jQuery(document).ready(function () {
	//
	// MeanMenu (responsive menu)
	//
	jQuery('header nav').meanmenu({
	    meanScreenWidth: "<?php echo $general_options[ 'mean_menu_kickin' ]; ?>",
	    meanRevealPosition: "left"
	});
});
</script>
<?php } ?>
<script>
jQuery(document).ready(function () {
	//
	//  FitText
	//
	jQuery("h1, .archive-content h2").fitText(0.8, { minFontSize: '30px', maxFontSize: '<?php echo sanitize_text_field( $styling_options['heading_1'] ); ?>' });
	jQuery("h1.searching").fitText(0.8, { minFontSize: '<?php echo sanitize_text_field( $styling_options['heading_2'] );	?>', maxFontSize: '<?php echo sanitize_text_field( $styling_options['heading_2'] );	?>' });
	jQuery(".lead .title").fitText(1, { minFontSize: '16px', maxFontSize: '<?php echo sanitize_text_field( $styling_options['lead_size'] ); ?>' });
});
</script>

<?php if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
<?php wp_footer(); ?>
</body>
</html>

