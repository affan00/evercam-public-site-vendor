<?php

/* custom PHP functions below this line */

	

 add_action('init', 'cptui_register_my_taxes_help_category');
function cptui_register_my_taxes_help_category() {
register_taxonomy( 'help_category',array (
  0 => 'help',
),
array( 'hierarchical' => true,
	'label' => 'Help Category',
	'show_ui' => true,
	'query_var' => true,
	'show_admin_column' => false,
	'labels' => array (
  'search_items' => 'Help Category',
  'popular_items' => '',
  'all_items' => '',
  'parent_item' => '',
  'parent_item_colon' => '',
  'edit_item' => '',
  'update_item' => '',
  'add_new_item' => '',
  'new_item_name' => '',
  'separate_items_with_commas' => '',
  'add_or_remove_items' => '',
  'choose_from_most_used' => '',
)
) ); 
}    



//JOBS CUSTOM POST TYPE
function my_custom_post_jobs() {
	$labels = array(
		'name'               => _x( 'Jobs', 'post type general name' ),
		'singular_name'      => _x( 'Job', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Job' ),
		'edit_item'          => __( 'Edit Job' ),
		'new_item'           => __( 'New Job' ),
		'all_items'          => __( 'All Jobs' ),
		'view_item'          => __( 'View Job' ),
		'search_items'       => __( 'Search Jobs' ),
		'not_found'          => __( 'No jobs found' ),
		'not_found_in_trash' => __( 'No jobs found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Jobs'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our jobs and job specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'jobs', $args );	
}
add_action( 'init', 'my_custom_post_jobs' );








//read more  funtion
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">...read more</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


?>

