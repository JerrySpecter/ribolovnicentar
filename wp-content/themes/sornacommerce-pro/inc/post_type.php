<?php
add_action('init', 'edsbootstrap_post_type_html5'); // Add our HTML5 Blank Custom Post Type
function edsbootstrap_post_type_html5(){
	
 if( cs_get_option('eds_testimonial') != "" ){ 	
	$labels = array(
			'name' => __( 'Testimonial', 'sornacommerce' ), // Tip: _x('') is used for localization
			'singular_name' => __( 'Testimonial', 'sornacommerce' ),
			'add_new' => __( 'Add Testimonial', 'sornacommerce' ),
			'add_new_item' => __( 'Add Testimonial Item' ,'sornacommerce'),
			'edit_item' => __( 'Edit Testimonial'  ,'sornacommerce'),
			'new_item' => __( 'Add New Testimonial'  ,'sornacommerce'),
			'view_item' => __( 'View All'  ,'sornacommerce'),
			'search_items' => __( 'Search Item'  ,'sornacommerce'),
			'not_found' =>  __( 'No Latest Item' ,'sornacommerce' ),
			'not_found_in_trash' => __( 'No Latest Testimonial Found in trash' ,'sornacommerce' ),
			'parent_item_colon' => ''
	
		);
	
		// Create an array for the $args
	
	$args = array( 'labels' => $labels, /* NOTICE: the $labels variable is used here... */
				'public' => false,
				'publicly_queryable' => true,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'menu_position' => 22,
				'menu_icon' => 'dashicons-format-quote',
				'supports' => array( 'title','editor','thumbnail' )
		); 
	register_post_type( 'eds_testimonial', $args ); /* Register it and move on */
 }
}

add_action('do_meta_boxes', 'replace_featured_image_box');  
function replace_featured_image_box()  
{  
	
	remove_meta_box( 'postimagediv', 'eds_testimonial', 'side' );  
	add_meta_box('postimagediv', __('Profile Picture','sornacommerce'), 'post_thumbnail_meta_box', 'eds_testimonial', 'side', 'low'); 
	
	
}  








