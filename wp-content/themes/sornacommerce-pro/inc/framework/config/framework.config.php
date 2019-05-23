<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => __('Theme options','sornacommerce'),
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'eds-theme-options',
  'ajax_save'       => false,
  'show_reset_all'  => true,
  'framework_title' => __('SornaCommerce','sornacommerce').'<small>1.0</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'eds_general_settings',
  'title'     => __('General Settings','sornacommerce'),
  'icon'        => 'fa fa-tachometer',
  'sections' => array(
// -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'eds_global',
      'title'     => __('Global','sornacommerce'),
      'icon'      => 'fa fa-check',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => __('This tab contains common setting options which will be applied to the whole theme.','sornacommerce'),
        ),
	 array(
          'id'        => 'eds_logo_header',
          'type'      => 'image',
          'title'     => __('Header Logo','sornacommerce'),
          'desc'      => 'Upload your logo using the Upload Button or insert image URL',
        ),
   
	 array(
          'id'        => 'eds_favicon',
          'type'      => 'upload',
          'title'     => __('Favicon','sornacommerce'),
          'desc'      => __('Upload a 16 x 16 px image that will represent your website\'s favicon. You can refer to this link for more information on how to make it: <a href="'.esc_url( __( 'http://www.favicon.cc/', 'sornacommerce' )).'" target="_blank">http://www.favicon.cc/</a>.','sornacommerce')
        ),
	 
   				
	 array(
      'id'       => 'eds_header_code',
      'type'     => 'textarea',
      'title'    => 'Header Code',
      'desc'      => 'Enter the code which you need to place <strong>before closing  tag</strong>. (ex: Google Webmaster Tools verification, Bing Webmaster Center, BuySellAds Script, Alexa verification etc.)',
      'sanitize' => false,
     ),
	 array(
      'id'       => 'eds_footer_code',
      'type'     => 'textarea',
      'title'    => 'Footer Code',
      'desc'      => 'Enter the codes which you need to place in your footer. <strong>(ex: Google Analytics, Clicky, STATCOUNTER, Woopra, Histats, etc.)</strong>.',
      'sanitize' => false,
    ),
	array(
      'id'       => 'eds_copyrights_text',
      'type'     => 'textarea',
      'title'    => 'Copyrights Text',
      'desc'      => 'You can change or remove our link from footer and use your own custom text. (Link back is always appreciated)',
      'sanitize' => false,
	  'default'  => 'Theme by <a href="'.esc_url( __( 'https://edatastyle.com/', 'sornacommerce' )).'">eDataStyle</a>.'
    ),
	
	
	
	 // end: fields
	 
	),
	
  ),
   // -----------------------------
    // begin: textarea options     -
    // -----------------------------
    array(
      'name'      => 'top_socail',
      'title'     => __('Social Profile','sornacommerce'),
      'icon'      => 'fa fa-check',
      'fields'    => array(
 	
	array(
		  'id'      => 'eds_top_bar_social_button',
		  'type'    => 'switcher',
		  'title'     => __('Top Bar Social Button','sornacommerce'),
		  'default' => true,
		),
	array(
		  'id'      => 'eds_footer_social_button',
		  'type'    => 'switcher',
		  'title'     => __('Footer Social Button','sornacommerce'),
		  'default' => true,
		),
	array(
          'id'      => 'eds_fa_facebook',
          'type'    => 'text',
          'title'     => __('Facebook','sornacommerce'),
		  'default'  => '#'
        ),
	array(
	  'id'      => 'eds_fa_twitter',
	  'type'    => 'text',
	  'title'     => __('Twitter','sornacommerce'),
	  'default'  => '#'
	),
	array(
	  'id'      => 'eds_fa_google_plus',
	  'type'    => 'text',
	  'title'     => __('Google Plus','sornacommerce'),
	  'default'  => '#'
	),	
	array(
	  'id'      => 'eds_fa_pinterest',
	  'type'    => 'text',
	  'title'     => __('Pinterest','sornacommerce'),
	   'default'  => '#'
	),	
	array(
	  'id'      => 'eds_fa_linkedin',
	  'type'    => 'text',
	  'title'     => __('linkedin','sornacommerce'),
	   'default'  => '#'
	),	
	array(
	  'id'      => 'eds_fa_youtube',
	  'type'    => 'text',
	  'title'     => __('youtube','sornacommerce'),
	  'default'  => '#'
	),	
	array(
	  'id'      => 'eds_fa_instagram',
	  'type'    => 'text',
	  'title'     => __('instagram','sornacommerce'),
	   'default'  => '#'
	),	
	array(
	  'id'      => 'eds_fa_reddit',
	  'type'    => 'text',
	  'title'     => __('reddit','sornacommerce'),
	  'default'  => '#'
	),
	array(
	  'id'      => 'eds_fa_vimeo',
	  'type'    => 'text',
	  'title'     => __('vimeo','sornacommerce'),
	   'default'  => '#'
	),



      ),

    ), // end: textarea options
  
  ),
);




// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'eds_styling_options',
  'title'     => __('Styling Options','sornacommerce'),
  'icon'        => 'fa fa-object-group',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => 'Control the visual appearance of your theme, such as colors, layout and patterns, from here.',
        ),
	 array(
          'id'           => 'eds_page_layout',
          'type'         => 'image_select',
          'title'        =>  __('Page Layout Style','sornacommerce'),
          'options'      => array(
			'fullscreen'    => get_template_directory_uri().'/assets/layout/fullscreen.png',
			'left_sidebar'    => get_template_directory_uri().'/assets/layout/left_sidebar.png',
			'right_sidebar'    => get_template_directory_uri().'/assets/layout/right_sidebar.png',
          ),
          'default'      => 'fullscreen',
		  'desc'    => 'Choose the <strong>default fullscreen</strong> for your site. The position of the sidebar for individual Page can be set in the Page editor.',
        ),
	array(
	  'id'    => 'eds_page_background',
	  'type'  => 'background',
	  'title' => __('Page background Color or Image','sornacommerce'),
	  'desc'  => 'Pick a color for the Page background color. or Upload your own custom background image or pattern.',
	 ),	
	 array(
	  'id'    => 'eds_title_block_background',
	  'type'  => 'background',
	  'title' => __('Header Title Block background Color or Image ','sornacommerce'),
	  'desc'  => 'Pick a color for the Header Title Block background Color or Image. or Upload your own custom background image or pattern.',
	 ),	

	 array(
          'id'      => 'eds_primary_color',
          'type'    => 'color_picker',
          'title'     => __('Primary Color Scheme','sornacommerce'),
          'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.','sornacommerce'),
		  'default' => '#333',
        ),
		
	array(
	  'id'      => 'eds_secondary_color',
	  'type'    => 'color_picker',
	  'title'     => __('Secondary Color Scheme ','sornacommerce'),
	  'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.','sornacommerce'),
	  'default' => '#22cea0',
	),
	/*array(
	  'id'      => 'eds_primary_color_hover',
	  'type'    => 'color_picker',
	  'title'     => __('Primary Hover Color Scheme ','sornacommerce'),
	  'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.','sornacommerce'),
	  'default' => '#22cea0',
	),*/
	array(
	  'id'      => 'eds_fill_color',
	  'type'    => 'color_picker',
	  'title'     => __('Button Fill Color ','sornacommerce'),
	  'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.','sornacommerce'),
	  'default' => '#000',
	),
	
		 array(
          'id'    => 'eds_footer_background',
          'type'  => 'background',
          'title' => __('Footer Color or Image','sornacommerce'),
          'desc'  => 'Pick a color for the Footer background color. or Upload your own custom background image or pattern.',
         ),
		 
		 array(
          'id'      => 'eds_footer_primary_color',
          'type'    => 'color_picker',
          'title'     => __('Footer Primary Color Scheme','sornacommerce'),
          'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.','sornacommerce'),
		  'default' => '#fff',
          ),
		  array(
          'id'      => 'eds_footer_hover_color',
          'type'    => 'color_picker',
          'title'     => __('Footer Hover Color Scheme','sornacommerce'),
          'desc'    => __('The theme comes with unlimited color schemes for your theme\'s styling.','sornacommerce'),
		  'default' => '#22cea0',
          ),
		
		 array(
		  'id'       => 'eds_custom_css',
		  'type'     => 'textarea',
		  'title'    => __('Custom CSS','sornacommerce'),
		  'desc'      => 'You can enter custom CSS code here to further customize your theme. This will override the default CSS used on your site.',
		  'sanitize' => false,
		),
		
		 
		 

	 // end: fields
  ),
);


// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------


$options[]      = array(
	'name'        => 'eds_menu_styling',
  'title'     => __('Main Menu Styling','sornacommerce'),
  'icon'        => 'fa fa-bars',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'id'             => 'eds_menu_type',
          'type'           => 'select',
          'title'          => __('Menu Type','sornacommerce'),
          'options'        => array(
		 	'sticky'        =>'Sticky',
            'fixed'   =>'Fixed',
          ),
		  'default'  => 'sticky'
    ),
	 array(
          'id'             => 'eds_menu_style',
          'type'           => 'select',
          'title'          => __('Menu Style','sornacommerce'),
          'options'        => array(
		 	'default'        =>'Default',
            'navbar-fill'        =>'Fill',
            'navbar-underline'   =>'Underline',
          ),
    ),
	array(
		'id'        => 'eds_menu_font',
		'type'      => 'typography',
		'title'     => __('Menus Typography','sornacommerce'),
		'default'   => array(
			'family'  => 'Montserrat',
			'size'  => '14',
		),
		'chosen'    => false,
		'desc'      => 'These settings control the typography for Main Menu.',
	),	
	array(
		'id'        => 'eds_drop_down_menu_font',
		'type'      => 'typography',
		'title'     => __('Menus Typography Dropdown','sornacommerce'),
		'default'   => array(
			'family'  => 'Montserrat',
			'size'  => '12',
			'line_height' => '26'
		),
		'chosen'    => false,
		'desc'      => 'These settings control the typography for Main Menu Dropdown .',
	),
	array(
		'id'      => 'eds_menu_primary_color',
		'type'    => 'color_picker',
		'title'     => __('Main Primary Color','sornacommerce'),
		'desc'    => __('Controls the color for main menu text.','sornacommerce'),
		'default' => '#262626',
	),
	array(
		'id'      => 'eds_menu_secondary_color',
		'type'    => 'color_picker',
		'title'     => __('Main Menu Secondary Color','sornacommerce'),
		'desc'    => __('Controls the color for main menu text hover','sornacommerce'),
		'default' => '#22cea0',
	),
	array(
		'id'      => 'eds_menu_dropdown_primary_color',
		'type'    => 'color_picker',
		'title'     => __('Main Menu Dropdown Primary Color','sornacommerce'),
		'desc'    => __('Controls the color for main menu dropdown text.','sornacommerce'),
		'default' => '#fff',
	),
	array(
		'id'      => 'eds_menu_dropdown_secondary_color',
		'type'    => 'color_picker',
		'title'     => __('Main Menu Dropdown Secondary Color','sornacommerce'),
		'desc'    => __('Controls the color for main menu Dropdown Hover Font Color','sornacommerce'),
		'default' => '#22cea0',
	),
	
	array(
		'id'    => 'eds_menu_responsive',
		'type'  => 'background',
		'title' => __('Responsive Menu Background','sornacommerce'),
		'desc'  => 'Pick a color for the site background color. or Upload your own custom background image or pattern.',
		'default' => '#262626',
	),
	
	

	 // end: fields
  ),
);




// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'eds_homepage_options',
  'title'     => __('Homepage & Slider','sornacommerce'),
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => 'From here, you can control the elements of the homepage( Static Front Page ).',
        ),
	array(
          'id'           => 'eds_static_page_layout',
          'type'         => 'image_select',
          'title'        => __('Static Front Page Layout','sornacommerce'),
          'options'      => array(
			'fullscreen'    => get_template_directory_uri().'/assets/layout/fullscreen.png',
			'left_sidebar'    => get_template_directory_uri().'/assets/layout/left_sidebar.png',
			'right_sidebar'    => get_template_directory_uri().'/assets/layout/right_sidebar.png',
          ),
          'default'      => 'fullscreen',
		  'desc'    => 'Choose the <strong>default fullscreen</strong> for your site. The position of the sidebar for individual Page can be set in the Page editor.',
        ),	
	  array(
          'id'             => 'eds_home_page_landing_type',
          'type'           => 'select',
          'title'          => __('Home Page landing Type','sornacommerce'),
          'options'        => array(
            'slider'        =>'Slider',
            'video'          =>'Video',
			'image'          =>'Image',
            'none'          =>'None',
          ),
		   'desc'    => 'Controls the Home Page Slider , Banner or Video.',
        ),
	 array(
          'id'             => 'eds_home_page_landing_height',
          'type'           => 'select',
          'title'          => __('Home Page landing Height','sornacommerce'),
          'options'        => array(
            '90vh'        =>'100% Height',
            '70vh'          =>'70% Height',
			'50vh'          =>'50% Height',
           
          ),
		  'default' => '100vh',
		   'desc'    => 'Controls the Home Page Slider , Banner or Video.',
        ),		
	  array(
		  'id'      => 'eds_slider_speed',
		  'type'    => 'number',
		  'title'     => __('Home Page Slider speed','sornacommerce'),
		  'default' => '3000',
		  'desc'    => __('Controls the Home Page Slider Speed.','sornacommerce'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'slider' ),
		),
	array(
          'id'             => 'eds_slider_transitions',
          'type'           => 'select',
          'title'          => __('Slider Transitions','sornacommerce'),
          'options'        => array(
            'fade'        =>'Fade',
            'backSlide'      =>'Back Slide',
			'goDown'          =>'Go Down',
            'fadeUp'          =>'Fade Up',
          ),
		  'default' => 'fade',
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'slider' ),
        ),		
	 array(
          'id'              => 'eds_slider',
          'type'            => 'group',
          'title'           => __('Slider item','sornacommerce'),
          'button_title'    => __('Add New Slider','sornacommerce'),
          'accordion_title' => __('Slider','sornacommerce'),
		  'desc'      => __(' Upload your own custom background Image, Captions, Read more','sornacommerce'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'slider' ),
          'fields'          => array(

				
				array(
				  'id'    => 'slide_title',
				  'type'  => 'text',
				  'title' => __('Title','sornacommerce'),
				),
				array(
				'id'        => 'slide_img',
				'type'      => 'image',
				'title'     => __('Image','sornacommerce'),
				'desc'      => 'Upload your own custom background Image',
				),
				array(
				  'id'    => 'slide_captions',
				  'type'  => 'textarea',
				  'title' => __('Captions Text','sornacommerce'),
				),
				array(
				  'id'    => 'slide_button',
				  'type'  => 'text',
				  'title' => __('Button Text','sornacommerce'),
				  'default' => __('Read More','sornacommerce'),
				),
				array(
				  'id'    => 'slide_url',
				  'type'  => 'text',
				  'title' => __('Button URL','sornacommerce'),
				  
				),
				
				array(
					'id'      => 'slide_captions_color',
					'type'    => 'color_picker',
					'title'     => __('Text Color','sornacommerce'),
					'default' => '#fff',
				),	
          ),
		
		  
        ),
		
	
		array(
          'id'             => 'eds_landing_video',
          'type'           => 'upload',
          'title'          => __('Upload Field with Video','sornacommerce'),
          'settings'       => array(
            'upload_type'  => 'video',
            'button_title' => __('Upload Video','sornacommerce'),
            'frame_title'  => __('Choose a Video','sornacommerce'),
            'insert_title' => __('Use This Video','sornacommerce'),
          ),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		  'desc'      => __(' Upload Only MP4 Video','sornacommerce'),
        ),
		array(
			'id'        => 'eds_landing_poster',
			'type'      => 'image',
			'title'     => __('Video poster','sornacommerce'),
			'dependency'   => array( 'eds_home_page_landing_type', '==', 'video' ),
		),
		
	 // end: fields
	 
		array(
			'id'        => 'eds_home_image',
			'type'      => 'image',
			'title'     => __('Choose A Backgorund Image','sornacommerce'),
			'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		
		array(
		  'id'    => 'eds_home_title',
		  'type'  => 'text',
		  'title' => __('Image Title','sornacommerce'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		array(
		  'id'    => 'eds_home_captions',
		  'type'  => 'textarea',
		  'title' => __('Image Captions Text','sornacommerce'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		array(
		  'id'    => 'eds_home_button',
		  'type'  => 'text',
		  'title' => __('Image Button Text','sornacommerce'),
		  'default' => 'Read More',
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		array(
		  'id'    => 'eds_home_url',
		  'type'  => 'text',
		  'title' => __('Image Button URL','sornacommerce'),
		  'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),
		array(
			'id'      => 'static_banner_text_color',
			'type'    => 'color_picker',
			'title'     => __('Text Color','sornacommerce'),
			'default' => '#fff',
			 'dependency'   => array( 'eds_home_page_landing_type', '==', 'image' ),
		),	

	 // end: fields
	 
	 
  ),
);



// ------------------------------
// backup                       -
// ------------------------------

$options[]      = array(
  'name'        => 'eds_blog_options_settings',
  'title'     => __('Blog Options','sornacommerce'),
  'icon'        => 'fa fa-cubes',
'fields'      => array(
	// begin: a field
	 array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => __('From here, you can control the appearance and functionality of your posts page.','sornacommerce'),
        ),
	
	
	 array(
          'id'           => 'eds_blog_layout',
          'type'         => 'image_select',
          'title'        => __('Blog Layout Style','sornacommerce'),
          'options'      => array(
            'fullscreen'    => get_template_directory_uri().'/assets/layout/fullscreen.png',
			'left_sidebar'    => get_template_directory_uri().'/assets/layout/left_sidebar.png',
			'right_sidebar'    => get_template_directory_uri().'/assets/layout/right_sidebar.png',
          ),
          'default'      => 'right_sidebar',
		  'desc'    => 'Choose the <strong>default Right sidebar position</strong> for your site. The position of the sidebar for individual posts can be set in the post editor.',
        ),
		
		array(
		'id'    => 'eds_blog_list_title',
		'type'  => 'text',
		'title' => __('Blog default Title','sornacommerce'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('Blog - Posts List ','sornacommerce'),
		'desc'    =>__('Blog List Default Title Text ','sornacommerce'),
		),
		array(
		'id'    => 'eds_blog_list_sub_title',
		'type'  => 'text',
		'title' => __('Blog default Sub Title','sornacommerce'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('Blog - Posts List Default Sub Title ','sornacommerce'),
		'desc'    =>__('Blog List Default Sub Title Text ','sornacommerce'),
		),
		
	   array(
          'id'      => 'eds_post_column',
          'type'    => 'select',
          'title'     => __('Blog posts Column','sornacommerce'),
          'options' => array(
            '12'   => __('1 Columns','sornacommerce'),
            '6'   => __('2 Columns','sornacommerce'),
			'4'   => __('3 Columns','sornacommerce'),
			'3'   => __('4 Columns','sornacommerce'),
			 
          ),
		  'attributes' => array(
				'style'    => 'width:200px',
			),
			'desc'    => __('Select a posts Column Layout for the Blog posts. it will override this.','sornacommerce'),
        ),
		
		array(
          'id'      => 'eds_post_grid_type',
          'type'    => 'select',
          'title'     => __('Grid Type','sornacommerce'),
          'options' => array(
            'masonry_grid'   => __('Masonry Grid','sornacommerce'),
            'grid'   => __('Simply Grid','sornacommerce'),
			 
          ),
		  'attributes' => array(
				'style'    => 'width:200px',
			),
			
        ),
		
		array(
          'id'      => 'eds_show_post',
          'type'    => 'select',
          'title'     => __('Blog Post Show','sornacommerce'),
          'options' => array(
            'excerpt'   => __('excerpt','sornacommerce'),
            'content'   => __('content','sornacommerce'),
          ),
		  'attributes' => array(
				'style'    => 'width:200px',
			),
		  'default' => 'excerpt',
        ),
		
		
		array(
		'id'    => 'eds_read_more_btn',
		'type'  => 'text',
		'title' => __('Read More Button Text','sornacommerce'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('READ MORE','sornacommerce'),
		),
		array(
          'id'       => 'eds_meta',
          'type'     => 'checkbox',
          'title'    => __('Meta Info to Show','sornacommerce'),
          'options'  => array(
            'auth'   => __('Author Name','sornacommerce'),
            'date'  => __('Date','sornacommerce'),
            'cat' => __('Categories','sornacommerce'),
			'comment' => __('Comment ','sornacommerce'),
			'tag' => __('Tag Links','sornacommerce'),
          ),
		  'default'    => array( 'auth', 'date', 'cat', 'comment','tag' ),
		  'desc'    => __('Choose What Meta Info to Show.','sornacommerce'),
        ),
		
		
		 array(
          'id'      => 'eds_related_posts',
          'type'    => 'switcher',
          'title'     => __('Related Posts','sornacommerce'),
          'default' => true,
		  'desc'    => __('Use this button to show related posts with thumbnails below the content area in a post.','sornacommerce'),
        ),
		
		array(
		'id'    => 'eds_related_posts_title',
		'type'  => 'text',
		'title' => __('Related posts default Title','sornacommerce'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('Related posts','sornacommerce'),
		'desc'    =>__('Blog Single Post Default Title ','sornacommerce'),
		),
				
		array(
          'id'      => 'eds_author_bio',
          'type'    => 'switcher',
          'title'     => __('Author Box','sornacommerce'),
          'default' => true,
		  'desc'    => __('Use this button if you want to display author information below the article.','sornacommerce'),
        ),
		array(
          'id'      => 'eds_single_post_nav',
          'type'    => 'switcher',
          'title'     => __('Single Post Navigation','sornacommerce'),
          'default' => true,
		  'desc'    => __('Next / Prev Post Link','sornacommerce'),
        ),
		array(
		'id'    => 'eds_share_this_post',
		'type'  => 'text',
		'title' => __('Share This Post Title','sornacommerce'),
			'attributes' => array(
				'style'    => '',
			),
		'default' => __('Share This Post','sornacommerce'),
		),
		array(
			'id'      => 'eds_social_media',
			'type'    => 'switcher',
			'title'     => __('Social Media Share Button','sornacommerce'),
			'default' => true,
			'desc'    => __('Check this box to show social sharing buttons after an article\'s content text.','sornacommerce')
		),

	 // end: fields
 		 ),
);


// ----------------------------------------
// WooCommerce Options
// ----------------------------------------
$options[]      = array(
  'name'        => 'woocommerce_options',
  'title'     => __('WooCommerce','sornacommerce'),
  'icon'        => 'fa fa-shopping-cart',
   // begin: fields
			  'fields'      => array(
				array(
					'id'           => 'woo_shop_layout',
					'type'         => 'image_select',
					'title'        => __('Shop Page Layout Style','hamzahshop'),
					'options'      => array(
					'fullscreen'    => get_template_directory_uri().'/assets/layout/fullscreen.png',
					'left_sidebar'    => get_template_directory_uri().'/assets/layout/left_sidebar.png',
					'right_sidebar'    => get_template_directory_uri().'/assets/layout/right_sidebar.png',
					),
					'default'      => 'left_sidebar',
					'desc'    => 'Choose the <strong>default Shop Page  </strong> for your site. ',
				),
				array(
					'id'      => 'woo_main_menu_icon',
					'type'    => 'switcher',
					'title'     => __('WooCommerce Cart Icon in Main Menu','sornacommerce'),
					'default' => true,
					'desc'    => __('Turn on to display the cart icon in the main menu.','sornacommerce'),
				),
				
				
				array(
					'id'      => 'woo_number_of_product_per_page',
					'type'    => 'number',
					'title'     => __('WooCommerce Number of Products per Page','sornacommerce'),
					'default' => '12',
					'desc'    => __('Controls the number of products that display per page. ','sornacommerce'),
				),
				array(
					'id'      => 'woo_number_of_columns',
					'type'    => 'select',
					'title'     => __('WooCommerce Number of Product Columns','sornacommerce'),
					'options' => array(
						'12'   => __('1 Columns','sornacommerce'),
						'6'   => __('2 Columns','sornacommerce'),
						'4'   => __('3 Columns','sornacommerce'),
						'3'   => __('4 Columns','sornacommerce'),
						'2'   => __('5 Columns','sornacommerce'),
				),
					'attributes' => array(
					'style'    => 'width:200px',
					),
					'default' => '3',
					'desc'    => __('Controls the number of columns for the main shop page,archive pages,Categories Page.','sornacommerce'),
				),
				
				array(
					'id'      => 'woo_ajax_add_to_cart',
					'type'    => 'switcher',
					'title'     => __('WooCommerce Ajax Add To Cart','sornacommerce'),
					'default' => true,
				),
				array(
					'id'      => 'woo_quick_view',
					'type'    => 'switcher',
					'title'     => __('WooCommerce Quick view','sornacommerce'),
					'default' => true,
					'desc'    => __('Turn on to display  Quick view.','sornacommerce'),
				),
				
				
				array(
					'id'           => 'woo_product_layout',
					'type'         => 'image_select',
					'title'        => __('Products Single Page Layout Style','hamzahshop'),
					'options'      => array(
					'fullscreen'    => get_template_directory_uri().'/assets/layout/fullscreen.png',
					'left_sidebar'    => get_template_directory_uri().'/assets/layout/left_sidebar.png',
					'right_sidebar'    => get_template_directory_uri().'/assets/layout/right_sidebar.png',
					),
					'default'      => 'right_sidebar',
					'desc'    => 'Choose the <strong>Single Product Page </strong> for your site. ',
				),
				
				array(
					'id'      => 'woo_related_product',
					'type'    => 'switcher',
					'title'     => __('WooCommerce Display Related','sornacommerce'),
					'default' => true,
					'desc'    => __('Turn on to display Related Product.','sornacommerce'),
				),	
				array(
					'id'      => 'woo_upsell_product',
					'type'    => 'switcher',
					'title'     => __('WooCommerce Display Upsell Product','sornacommerce'),
					'default' => true,
					'desc'    => __('Turn on to display Upsell Product.','sornacommerce'),
				),			
				array(
					'id'      => 'woo_related_product_num',
					'type'    => 'number',
					'title'     => __('WooCommerce Related/Up-Sell/Cross-Sell Product Number of Columns','sornacommerce'),
					'default' => '3',
					'desc'    => __('Controls the number of columns for the related and up-sell products on single posts and cross-sells on single product single page.','sornacommerce'),
				),
				array(
					'id'      => 'woo_related_carousel_speed',
					'type'    => 'number',
					'title'     => __('WooCommerce Related/Up-Sell/Cross-Sell Product Carousel Speed','sornacommerce'),
					'default' => '3000',
					'desc'    => __('Controls Product Carousel Speed for the Related/Up-Sell/Cross-Sell Produc','sornacommerce'),
				),
				
				
				array(
					'id'      => 'woo_product_share',
					'type'    => 'switcher',
					'title'     => __('WooCommerce Social Media Share Button','sornacommerce'),
					'default' => true,
					'desc'    => __('Check this box to show social sharing buttons after an single product\'s page text.','sornacommerce')
				),
				
				array(
				'id'      => 'woo_single_gallery_zoom',
				'type'    => 'switcher',
				'title'     => __('WooCommerce Single Gallery zoom','sornacommerce'),
				'default' => true,
				),
				array(
				'id'      => 'woo_single_gallery_zoom',
				'type'    => 'switcher',
				'title'     => __('WooCommerce Single Gallery zoom','sornacommerce'),
				'default' => true,
				),
				array(
				'id'      => 'woo_single_gallery_lightbox',
				'type'    => 'switcher',
				'title'     => __('WooCommerce Single Gallery Lightbox','sornacommerce'),
				'default' => true,
				),
				array(
				'id'      => 'woo_single_gallery_slider',
				'type'    => 'switcher',
				'title'     => __('WooCommerce Single Gallery Slider','sornacommerce'),
				'default' => true,
				),

				
				
			
				
	  ),
	 // end: fields
);



// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'eds_typography',
  'title'    => 'Typography',
  'icon'     => 'fa fa-font',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' => __('From here, you can control the fonts used on your site. You can choose from 17 standard font sets, or from the Google Fonts Library containing 600+ fonts.','sornacommerce'),
    ),


 		array(
          'id'        => 'eds_article_title_font',
          'type'      => 'typography',
          'title'     => __('Article Title','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '30',
          ),
          'chosen'    => false,
        ),
		
		array(
          'id'        => 'eds_article_font',
          'type'      => 'typography',
          'title'     => __('Content/Article/Body Fonts','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '13',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_widgets_title_font',
          'type'      => 'typography',
          'title'     => __('Sidebar/Widget Title','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '16',
			'line_height' => '24'
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_widgets_fonts',
          'type'      => 'typography',
          'title'     => __('Sidebar/Widget Font','sornacommerce'),
         'default'   => array(
            'family'  => 'Raleway',
			'size'  => '14',
			'line_height' => '22'
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_woocommerce_shop_loop_title_font',
          'type'      => 'typography',
          'title'     => __('WooCommerce Shop Loop Title','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '25',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_woocommerce_single_page_title_font',
          'type'      => 'typography',
          'title'     => __('WooCommerce Single Product Title','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '25',
          ),
          'chosen'    => false,
        ),
		
		
		array(
          'id'        => 'eds_content_h1',
          'type'      => 'typography',
          'title'     => __('Content H1','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '40',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_content_h2',
          'type'      => 'typography',
          'title'     => __('Content H2','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '30',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_content_h3',
          'type'      => 'typography',
          'title'     => __('Content H3','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '26',
          ),
          'chosen'    => false,
        ),
		array(
          'id'        => 'eds_content_h4',
          'type'      => 'typography',
          'title'     => __('Content H4','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '20',
          ),
          'chosen'    => false,
        ),

	 array(
          'id'        => 'eds_content_h5',
          'type'      => 'typography',
          'title'     => __('Content H5','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '18',
          ),
          'chosen'    => false,
        ),

	array(
          'id'        => 'eds_content_h6',
          'type'      => 'typography',
          'title'     => __('Content H6','sornacommerce'),
          'default'   => array(
            'family'  => 'Raleway',
			'size'  => '16',
          ),
          'chosen'    => false,
        ),

   
  )
);

// ----------------------------------------
// a option section for  Initial Settings  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'eds_module',
  'title'     => __('Extensions or Module','sornacommerce'),
  'icon'        => 'fa fa-cogs',

  // begin: fields
  'fields'      => array(
	// begin: a field
	 array(
          'id'      => 'eds_subtitle',
          'type'    => 'switcher',
          'title'     => __('Sub Title','sornacommerce'),
          'default' => true,
        ),	
	  array(
          'id'      => 'eds_breadcrumbs',
          'type'    => 'switcher',
          'title'     => __('Breadcrumbs','sornacommerce'),
          'default' => true,
		  
        ),
		
	  array(
          'id'      => 'eds_logo_carousel',
          'type'    => 'switcher',
          'title'     => __('Logo Carousel','sornacommerce'),
          'default' => true,
        ),
	 array(
	  'id'      => 'eds_testimonial',
	  'type'    => 'switcher',
	  'title'     => __('Testimonial  Module','sornacommerce'),
	  'default' => true,
	),		
	  
				
	 
	 // end: fields
  ),
);
// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'eds_ad_mangement',
  'title'    => 'Ad Management',
  'icon'     => 'fa fa-bar-chart-o',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' => __('You can save your current options. Download a Backup and Import.','sornacommerce'),
    ),
	array(
      'id'       => 'eds_ad_top',
      'type'     => 'textarea',
      'title'    => __('Below Post Title','sornacommerce'),
      'desc'      => __('Paste your Adsense, BSA or other ad code here to show ads below your article title on single posts.','sornacommerce'),
      'sanitize' => false,
    ),
	array(
      'id'       => 'eds_ad_bottom',
      'type'     => 'textarea',
      'title'    => __('Below Post Content','sornacommerce'),
      'desc'      => __('Paste your Adsense, BSA or other ad code here to show ads below the post content on single posts.','sornacommerce'),
      'sanitize' => false,
    ),
  
  )
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => __('You can save your current options. Download a Backup and Import.','sornacommerce'),
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

CSFramework::instance( $settings, $options );
