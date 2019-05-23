<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


// -----------------------------------------
// Testimonial Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_eds_page_settings',
  'title'     => 'Page Settings',
  'post_type' => array('post','page','product'),
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    array(
      'name'   => '_eds_page_settings',
      'fields' => array(
			
			array(
			'id'    => 'page_header',
			'type'  => 'switcher',
			'title' => 'Page Header',
			'label' => 'Turn on to display the cart icon in the main menu.',
			'default' => true,
			),
			array(
			  'id'    => '_page_header_background',
			  'type'  => 'background',
			  'title' => __('Page Header Background','sornacommerce'),
			  'desc'  => 'Pick a color for the Page header background color. or Upload your own custom background image or pattern.',
			 ),	
			array(
			  'id'      => '_page_header_color',
			  'type'    => 'color_picker',
			  'title'     => __('Page Header Text Color','sornacommerce'),
			  'default' => cs_get_option('eds_primary_color'),
			), 
			
      ),
    ),

  ),
);

// -----------------------------------------
// Testimonial Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_eds_testimonial',
  'title'     => 'Profile',
  'post_type' => 'eds_testimonial',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'eds_testimonial',
      'fields' => array(
			
			array(
			  'id'    => '_eds_des',
			  'type'  => 'text',
			  'title' => 'job description',
			),
      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
