<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$product_cat = get_terms( 'product_cat' );
$product_cat_array = array();
if( count($product_cat) > 0 ){ 
	foreach ( $product_cat as $term ) {	
		//var_dump($term->slug )name;
		$product_cat_array[$term->slug] = $term->name;
		
		
	}
}

$args = array(
	'orderby'          => 'title',
	'order'            => 'ASC',
	'post_type'        => 'product',
	'post_status'      => 'publish',
	'suppress_filters' => true,
	'posts_per_page'   => -1,
);
$posts_array = get_posts( $args );
$product_array = array();
if(count($posts_array) > 0){
	foreach ($posts_array as $val){
		$product_array[$val->ID] = $val->post_title; 
	}
}
$options[]     = array(
  'title'      => 'Products Slider Settings',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'      => 'milo_woo_shortcodes_products_slider',
      'title'     => 'Products Slider Settings',
      'fields'    => array(

        // shortcode option field
        array(
          'id'         => 'layout_type',
          'type'       => 'select',
          'title'      => 'Layout type',
          'options'    => array(
            'carousel'      => 'Carousel',
          ),
		  'label'      => 'Choose layout type of products slider',
        ),
		 array(
          'id'         => 'data_source',
          'type'       => 'select',
          'title'      => 'Data Sources',
          'options'    => array(
            'product_cat'      => 'Categories',
			'product_list_id'  => 'Product Items',
          )
        ),
		 array(
          'id'            => 'product_ids',
          'type'          => 'select',
          'title'         => 'Product Items',
          'options'    => $product_array,
		  'dependency'   => array( 'data_source', '==', 'product_list_id' ),
		  'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 125px; height: 100px;',
         	 )
        ),
		
		
  		array(
			'id'         => 'category',
			'type'       => 'select',
			'title'      => 'Categories',
			'options'    => $product_cat_array,
			'multi_select' => true,
			'dependency'   => array( 'data_source', '==', 'product_cat' ),
			'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 125px; height: 100px;',
         	 )
        ),
		 array(
		  'id'      => 'per_page',
		  'type'    => 'number',
		  'title'   => 'Product count',
		  'default' => '-1',
		
		),
	
		 array(
		  'id'      => 'orderby',
		  'type'    => 'select',
		  'title'   => 'Order By',
		  'default' => '-1',
		  'options'    => array(
            'date'      => 'Publish Date',
			'rand'      => 'Random',
			'title'      => 'Alphabetic',
			'popularity'      => 'Popularity',
			'rating'      => 'Rate',
			'price'      => 'price',
          ),
		  'default' =>'date',
		),
		 array(
		  'id'      => 'el_class',
		  'type'    => 'select',
		  'title'   => 'Sort order',
		  'default' => '-1',
		  'options'    => array(
            'asc'      => 'Ascending',
			'desc'      => 'Descending',
          ),
		  'default' =>'date',
		),
		 array(
		  'id'      => 'products_per_slide',
		  'type'    => 'select',
		  'title'   => 'Products per slide',
		  'default' => '-1',
		  'options'    => array(
            '1'      => '1',
			'2'      => '2',
			'3'      => '3',
			'4'      => '4',
			'5'      => '5',
			'6'      => '6',
          ),
		  'default' =>'2',
		),
		array(
		  'id'      => 'slide_duration',
		  'type'    => 'number',
		  'title'   => 'Slide Duration (ms)',
		  'default' => '5000',
		),
		

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_shortcode_2',
      'title'     => 'Basic Shortcode 2',
      'fields'    => array(

        array(
          'id'    => 'option_1',
          'type'  => 'text',
          'title' => 'Option 1',
          'help'  => 'Lorem Ipsum Dollar.',
        ),

        array(
          'id'    => 'option_2',
          'type'  => 'text',
          'title' => 'Option 2',
        ),

        array(
          'id'    => 'option_3',
          'type'  => 'text',
          'title' => 'Option 3',
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        )

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_shortcode_3',
      'title'     => 'Basic Shortcode 3',
      'fields'    => array(

        array(
          'id'         => 'title',
          'type'       => 'text',
          'title'      => 'Title',
        ),

        array(
          'id'         => 'active',
          'type'       => 'switcher',
          'title'      => 'Active',
          'label'      => 'You you want to it ?',
        ),

        array(
          'id'         => 'car',
          'type'       => 'select',
          'title'      => 'Your car',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'opel'     => 'Opel',
            'ferrari'  => 'Ferrari'
          )
        ),

        array(
          'id'         => 'content',
          'type'       => 'textarea',
          'title'      => 'Content',
        )

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_shortcode_4',
      'title'     => 'Basic Shortcode 4',
      'fields'    => array(

        array(
          'id'         => 'title',
          'type'       => 'text',
          'title'      => 'Title',
        ),

        array(
          'id'         => 'active',
          'type'       => 'radio',
          'title'      => 'Active',
          'options'    => array(
            'yes'      => 'Yes, Please.',
            'no'       => 'No, Thank you.',
          )
        ),

        array(
          'id'         => 'cars',
          'type'       => 'checkbox',
          'title'      => 'Select your cars',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'open'     => 'Opel',
            'ferrari'  => 'Ferrari'
          )
        ),

        array(
          'id'         => 'avatar',
          'type'       => 'upload',
          'title'      => 'Avatar',
        ),

        array(
          'id'         => 'content',
          'type'       => 'textarea',
          'title'      => 'Content',
        )

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_shortcode_5',
      'title'     => 'Basic Shortcode 5',
      'fields'    => array(

        array(
          'id'         => 'layout',
          'title'      => 'Layout',
          'type'       => 'image_select',
          'options'    => array(
            'layout-1' => 'http://codestarframework.com/assets/images/placeholder/65x65-2ecc71.gif',
            'layout-2' => 'http://codestarframework.com/assets/images/placeholder/65x65-e74c3c.gif',
            'layout-3' => 'http://codestarframework.com/assets/images/placeholder/65x65-3498db.gif',
          ),
        ),

        array(
          'id'         => 'cars',
          'type'       => 'select',
          'title'      => 'Select your cars',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'open'     => 'Opel',
            'ferrari'  => 'Ferrari',
            'jaguar'   => 'Jaguar',
            'seat'     => 'Seat',
          ),
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 125px; height: 100px;',
          )
        ),

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        )

      ),
    ),
    // end: shortcode

  ),
);

// -----------------------------------------
// Simple Shortcode Examples               -
// -----------------------------------------
$options[]     = array(
  'title'      => 'Simple Shortcode Examples',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'      => 'cs_simple_1',
      'title'     => 'Simple Shortcode 1',
      'fields'    => array(

        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_simple_2',
      'title'     => 'Simple Shortcode 2',
      'fields'    => array(

        array(
          'id'    => 'option_1',
          'type'  => 'text',
          'title' => 'Option 1',
        ),

        array(
          'id'    => 'option_2',
          'type'  => 'text',
          'title' => 'Option 2',
        ),

        array(
          'id'    => 'option_3',
          'type'  => 'text',
          'title' => 'Option 3',
        ),

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_simple_3',
      'title'     => 'Simple Shortcode 3',
      'fields'    => array(

        array(
          'id'         => 'title',
          'type'       => 'text',
          'title'      => 'Title',
        ),

        array(
          'id'         => 'active',
          'type'       => 'switcher',
          'title'      => 'Active',
          'label'      => 'You you want to it ?',
        ),

        array(
          'id'         => 'car',
          'type'       => 'select',
          'title'      => 'Your car',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'opel'     => 'Opel',
            'ferrari'  => 'Ferrari'
          )
        ),

      ),
    ),
    // end: shortcode

  ),
);

// -----------------------------------------
// Single Shortcode Examples               -
// -----------------------------------------
$options[]     = array(
  'title'      => 'Single Shortcode Examples',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'      => 'cs_single_1',
      'title'     => 'Single Shortcode 1',
      'fields'    => array(

        array(
          'type'    => 'content',
          'content' => 'Just click to "Insert Shortcode, this is adding a single shortcode',
        ),

      ),
    ),
    // end: shortcode


    // begin: shortcode
    array(
      'name'      => 'cs_single_2',
      'title'     => 'Single Shortcode 2',
      'fields'    => array(

        array(
          'type'    => 'content',
          'content' => 'Just click to "Insert Shortcode, this is adding a single shortcode',
        ),

      ),
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'      => 'cs_single_3',
      'title'     => 'Single Shortcode 3',
      'fields'    => array(

        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
          'help'  => 'This is a single shortcode and there is only content.',
        )

      ),
    ),
    // end: shortcode

  ),
);

// -----------------------------------------
// Advanced Shortcode Examples             -
// -----------------------------------------
$options[]     = array(
  'title'      => 'Advanced Shortcode Examples',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'           => 'cs_advanced_1',
      'title'          => 'Duplicate Shortcode',
      'view'           => 'clone_duplicate',
      'clone_title'    => 'Add New',
      'clone_fields'   => array(

        array(
          'id'         => 'title',
          'type'       => 'text',
          'title'      => 'Title',
        ),

        array(
          'id'         => 'content',
          'type'       => 'textarea',
          'title'      => 'Content',
        ),

      )
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'          => 'cs_advanced_3',
      'title'         => 'Duplicate Group Shortcode',
      'view'          => 'clone',
      'clone_id'      => 'cs_advanced_3_sub',
      'clone_title'   => 'Add New',
      'fields'        => array(

        array(
          'id'        => 'option_1',
          'type'      => 'text',
          'title'     => 'Option 1',
        ),

        array(
          'id'        => 'option_2',
          'type'      => 'select',
          'title'     => 'Option 2',
          'shortcodes'   => array(
            'value-1' =>  'Value 1',
            'value-2' =>  'Value 2',
            'value-3' =>  'Value 3',
          ),
        ),

      ),
      'clone_fields'  => array(

        array(
          'id'        => 'title',
          'type'      => 'text',
          'title'     => 'Tab Title',
        ),

        array(
          'id'        => 'content',
          'type'      => 'textarea',
          'title'     => 'Content',
        ),
      )
    ),
    // end: shortcode

    // begin: shortcode
    array(
      'name'           => 'cs_advanced_4',
      'title'          => 'Contents Shortcode',
      'view'           => 'contents',
      'fields'         => array(

        array(
          'id'         => 'content_1',
          'type'       => 'textarea',
          'title'      => 'Content 1',
        ),

        array(
          'id'         => 'content_2',
          'type'       => 'textarea',
          'title'      => 'Content 2',
        )

      ),
    ),
    // end: shortcode

  ),
);

CSFramework_Shortcode_Manager::instance( $options );
