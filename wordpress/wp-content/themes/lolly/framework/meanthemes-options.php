<?php header("Content-type: text/css"); 
if(defined("ABSPATH")) {
	$path = ABSPATH;
}
else {
	$path = "..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR;
}
if(file_exists($path."wp-load.php")) {
	include_once $path . 'wp-load.php';
} else {
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
}
?>
<?php $general_options = get_option( 'meanthemes_theme_general_options_lolly' ); ?>
<?php $styling_options = get_option( 'meanthemes_theme_styling_options_lolly'); ?>

<?php
$meanThemesFontHeading = sanitize_text_field( $styling_options['heading_font'] );
$meanThemesFontBody = sanitize_text_field( $styling_options['font_family'] );
$meanThemesGoogleFontHeading = sanitize_text_field( $styling_options['google_heading_font'] );
$meanThemesGoogleFontBody = sanitize_text_field( $styling_options['google_body_font'] );
$meanThemesTypekitFontHeading = sanitize_text_field( $styling_options['typekit_heading_font'] );
$meanThemesTypekitFontBody = sanitize_text_field( $styling_options['typekit_body_font'] );
$meanThemesAdobeFontHeading = sanitize_text_field( $styling_options['adobe_heading_font'] );
$meanThemesLogoColour = sanitize_text_field( $styling_options['logo_colour'] );
$meanThemesLogoColourHover = sanitize_text_field( $styling_options['logo_colour_hover'] );
$meanThemesTaglineColour = sanitize_text_field( $styling_options['tagline_colour'] );
$meanThemesHeadingColour = sanitize_text_field( $styling_options['heading_font_colour'] );
$meanThemesMenuActiveColour = sanitize_text_field( $styling_options['menu_active_colour'] );
$meanThemesMenuNonActiveColour = sanitize_text_field( $styling_options['menu_nonactive_colour'] );
$meanThemesBodyColour = sanitize_text_field( $styling_options['body_font_colour'] );
$meanThemesLinkColour = sanitize_text_field( $styling_options['link_colour'] );
$meanThemesHoverColour = sanitize_text_field( $styling_options['hover_colour'] );
$meanThemesFooterColour = sanitize_text_field( $styling_options['footer_colour'] );
$meanThemesSidebarColour = sanitize_text_field( $styling_options['sidebar_colour'] );
$meanThemesBackgroundColour = sanitize_text_field( $styling_options['background_colour'] );
$meanThemesContentBackgroundColour = sanitize_text_field( $styling_options['content_background_colour'] );
$meanThemesFooterTextColour = sanitize_text_field( $styling_options['footer_colour_text'] );
$meanThemesFooterLinkColour = sanitize_text_field( $styling_options['footer_link_colour'] );
$meanThemesFooterLinkHoverColour = sanitize_text_field( $styling_options['footer_link_colour_hover'] );
$meanThemesFooterHeadingColour = sanitize_text_field( $styling_options['footer_heading_text'] );
$meanThemesBackgroundImage = sanitize_text_field( $general_options['swatchupload'] );
$meanThemesButtonColour = sanitize_text_field( $styling_options['button_colour'] );
$meanThemesButtonColourHover = sanitize_text_field( $styling_options['button_hover_colour'] );
$meanThemesMainNav = sanitize_text_field( $styling_options['main_nav_size'] );
$meanThemesBodySize = sanitize_text_field( $styling_options['body_size'] );
$meanThemesHeading1 = sanitize_text_field( $styling_options['heading_1'] );
$meanThemesHeading2 = sanitize_text_field( $styling_options['heading_2'] );
$meanThemesHeading3 = sanitize_text_field( $styling_options['heading_3'] );
$meanThemesHeading4 = sanitize_text_field( $styling_options['heading_4'] );
$meanThemesHeading5 = sanitize_text_field( $styling_options['heading_5'] );
$meanThemesHeading6 = sanitize_text_field( $styling_options['heading_6'] );
$meanThemesSiteTitleSize = sanitize_text_field( $styling_options['site_title_size'] );
$meanThemesStraplineSize = sanitize_text_field( $styling_options['strapline_size'] );
$meanThemesFooterSize = sanitize_text_field( $styling_options['footer_size'] );
$meanThemesMobileMenu = sanitize_text_field( $styling_options['mobile_menu_colour'] );
$creditsSize = sanitize_text_field( $styling_options['credits_size'] );
$leadSize = sanitize_text_field( $styling_options['lead_size'] );
$metaItalic = ( $general_options['meta_italic'] );
$metaColour = sanitize_text_field( $styling_options['meta_colour'] );
$mobileEnable = sanitize_text_field( $general_options['mean_menu_kickin'] );
$mobileCenterLogo = sanitize_text_field( $general_options['centre_logo_mobile'] );
$googleFontAdvanced = sanitize_text_field( $styling_options['googlefonts_advanced_css'] );
$block_1 = sanitize_text_field( $styling_options['block_1'] );
$block_2 = sanitize_text_field( $styling_options['block_2'] );
$block_3 = sanitize_text_field( $styling_options['block_3'] );
$block_4 = sanitize_text_field( $styling_options['block_4'] );
$block_1_title = sanitize_text_field( $styling_options['block_1_title'] );
$block_1_title_hover = sanitize_text_field( $styling_options['block_1_title_hover'] );
$block_1_content = sanitize_text_field( $styling_options['block_1_content'] );
$block_1_meta = sanitize_text_field( $styling_options['block_1_meta'] );
$block_1_meta_hover = sanitize_text_field( $styling_options['block_1_meta_hover'] );
$block_2_title = sanitize_text_field( $styling_options['block_2_title'] );
$block_2_title_hover = sanitize_text_field( $styling_options['block_2_title_hover'] );
$block_2_content = sanitize_text_field( $styling_options['block_2_content'] );
$block_2_meta = sanitize_text_field( $styling_options['block_2_meta'] );
$block_2_meta_hover = sanitize_text_field( $styling_options['block_2_meta_hover'] );
$block_3_title = sanitize_text_field( $styling_options['block_3_title'] );
$block_3_title_hover = sanitize_text_field( $styling_options['block_3_title_hover'] );
$block_3_content = sanitize_text_field( $styling_options['block_3_content'] );
$block_3_meta = sanitize_text_field( $styling_options['block_3_meta'] );
$block_3_meta_hover = sanitize_text_field( $styling_options['block_3_meta_hover'] );
$block_4_title = sanitize_text_field( $styling_options['block_4_title'] );
$block_4_title_hover = sanitize_text_field( $styling_options['block_4_title_hover'] );
$block_4_content = sanitize_text_field( $styling_options['block_4_content'] );
$block_4_meta = sanitize_text_field( $styling_options['block_4_meta'] );
$block_4_meta_hover = sanitize_text_field( $styling_options['block_4_meta_hover'] );
$paginationColour = sanitize_text_field( $styling_options['pagination_colour'] );
$paginationLink = sanitize_text_field( $styling_options['pagination_link'] );
$paginationLinkHover = sanitize_text_field( $styling_options['pagination_link_hover'] );
$contentSectionColour = sanitize_text_field( $styling_options['content_section_background_colour'] );
$metaSize = sanitize_text_field( $styling_options['meta_size'] );
$whiteBorderColor = sanitize_text_field( $styling_options['white_border'] );
$redBorderColor = sanitize_text_field( $styling_options['red_border'] );
$leadColour = sanitize_text_field( $styling_options['lead_colour'] );
$leadLinkColour = sanitize_text_field( $styling_options['lead_link_colour'] );
$leadLinkHoverColour = sanitize_text_field( $styling_options['lead_link_hover_colour'] );

if ($meanThemesFontHeading == "verdana") {
	$meanThemesFontHeading = 'Verdana, Geneva, sans-serif';
}
if ($meanThemesFontHeading == "georgia") {
	$meanThemesFontHeading = 'Georgia, "Times New Roman", Times, serif';
}
if ($meanThemesFontHeading == "courier") {
	$meanThemesFontHeading = '"Courier New", Courier, monospace';
}
if ($meanThemesFontHeading == "arial") {
	$meanThemesFontHeading = 'Arial, Helvetica, sans-serif';
}
if ($meanThemesFontHeading == "helvetica") {
	$meanThemesFontHeading = 'Helvetica, Arial, sans-serif';
}
if ($meanThemesFontHeading == "tahoma") {
	$meanThemesFontHeading = 'Tahoma, Geneva, sans-serif';
}
if ($meanThemesFontHeading == "trebuchet") {
	$meanThemesFontHeading = '"Trebuchet MS", Arial, Helvetica, sans-serif';
}
if ($meanThemesFontHeading == "arialblack") {
	$meanThemesFontHeading = '"Arial Black", Gadget, sans-serif';
}
if ($meanThemesFontHeading == "timesnew") {
	$meanThemesFontHeading = '"Times New Roman", Times, serif';
}
if ($meanThemesFontHeading == "palatino") {
	$meanThemesFontHeading = '"Palatino Linotype", "Book Antiqua", Palatino, serif';
}
if ($meanThemesFontHeading == "lucida") {
	$meanThemesFontHeading = '"Lucida Sans Unicode", "Lucida Grande", sans-serif';
}
if ($meanThemesFontHeading == "msserif") {
	$meanThemesFontHeading = '"MS Serif", "New York", serif';
}
if ($meanThemesFontHeading == "lucidaconsole") {
	$meanThemesFontHeading = '"Lucida Console", Monaco, monospace';
}
if ($meanThemesFontBody == "verdana") {
	$meanThemesFontBody = 'Verdana, Geneva, sans-serif';
}
if ($meanThemesFontBody == "georgia") {
	$meanThemesFontBody = 'Georgia, "Times New Roman", Times, serif';
}
if ($meanThemesFontBody == "courier") {
	$meanThemesFontBody = '"Courier New", Courier, monospace';
}
if ($meanThemesFontBody == "arial") {
	$meanThemesFontBody = 'Arial, Helvetica, sans-serif';
}
if ($meanThemesFontBody == "helvetica") {
	$meanThemesFontBody = 'Helvetica, Arial, sans-serif';
}
if ($meanThemesFontBody == "tahoma") {
	$meanThemesFontBody = 'Tahoma, Geneva, sans-serif';
}
if ($meanThemesFontBody == "trebuchet") {
	$meanThemesFontBody = '"Trebuchet MS", Arial, Helvetica, sans-serif';
}
if ($meanThemesFontBody == "arialblack") {
	$meanThemesFontBody = '"Arial Black", Gadget, sans-serif';
}
if ($meanThemesFontBody == "timesnew") {
	$meanThemesFontBody = '"Times New Roman", Times, serif';
}
if ($meanThemesFontBody == "palatino") {
	$meanThemesFontBody = '"Palatino Linotype", "Book Antiqua", Palatino, serif';
}
if ($meanThemesFontBody == "lucida") {
	$meanThemesFontBody = '"Lucida Sans Unicode", "Lucida Grande", sans-serif';
}
if ($meanThemesFontBody == "msserif") {
	$meanThemesFontBody = '"MS Serif", "New York", serif';
}
if ($meanThemesFontBody == "lucidaconsole") {
	$meanThemesFontBody = '"Lucida Console", Monaco, monospace';
}
if ( ($meanThemesGoogleFontHeading) && ($meanThemesGoogleFontBody) ) {
	$meanThemesGoogleFont = $meanThemesGoogleFontHeading .'|'. $meanThemesGoogleFontBody;
if(!$meanThemesFontBody) {
	$meanThemesFontBody = "";
}
if(!$meanThemesFontHeading) {
	$meanThemesFontHeading = "";
}
if($meanThemesFontBody) {
	$meanThemesFontBody = ",".$meanThemesFontBody ;
}
if($meanThemesFontHeading) {
	$meanThemesFontHeading = ",".$meanThemesFontHeading;
}
	$meanThemesGoogleFontBody = 'font-family: "'.$meanThemesGoogleFontBody.'"'.$meanThemesFontBody.', "cursive";';
	$meanThemesGoogleFontHeading = 'font-family: "'.$meanThemesGoogleFontHeading.'"'.$meanThemesFontHeading.', "cursive";';
} else if ( ($meanThemesGoogleFontHeading) && (!$meanThemesGoogleFontBody) ) {
	$meanThemesGoogleFont = $meanThemesGoogleFontHeading;
	$meanThemesGoogleFontHeading = 'font-family: "'.$meanThemesGoogleFontHeading.'"'.$meanThemesFontHeading.', "cursive";';
	$meanThemesGoogleFontBody = "";
} else if ( (!$meanThemesGoogleFontHeading) && ($meanThemesGoogleFontBody) ) {
	$meanThemesGoogleFont = $meanThemesGoogleFontBody;
	$meanThemesGoogleFontBody = 'font-family: "'.$meanThemesGoogleFontBody.'"'.$meanThemesFontBody.', "cursive";';
	$meanThemesGoogleFontHeading = "";
}
?>
<?php if ( (!$meanThemesGoogleFontHeading) && (!$meanThemesGoogleFontBody) && (!$googleFontAdvanced) ) {
 ?>
@import url(//fonts.googleapis.com/css?family=Lato:300,400);
h1, .content.archive-content h2, .lead .title, .site-title { 
font-family: "Lato", sans-serif; font-weight: 300; 
}
header nav {
font-weight: 400;
}
<?php } ?>
<?php if($meanThemesGoogleFont) {
$str = ($meanThemesGoogleFont);
$meanThemesGoogleFont = str_replace(' ', '+', $str);
?>
@import url(//fonts.googleapis.com/css?family=<?php echo ($meanThemesGoogleFont); ?>);
body,
input,
textarea { <?php echo ($meanThemesGoogleFontBody); ?> color: <?php echo ($meanThemesBodyColour); ?> }
<?php } ?>

<?php if($meanThemesHeadingSuper) { ?>
header .supersize {
font-size: <?php echo $meanThemesHeadingSuper; ?>;
}
<?php } ?>

<?php if($meanThemesBodySize) { ?>
body, 
input, 
button,
textarea,
.meta .more,
p.form-submit input, button, input.searchsubmit
{ font-size: <?php echo $meanThemesBodySize; ?>; }
<?php } ?>
<?php if($meanThemesHeading1) { ?>
h1, .content.archive-content h2
{ font-size: <?php echo $meanThemesHeading1; ?>; }
<?php } ?>
<?php if($meanThemesHeading2) { ?>
h2 { font-size: <?php echo $meanThemesHeading2; ?>; }
<?php } ?>
<?php if($meanThemesHeading3) { ?>
h3
{ font-size: <?php echo $meanThemesHeading3; ?>; }
<?php } ?>
<?php if($meanThemesHeading4) { ?>
h4 { font-size: <?php echo $meanThemesHeading4; ?>; }
<?php } ?>
<?php if($meanThemesHeading5) { ?>
h5 { font-size: <?php echo $meanThemesHeading5; ?>; }
<?php } ?>
<?php if($meanThemesHeading6) { ?>
h6, blockquote
{ font-size: <?php echo $meanThemesHeading6; ?>; }
<?php } ?>
<?php if($meanThemesSiteTitleSize) { ?>
	header span.site-title { font-size: <?php echo $meanThemesSiteTitleSize; ?> !important; }
<?php } ?>
<?php if($meanThemesStraplineSize) { ?>
.tagline { font-size: <?php echo $meanThemesStraplineSize; ?> !important; }
<?php } ?>
<?php if($meanThemesFooterSize) { ?>
.meta, .sidebar, .navigation, footer, #commentform .form-allowed-tags, header nav ul ul, .author-meta { font-size: <?php echo $meanThemesFooterSize; ?>; }
<?php } ?>
<?php if($meanThemesMainNav) { ?>
header nav { font-size: <?php echo $meanThemesMainNav; ?>; }
<?php } ?>

<?php if($meanThemesBackgroundColour) { ?>
body, html.boxed body { background: <?php echo $meanThemesBackgroundColour; ?>; }
<?php } ?>
<?php if($meanThemesContentBackgroundColour) { ?>
#content-wrapper, .lead { background: <?php echo $meanThemesContentBackgroundColour; ?>; }
<?php } ?>
<?php if($meanThemesBackgroundImage) { ?>
body, html.boxed body { background-image: url(<?php echo $meanThemesBackgroundImage; ?>); background-repeat: repeat; background-position: 0 0;  }
<?php } ?>
<?php if ( ($meanThemesFontHeading) && (!$meanThemesGoogleFontHeading) && (!$meanThemesTypekitFontHeading) && (!$meanThemesAdobeFontHeading) ) { ?>
h1, .content.archive-content h2, .lead .title, .site-title
 { font-family: <?php echo ($meanThemesFontHeading); ?> }
<?php } ?>
<?php if( ($meanThemesFontBody) && (!$meanThemesGoogleFontBody) && (!$meanThemesTypekitFontHeading) && (!$meanThemesAdobeFontHeading) ) { ?>
body, 
input, 
button,
textarea { font-family: <?php echo ($meanThemesFontBody); ?>; }
<?php } ?>

<?php if($meanThemesTypekitFontBody) { ?>
body, 
input, 
textarea { font-family: <?php echo ($meanThemesTypekitFontBody); ?> !important; }
<?php } ?>
<?php if($meanThemesBodyColour) { ?>
/* Content Colour */
body, 
input, 
button,
textarea {
color: <?php echo $meanThemesBodyColour; ?>;
}
<?php } ?>
<?php if($meanThemesGoogleFontHeading) { ?>
h1, .content.archive-content h2, .lead .title, .site-title {
<?php echo ($meanThemesGoogleFontHeading); ?>
}
<?php } ?>
<?php if($meanThemesTypekitFontHeading) { ?>
h1, .content.archive-content h2, .lead .title, .site-title {
font-family: <?php echo $meanThemesTypekitFontHeading; ?> !important; 
}
<?php } ?>
<?php if($meanThemesAdobeFontHeading) { ?>
h1, .content.archive-content h2, .lead .title, .site-title {
font-family: <?php echo $meanThemesAdobeFontHeading; ?>, serif !important; ; 
}
<?php } ?>
<?php if($meanThemesLogoColour) { ?>
/* Plain Text Logo Colour */
header span.site-title,
header span.site-title a {
color: <?php echo $meanThemesLogoColour; ?>;
}
<?php } ?>
<?php if($meanThemesLogoColourHover) { ?>
header span.site-title a:hover {
color: <?php echo $meanThemesLogoColourHover; ?>;
}
<?php } ?>
<?php if($meanThemesTaglineColour) { ?>
/* Tagline Colour */
header span.tagline {
color: <?php echo $meanThemesTaglineColour; ?>;
}
<?php } ?>
<?php if($meanThemesHeadingColour) { ?>
/* Heading Colours */
h1, h2 a, .sidebar h5,
.content.archive-content h2 a, .meta .more a:hover,
h2, h3, h4, h5, h6
{
color: <?php echo $meanThemesHeadingColour;?>;
}
<?php } ?>


<?php if($meanThemesLinkColour) { ?>
/* Link Colours */
a,
.content.archive-content h2 a:hover, .meta a:hover, .meta .more a,
.sidebar li.current_page_item a:hover
 {
color: <?php echo $meanThemesLinkColour; ?>;
}

<?php } ?>

<?php if($meanThemesHoverColour) { ?>
/* Hover Colours */
a:hover, 
.sidebar li.current_page_item a, 
header nav ul li a:hover,
header nav ul li
{
color: <?php echo $meanThemesHoverColour; ?>;
}
<?php } ?>
<?php if($meanThemesFooterTextColour) { ?>
footer
{
color: <?php echo $meanThemesFooterTextColour; ?>;
}
<?php } ?>
<?php if($meanThemesFooterColour) { ?>
footer
{
background: <?php echo $meanThemesFooterColour; ?>;
}
<?php } ?>
<?php if($meanThemesSidebarColour) { ?>
.sidebar
{
background: <?php echo $meanThemesSidebarColour; ?>;
}
<?php } ?>
<?php if($meanThemesFooterHeadingColour) { ?>
footer h5
{
color: <?php echo $meanThemesFooterHeadingColour; ?>;
}
<?php } ?>
<?php if($meanThemesFooterLinkColour) { ?>
footer a
{
color: <?php echo $meanThemesFooterLinkColour; ?>;
}
<?php } ?>
<?php if($meanThemesFooterLinkHoverColour) { ?>
footer a:hover
{
color: <?php echo $meanThemesFooterLinkHoverColour; ?>;
}
<?php } ?>
<?php if($meanThemesButtonColour) { ?>
p.form-submit button, p.form-submit input, button:hover, input.searchsubmit, .comment-respond p.form-submit input, #respond p.form-submit input, .flex-next, .flex-prev, li.more a {
background-color: <?php echo $meanThemesButtonColour; ?>;
}

<?php } ?>
<?php if($meanThemesMenuNonActiveColour) { ?>
header nav ul li a,
header nav li.sfHover a {
color: <?php echo $meanThemesMenuNonActiveColour; ?>;
}
<?php } ?>
<?php if($meanThemesMenuActiveColour) { ?>
header nav ul li a:hover, 
header nav li.current_page_item a,
header nav li.current-menu-item a,
header nav li.current_page_ancestor a, 
header nav li.current_page_parent a,
header nav li.current-post-ancestor a, 
header nav li.current-page-ancestor a {
color: <?php echo $meanThemesMenuActiveColour; ?>;
}
<?php } ?>

<?php if($meanThemesButtonColourHover) { ?>
a:hover.more, a.btn:hover,
span.btn a:hover, 
button:hover, input#searchsubmit:hover, 
.form-submit input:hover,
p.form-submit button:hover,
p.form-submit input:hover, button:hover, input.searchsubmit:hover, .comment-respond p.form-submit input:hover, #respond p.form-submit input:hover, .flex-next:hover, .flex-prev:hover, li.more a:hover {
background-color: <?php echo $meanThemesButtonColourHover; ?>;
}
<?php } ?>

<?php if($meanThemesMobileMenu) { ?>
.mean-container .mean-bar, 
.mean-container .mean-nav, header nav ul ul { 
background: <?php echo $meanThemesMobileMenu; ?>
}
<?php } ?>



<?php if($meanThemesBorderGrey) { ?>



<?php } ?>


<?php if($creditsSize) { ?>
.foot .copyright {
font-size: <?php echo $creditsSize; ?>;
}
<?php } ?>
<?php if($leadSize) { ?>
.lead .title {
font-size: <?php echo $leadSize; ?>;
}
<?php } ?>
<?php if($metaColour) { ?>
.meta, .meta a {
color: <?php echo $metaColour; ?>;
}
<?php } ?>


<?php if($block_1) { ?>
.topper.one, .content.archive-content article:nth-of-type(4n-3) {  
  background-color: <?php echo $block_1; ?>;
  color: <?php echo $block_1_content; ?>;
}
.topper.one, .content.archive-content article.block_1 {
background-color: <?php echo $block_1; ?>;
color: <?php echo $block_1_content; ?>;
}
<?php } ?>
<?php if($block_1_title) { ?>
.content.archive-content article:nth-of-type(4n-3) h2 a {  
  color: <?php echo $block_1_title; ?>;
}
.content.archive-content article.block_1 h2 a {  
  color: <?php echo $block_1_title; ?>;
}
<?php } ?>
<?php if($block_1_title_hover) { ?>
.content.archive-content article:nth-of-type(4n-3) h2 a:hover {  
  color: <?php echo $block_1_title_hover; ?>;
}
.content.archive-content article.block_1 h2 a:hover {  
  color: <?php echo $block_1_title_hover; ?>;
}
<?php } ?>
<?php if($block_1_meta) { ?>
.content.archive-content article:nth-of-type(4n-3) .meta, .content.archive-content article:nth-of-type(4n-3) .meta a {  
  color: <?php echo $block_1_meta; ?>;
}
.content.archive-content article.block_1 .meta, .content.archive-content article.block_1 .meta a {  
  color: <?php echo $block_1_meta; ?>;
}
<?php } ?>
<?php if($block_1_meta_hover) { ?>
.content.archive-content article:nth-of-type(4n-3) .meta a:hover {  
  color: <?php echo $block_1_meta_hover; ?>;
}
.content.archive-content article.block_1 .meta a:hover {  
  color: <?php echo $block_1_meta_hover; ?>;
}
<?php } ?>

<?php if($block_2) { ?>
.topper.two, .content.archive-content article:nth-of-type(4n-2) {  
  background-color: <?php echo $block_2; ?>;
  color: <?php echo $block_2_content; ?>;
}
.topper.two, .content.archive-content article.block_2 {  
  background-color: <?php echo $block_2; ?>;
  color: <?php echo $block_2_content; ?>;
}
<?php } ?>
<?php if($block_2_title) { ?>
.content.archive-content article:nth-of-type(4n-2) h2 a {  
  color: <?php echo $block_2_title; ?>;
}
.content.archive-content article.block_2 h2 a {  
  color: <?php echo $block_2_title; ?>;
}
<?php } ?>
<?php if($block_2_title_hover) { ?>
.content.archive-content article:nth-of-type(4n-2) h2 a:hover {  
  color: <?php echo $block_2_title_hover; ?>;
}
.content.archive-content article.block_2 h2 a:hover {  
  color: <?php echo $block_2_title_hover; ?>;
}
<?php } ?>
<?php if($block_2_meta) { ?>
.content.archive-content article:nth-of-type(4n-2) .meta, .content.archive-content article:nth-of-type(4n-2) .meta a {  
  color: <?php echo $block_2_meta; ?>;
}
.content.archive-content article.block_2 .meta, .content.archive-content article.block_2 .meta a {  
  color: <?php echo $block_2_meta; ?>;
}
<?php } ?>
<?php if($block_2_meta_hover) { ?>
.content.archive-content article:nth-of-type(4n-2) .meta a:hover {  
  color: <?php echo $block_2_meta_hover; ?>;
}
.content.archive-content article.block_2 .meta a:hover {  
  color: <?php echo $block_2_meta_hover; ?>;
}
<?php } ?>


<?php if($block_3) { ?>
.topper.three, .content.archive-content article:nth-of-type(4n-1) {  
  background-color: <?php echo $block_3; ?>;
  color: <?php echo $block_3_content; ?>;
}
.topper.three, .content article.block_3 {  
  background-color: <?php echo $block_3; ?>;
  color: <?php echo $block_3_content; ?>;
}
<?php if($block_3_title) { ?>
.content.archive-content article:nth-of-type(4n-1) h2 a {  
  color: <?php echo $block_3_title; ?>;
}
.content.archive-content article.block_3 h2 a {  
  color: <?php echo $block_3_title; ?>;
}
<?php } ?>
<?php if($block_3_title_hover) { ?>
.content.archive-content article:nth-of-type(4n-1) h2 a:hover {  
  color: <?php echo $block_3_title_hover; ?>;
}
.content.archive-content article.block_3 h2 a:hover {  
  color: <?php echo $block_3_title_hover; ?>;
}
<?php } ?>
<?php if($block_3_meta) { ?>
.content.archive-content article:nth-of-type(4n-1) .meta, .content.archive-content article:nth-of-type(4n-1) .meta a {  
  color: <?php echo $block_3_meta; ?>;
}
.content.archive-content article.block_3 .meta, .content.archive-content article.block_3 .meta a {  
  color: <?php echo $block_3_meta; ?>;
}
<?php } ?>
<?php if($block_3_meta_hover) { ?>
.content.archive-content article:nth-of-type(4n-1) .meta a:hover {  
  color: <?php echo $block_3_meta_hover; ?>;
}
.content.archive-content article.block_3 .meta a:hover {  
  color: <?php echo $block_3_meta_hover; ?>;
}
<?php } ?>


<?php } ?>
<?php if($block_4) { ?>
.topper.four, .content.archive-content article:nth-of-type(4n) {  
  background-color: <?php echo $block_4; ?>;
  color: <?php echo $block_4_content; ?>;
}
.topper.four, .content.archive-content article.block_4 {  
  background-color: <?php echo $block_4; ?>;
  color: <?php echo $block_4_content; ?>;
}
<?php } ?>
<?php if($block_4_title) { ?>
.content.archive-content article:nth-of-type(4n) h2 a {  
  color: <?php echo $block_4_title; ?>;
}
.content.archive-content article.block_4 h2 a {  
  color: <?php echo $block_4_title; ?>;
}
<?php } ?>
<?php if($block_4_title_hover) { ?>
.content.archive-content article:nth-of-type(4n) h2 a:hover {  
  color: <?php echo $block_4_title_hover; ?>;
}
.content.archive-content article.block_4 h2 a:hover {  
  color: <?php echo $block_4_title_hover; ?>;
}
<?php } ?>
<?php if($block_4_meta) { ?>
.content.archive-content article:nth-of-type(4n) .meta, .content.archive-content article:nth-of-type(4n) .meta a {  
  color: <?php echo $block_4_meta; ?>;
}
.content.archive-content article.block_4 .meta, .content.archive-content article.block_4 .meta a {  
  color: <?php echo $block_4_meta; ?>;
}
<?php } ?>
<?php if($block_4_meta_hover) { ?>
.content.archive-content article:nth-of-type(4n) .meta a:hover {  
  color: <?php echo $block_4_meta_hover; ?>;
}
.content.archive-content article.block_4 .meta a:hover {  
  color: <?php echo $block_4_meta_hover; ?>;
}
<?php } ?>

<?php if($paginationColour) { ?>
.navigation {
background: <?php echo $paginationColour; ?>;
}
<?php } ?>

<?php if($paginationLink) { ?>
.navigation, .navigation a, .navigation .nav-previous, .navigation .nav-next {
color: <?php echo $paginationLink; ?>;
}
<?php } ?>
<?php if($paginationLinkHover) { ?>
.navigation, .navigation a:hover, .navigation .nav-previous:hover, .navigation .nav-next:hover {
color: <?php echo $paginationLinkHover; ?>;
}
<?php } ?>

<?php if($contentSectionColour) { ?>
section.main, .comment-wrap {
background: <?php echo $contentSectionColour; ?>;
}
<?php } ?>

<?php if($metaSize) { ?>
.meta {
font-size: <?php echo $metaSize; ?>;
}
<?php } ?>

<?php if($leadColour) { ?>
.lead .title {
color: <?php echo $leadColour; ?>;
}
<?php } ?>

<?php if($leadLinkColour) { ?>
.lead .title a {
color: <?php echo $leadLinkColour; ?>;
}
<?php } ?>

<?php if($leadLinkHoverColour) { ?>
.lead .title a:hover {
color: <?php echo $leadLinkHoverColour; ?>;
}
<?php } ?>

<?php if($whiteBorderColor) { ?>
.divider {
border-bottom: 1px solid <?php echo $whiteBorderColor; ?>;
}
<?php } ?>

<?php if($redBorderColor) { ?>
.lead .title, .foot .wrapper {
border-top: 1px solid <?php echo $redBorderColor; ?>;
border-bottom: 1px solid <?php echo $redBorderColor; ?>;
}
blockquote {
border-left: 1px solid <?php echo $redBorderColor; ?>;
}

.foot .wrapper {
border-bottom: none;
}
<?php } ?>

<?php if($mobileEnable) { ?>
@media screen and (max-width: <?php echo $mobileEnable; ?>px) {
header nav {
display: none;
}
<?php if($mobileCenterLogo) { ?>
header .logo {
width: 100%;
text-align: center;
}
header .tagline {
display: block;
}
<?php } ?>
}
<?php } ?>



<?php if( $googleFontAdvanced ) { ?>	
	<?php echo $googleFontAdvanced; ?>	
<?php } ?>	
<?php echo sanitize_text_field( $styling_options['css_block'] ); ?>

