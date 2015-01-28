<?php
if(defined("ABSPATH"))
{
	$path = ABSPATH;
}
else
{
	$path = "..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR;
}
include_once $path . 'wp-load.php';
include_once $path . 'wp-includes/wp-db.php';
include_once $path . 'wp-includes/pluggable.php';

if(isset($_POST["meanthemes_options"]))
{
	$optionType = $_POST["meanthemes_options"];

	if(isset($optionType["reset-general_options"]))
	{
		// default configuration options
		$defaultOptions = array(
			"google_analytics" => "",
			"truncate_comment_links" => "",
			"show_strapline" => "1",
			"switch_nav" => "",
			"show_blog_full" => "",
			"show_nav" => "",
			"show_author" => "1",
			"show_lead" => "1",
			"comments_off" => "",
			"social_footer" => "1",
			"social_header" => "",
			"social_white" => "",
			"show_footer_credit" => "1",
			"logo_text" => "1",
			"logoupload" => "",
			"logo_2x_upload" => "",
			"appletouchupload" => get_template_directory_uri().'/apple-touch-icon-precomposed.png',	
			"faviconupload" => get_template_directory_uri().'/favicon.png',
			"swatchupload" => "",
			"emailaddress" => "",
			"googleapikey" => "",
			"googleapill" => "",
			"pinupload" => "",
			"show_contactform" => "1",
			"mean_menu_kickin" => "620",
			"center_logo" => "",
			"hide_archive_title" => "",
			"hide_page_menu" => "",
			"no_thumbnail_gallery" => "",
			"no_thumbnail" => "",
			"centre_logo_mobile" => "1",	
			"show_social_share" => "1",
			"show_topper" => "1",
			"hide_read_more" => "",
			"gallery_slideshow" => "",
			"gallery_slideshow_interval" => "",
			"gallery_slideshow_pause" => ""
		);

		update_option("meanthemes_theme_general_options_lolly", $defaultOptions);
		header('Location:'. get_site_url() .'/wp-admin/admin.php?page=meanthemes_theme_options&tab=general_options');
	}
	if(isset($optionType["reset-social_options"]))
	{
		// default configuration options
		$defaultOptions = array(
			"twitter" => "",
			"facebook" => "",
			"linkedin" => "",
			"googleplus" => "",
			"zerply" => "",
			"vimeo" => "",
			"youtube" => "",
			"pinterest" => "",
			"dribbble" => "",
			"github" => "",
			"instagram" => "",
			"flickr" => "",
			"adn" => "",
			"behance" => "",
			"rss" => "",
			"twitter_widget_oauth_token" => "",
			"twitter_widget_oauth_secret" => "",
			"twitter_widget_consumer_key" => "",
			"twitter_widget_consumer_secret" => ""
		);
		update_option("meanthemes_theme_social_options_lolly", $defaultOptions);
		header('Location:'. get_site_url() .'/wp-admin/admin.php?page=meanthemes_theme_options&tab=social_options');
	}
	if(isset($optionType["reset-styling_options"]))
	{
		// default configuration options
		$defaultOptions = array(
			"block_1" => "#f77564",
			"block_2" => "#8bcfb5",
			"block_3" => "#8aabb5",
			"block_4" => "#b3ce7e",
			"block_1_title" => "#ffffff",
			"block_1_title_hover" => "#4F5455",
			"block_1_content" => "#464c4d",
			"block_1_meta" => "#ffffff",
			"block_1_meta_hover" => "#4F5455",
			"block_2_title" => "#ffffff",
			"block_2_title_hover" => "#4F5455",
			"block_2_content" => "#464c4d",
			"block_2_meta" => "#ffffff",
			"block_2_meta_hover" => "#4F5455",
			"block_3_title" => "#ffffff",
			"block_3_title_hover" => "#4F5455",
			"block_3_content" => "#464c4d",
			"block_3_meta" => "#ffffff",
			"block_3_meta_hover" => "#4F5455",
			"block_4_title" => "#ffffff",
			"block_4_title_hover" => "#4F5455",
			"block_4_content" => "#464c4d",
			"block_4_meta" => "#ffffff",
			"block_4_meta_hover" => "#4F5455",
			"logo_colour" => "#ffffff",
			"logo_colour_hover" => "#8bcfb5",
			"tagline_colour" => "#b6b7b4",
			"lead_colour" => "#b6b7b4",
			"lead_link_colour" => "#8bcfb5",
			"lead_link_hover_colour" => "#ffffff",
			"heading_font_colour" => "#54584c",
			"menu_nonactive_colour" => "#ffffff",
			"menu_active_colour" => "#aaacaa",
			"body_font_colour" => "#464c4d",
			"link_colour" => "#f77564",
			"hover_colour" => "#3e4345",
			"background_colour" => "#3e4345",
			"content_background_colour" => "#757c7e",
			"content_section_background_colour" => "#f6f6f6",
			"meta_colour" => "#aaacaa",
			"pagination_colour" => "#757c7e",
			"pagination_link" => "#ffffff",
			"pagination_link_hover" => "#8bcfb5",
			"footer_colour" => "#4f5455",
			"footer_heading_text" => "#ffffff",
			"footer_colour_text" => "#aaacaa",
			"footer_link_colour" => "#8bcfb5",
			"footer_link_colour_hover" => "#ffffff",
			"button_colour" => "#757c7e",
			"button_hover_colour" => "#3e4345",
			"white_border" => "#ffffff",
			"red_border" => "#8bcfb5",
			"google_map_colour" => "",
			"mobile_menu_colour" => "#232627",
			"heading_font" => "",
			"font_family" => "",
			"google_heading_font" => "",
			"google_body_font" => "",
			"googlefonts_advanced" => "",
			"googlefonts_advanced_css" => '',
			"typekit_id" => "",
			"typekit_heading_font" => "",
			"typekit_body_font" => "",
			"adobe_heading_font" => "",
			"main_nav_size" => "15px",
			"body_size" => "15px",
			"heading_1" => "50px",
			"heading_2" => "30px",
			"heading_3" => "26px",
			"heading_4" => "22px",
			"heading_5" => "19px",
			"heading_6" => "16px",
			"site_title_size" => "36px",
			"strapline_size" => "15px",
			"footer_size" => "13px",
			"meta_size" => "12px",
			"credits_size" => "11px",
			"lead_size" => "38px",
			"css_block" => ""
		);
		update_option("meanthemes_theme_styling_options_lolly", $defaultOptions);
		header('Location:'. get_site_url() .'/wp-admin/admin.php?page=meanthemes_theme_options&tab=styling_options');
	}

	if(isset($optionType["reset-content_options"]))
	{
		// default configuration options
		$defaultOptions = array(
			"lead_text" => __("Hello and welcome to Lolly.", "meanthemes"),
			"separator" => __("/", "meanthemes"),
			"share_on" => __("Share on: ", "meanthemes"),
			"filed_in" => __("Filed in: ", "meanthemes"),
			"written_by" => __("By ", "meanthemes"),
			"author_more" => __("See more posts by this author", "meanthemes"),
			"tagged_as" => __("Tagged as: ", "meanthemes"),
			"read_more" => __("Read more", "meanthemes"),
			"navigation" => __("Navigation", "meanthemes"),
			"contact_us_tab" => __("Contact us", "meanthemes")
		);

		update_option("meanthemes_theme_content_options_lolly", $defaultOptions);
		header('Location:'. get_site_url() .'/wp-admin/admin.php?page=meanthemes_theme_options&tab=content_options');
	}
}
?>