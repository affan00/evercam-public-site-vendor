<?php $general_options = get_option( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $social_options = get_option ( 'meanthemes_theme_social_options_lolly' ); ?>
<?php $styling_options = get_option( 'meanthemes_theme_styling_options_lolly'); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_lolly' ); ?>
<?php
if( (isset($general_options[ 'switch_nav' ])) && ($general_options[ 'switch_nav' ])) {
	$switchNav = " left";
} else {
	$switchNav = "";
}
if( (isset($general_options[ 'show_nav' ])) && ($general_options[ 'show_nav' ])) {
	$showNav = " sidebar-on";
} else {
	$showNav = "";
}
if( (isset($general_options[ 'center_logo' ])) && ($general_options[ 'center_logo' ])) {
	$headerCenter = ' class="center"';
} else {
	$headerCenter = "";
}

$meanThemesGoogleFontHeading = "";
$meanThemesGoogleFontBody = "";
$meanThemesGoogleFontHeading = sanitize_text_field( $styling_options['google_heading_font'] );
$meanThemesGoogleFontBody = sanitize_text_field( $styling_options['google_body_font'] );
 ?>
<!doctype html>
<!--[if lt IE 7 ]> 
<html class="no-js ie6 oldie <?php page_bodyclass(); ?><?php echo $showNav; ?><?php echo $switchNav; ?>" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 7 ]>    
<html class="no-js ie7 oldie <?php page_bodyclass(); ?><?php echo $showNav; ?><?php echo $switchNav; ?>" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 8 ]>    
<html class="no-js ie8 oldie <?php page_bodyclass(); ?><?php echo $showNav; ?><?php echo $switchNav; ?>" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 9 ]>    
<html class="no-js ie9 <?php page_bodyclass(); ?><?php echo $showNav; ?><?php echo $switchNav; ?>" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js <?php page_bodyclass(); ?><?php echo $showNav; ?><?php echo $switchNav; ?>" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<title><?php
global $page, $paged;
wp_title( '|', true, 'right' );
bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
	echo " | $site_description";
if ( $paged >= 2 || $page >= 2 )
	echo ' | ' . sprintf( __( 'Page %s', 'meanthemes' ), max( $paged, $page ) );
?>
</title>
<meta name="description" content="<?php if ( is_single() ) {
	single_post_title('', true);
} else {
	bloginfo('name'); echo " - "; bloginfo('description');
}
?>" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="icon" type="image/png" href="<?php echo $general_options['faviconupload'] ? esc_url( $general_options['faviconupload'] ) : ''; ?>" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $general_options['appletouchupload'] ? esc_url( $general_options['appletouchupload'] ) : ''; ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

<?php if( $general_options[ 'google_analytics' ] ) { ?>	
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo sanitize_text_field( $general_options['google_analytics'] ); ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php } ?>
<?php 
if( (isset($styling_options[ 'typekit_id' ])) && ($styling_options[ 'typekit_id' ])) {
?>	
	<script src="//use.typekit.net/<?php echo sanitize_text_field( $styling_options['typekit_id'] ); ?>.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
<?php } ?>		
<?php
if( (isset($styling_options[ 'adobe_heading_font' ])) && ($styling_options[ 'adobe_heading_font' ])) {
?>
	<script src="//use.edgefonts.net/<?php echo sanitize_text_field( $styling_options['adobe_heading_font'] ); ?>.js"></script>
<?php } ?>	
<?php
if( (isset($styling_options[ 'googlefonts_advanced' ])) && ($styling_options[ 'googlefonts_advanced' ])) {
?>	<script>
		<?php echo ( $styling_options['googlefonts_advanced'] ); ?>
	</script>	
<?php } ?>			
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<?php
	// display retina image
	$retinaLogo = "";
	$retinaLogo = esc_url( $general_options['logo_2x_upload'] );
	
	function get_attachment_id_from_src ($link) {
	    global $wpdb;
	        $link = preg_replace('/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $link);
	        return $wpdb->get_var("SELECT ID FROM {$wpdb->posts} WHERE guid='$link'");
	}
	
	$attachment_id = get_attachment_id_from_src( $retinaLogo );
	$full_im = wp_get_attachment_image_src( $attachment_id, 'full');
	$imgWidth = round(($full_im[1])/2);
	$imgHeight = round(($full_im[2])/2);
	
?>
<?php if( (isset($general_options[ 'social_header' ])) && ($general_options[ 'social_header' ])) { ?>
		<div class="wrapper social-wrap">
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
		</div><!-- /wrapper -->
<?php } ?>		
		<div id="box-wrapper">
			<div id="content-wrapper">
				<?php if( (isset($general_options[ 'show_topper' ])) && ($general_options[ 'show_topper' ])) { ?>
				<div class="topper one"></div><div class="topper two"></div><div class="topper three"></div><div class="topper four"></div>
				<?php } ?>
				<header<?php echo $headerCenter; ?>>
					<div class="wrapper">
						<div class="logo">
							<span class="site-title"><a href="<?php echo get_home_url(); ?>/" title="<?php _e('Go to Home', 'meanthemes'); ?>">
							<?php if( (isset($general_options[ 'logo_text' ])) && ($general_options[ 'logo_text' ])) { ?>
								<?php bloginfo('name'); ?>								
							<?php } else { ?>
								<?php if($retinaLogo) {  ?>
									<?php echo $general_options['logoupload'] ? '<img src="' . esc_url( $general_options['logoupload'] ) . '" class="standard" alt=" "  />' : ''; ?>
									<img src="<?php echo esc_url( $general_options['logo_2x_upload'] ); ?>" width="<?php echo $imgWidth; ?>" height="<?php echo $imgHeight; ?>" class="retina" alt="<?php bloginfo('name'); ?>" />
								<?php } else {	?>
									<?php echo $general_options['logoupload'] ? '<img src="' . esc_url( $general_options['logoupload'] ) . '" class="standard" alt=" "  />' : ''; ?>
								<?php } ?>											
							<?php } ?>	
							</a></span>
							<?php if( (isset($general_options[ 'show_strapline' ])) && ($general_options[ 'show_strapline' ])) { ?>
								<span class="tagline"><?php bloginfo('description'); ?></span>
							<?php } ?>
						</div>
						<nav>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_id' => false, 'menu_class' => false ) ); ?>							
						</nav>
					</div>
				</header>
					
					<section class="main" role="main">