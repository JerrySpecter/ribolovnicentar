<?php
/**
 * Functions hooked to custom hook.
 *
 * @package Sorna Commerce
 */
if( !function_exists('sornacommerce_action_top_bar') ):
	/**
	 * Add TopBar content.
	 *
	 * @since 1.0.0
	 */
	 function sornacommerce_social_list_li(){
	 ?>
		<?php if( cs_get_option( 'eds_fa_facebook' ) !="" ) :?> 
        <li><a class="fa fa-fw fa-facebook" href="<?php echo cs_get_option( 'eds_fa_facebook' );?>" target="_blank"></a></li>
        <?php endif;?>
        <?php if( cs_get_option( 'eds_fa_twitter' ) !="" ) :?>
        <li><a class="fa fa-fw fa-twitter" href="<?php echo cs_get_option( 'eds_fa_twitter' );?>" target="_blank"></a></li>
        <?php endif;?>
        <?php if( cs_get_option( 'eds_fa_google_plus' ) !="" ) :?>
        <li><a class="fa fa-fw fa-google-plus" href="<?php echo cs_get_option( 'eds_fa_google_plus' );?>" target="_blank"></a></li>
        <?php endif;?>
        <?php if( cs_get_option( 'eds_fa_linkedin' ) !="" ) :?>
        <li><a class="fa fa-fw fa-linkedin" href="<?php echo cs_get_option( 'eds_fa_linkedin' );?>" target="_blank"></a></li>
        <?php endif;?>
        <?php if( cs_get_option( 'eds_fa_pinterest' ) !="" ) :?>
        <li><a class="fa fa-fw fa-pinterest" href="<?php echo cs_get_option( 'eds_fa_pinterest' );?>" target="_blank"></a></li>
        <?php endif;?>
        <?php if( cs_get_option( 'eds_fa_youtube' ) !="" ) :?>
        <li><a class="fa fa-fw fa-youtube" href="<?php echo cs_get_option( 'eds_fa_youtube' );?>" target="_blank"></a></li>
        <?php endif;?>
        <?php if( cs_get_option( 'eds_fa_instagram' ) !="" ) :?>
        <li><a class="fa fa-fw fa-instagram" href="<?php echo cs_get_option( 'eds_fa_instagram' );?>" target="_blank"></a></li>
        <?php endif;?>
        <?php if( cs_get_option( 'eds_fa_reddit' ) !="" ) :?>
        <li><a class="fa fa-fw fa-reddit" href="<?php echo cs_get_option( 'eds_fa_reddit' );?>" target="_blank"></a></li>
        <?php endif;?>
        <?php if( cs_get_option( 'eds_fa_vimeo' ) !="" ) :?>
        <li><a class="fa fa-fw fa-vimeo" href="<?php echo cs_get_option( 'eds_fa_vimeo' );?>" target="_blank"></a></li>
        <?php endif;?>
     <?php	 	 
	 }
endif; 
add_action('sornacommerce_social_list_li','sornacommerce_social_list_li',10);

if( !function_exists('sornacommerce_action_top_bar') ):
	/**
	 * Add TopBar content.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_action_top_bar(){
	?>
    <div id="top-bar">
    
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-6 hidden-xs nobottommargin">
                
                    
                        <ul  class="social-link">
                         <?php if( cs_get_option('eds_top_bar_social_button')!="" ): ?>
                          <?php do_action('sornacommerce_social_list_li');?>
                          <?php endif;?>
                        </ul>
                   
        
                </div>
                
    
                <div class="col-sm-6 col_last pull-right nobottommargin">
    
                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
					<?php
                    wp_nav_menu(
						array(
							'theme_location' => is_user_logged_in() ? 'account_after_log' : 'account_before_log',
							'fallback_cb'    => 'sornacommerce_top_default_menu',
							'container' 	 => '',
						)
                    );
					
                    ?>
                    </div>
                   
    
                </div>
            </div>
    
        </div>
    
    </div>
    <?php	
	}
	
	
	/**
	*  Top bar fallback default menu.
	*
	* @since 1.0.0
	*/
	function sornacommerce_top_default_menu(){
		if ( current_user_can( 'edit_theme_options' ) ) {	
	?>
        <ul>                  
           <li><a href="<?php echo esc_url( admin_url('nav-menus.php') ); ?>" style="font-weight:normal;"><?php esc_html_e( 'Set Up Login before, After menu', 'sornacommerce' ); ?></a></li>
        </ul>
	<?php
		}
	}
	
endif;
add_action('sornacommerce_site_header_block','sornacommerce_action_top_bar',10);



if ( ! function_exists( 'sornacommerce_site_branding' ) ) :

	/**
	 * Site branding.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_site_branding() {
	?>
	 <?php
		if( cs_get_option( 'eds_logo_header' )!="" ) {
			$image = wp_get_attachment_image_src( cs_get_option( 'eds_logo_header' ), 'full' );
			echo '<a href="'.get_home_url().'" rel="home"><img class="logo-big" src="'.$image[0].'"></a>';
			
		}elseif ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
			the_custom_logo();
		
		}else{
		?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title"><?php bloginfo( 'name' ); ?></a></h1>
			<?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo esc_attr($description); ?></p>
            <?php endif; ?>
		
		<?php }?>   
	<?php
	}

endif;

add_action( 'sornacommerce_site_branding', 'sornacommerce_site_branding' );

if ( ! function_exists( 'sornacommerce_site_main_menu' ) ) :

	/**
	 * sornacommerce_header_block.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_site_main_menu() {
		
		wp_nav_menu( array(
			'menu'              => 'primary',
			'theme_location'    => 'primary',
			'depth'             => 3,
			'container'      	=> false, 
			'items_wrap'		=> '%3$s',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker())
		);
	}
endif;	
add_action( 'sornacommerce_site_main_menu', 'sornacommerce_site_main_menu',10 );



if ( ! function_exists( 'sornacommerce_site_main_menu_responsive' ) ) :

	/**
	 * sornacommerce_header_block.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_site_main_menu_responsive() {
		
		wp_nav_menu( array(
			'menu'              => 'primary',
			'theme_location'    => 'primary',
			'depth'             => 3,
			'container'       => false, 
			'menu_class'        => 'responsive_nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker_Responsive::fallback',
			'walker'            => new WP_Bootstrap_Navwalker_Responsive())
		);
		
	}
endif;	
add_action( 'sornacommerce_site_main_menu_responsive', 'sornacommerce_site_main_menu_responsive');

if ( ! function_exists( 'sornacommerce_main_menu_min_cart' ) ) :

	/**
	 * sornacommerce_main_menu_min_cart.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_main_menu_min_cart() {
		if ( cs_get_option('woo_main_menu_icon') == true && class_exists( 'WooCommerce' ) && in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		echo '<li><a class="clearhover toggle-1-button single_add_to_cart_flyer"><div class="clearfix cart"><i class="fa fa-shopping-cart"></i>Cart (<span class="fly_counter_load">'.WC()->cart->get_cart_contents_count().'</span>)</div></a></li>';
		}
		
	}
endif;	
add_action( 'sornacommerce_site_main_menu', 'sornacommerce_main_menu_min_cart',15 );



if ( ! function_exists( 'sornacommerce_main_menu_search_icon' ) ) :

	/**
	 * sornacommerce_main_menu_min_cart.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_main_menu_search_icon() {
		
       echo '<li><a class="general nopad main-menu-search"><i class="fa fa-search"></i></a></li>';                                 
                                        
	}
endif;	
add_action( 'sornacommerce_site_main_menu', 'sornacommerce_main_menu_search_icon',20);



if ( ! function_exists( 'sornacommerce_site_hader_search_block' ) ) :

	/**
	 * sornacommerce_main_menu_min_cart.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_site_hader_search_block() {
		
       echo '<form role="search" method="get" action="' . esc_url( home_url( '/' ) ) . '">
		<div id="search-container">
		<div class="menu-center">
		
			<input type="text" class="search-field" placeholder="' . esc_attr_x( 'SEARCH FOR...', 'placeholder', 'sornacommerce' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label', 'sornacommerce' ) . '" autofocus />
			<div class="xbutton main-menu-search">
				X
			</div>
		</div>
		</div>
		</form>';                                 
                                        
	}
endif;	
add_action( 'sornacommerce_site_hader_search_block', 'sornacommerce_site_hader_search_block',20);


if ( ! function_exists( 'sornacommerce_header_block' ) ) :

	/**
	 * Site sornacommerce_header_block.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_header_block() {
	?>
        <header class="absolute-header">
        <section class="sticky-wrapper">
            <div id="main-menu-2" class="main-menu">
                <div class="container">
                    <div class="row">
                        <nav class="col-md-12">
                            <?php do_action('sornacommerce_site_hader_search_block');?>
                            <div id="menu-main">
                                <div class="navbar-left">
                                    <div class="menu-center logo-header">
										<?php
                                        /**
                                        * Hook - sorna_action_top_bar.
                                        *
                                        * @hooked sorna_action_top_bar - 10
                                        */
                                        do_action( 'sornacommerce_site_branding' );
                                        ?>
                                    </div>
                                </div>
                                <div class="navbar-right hidden-lg">
                                    <div class="menu-center">
                                        <ul class="nav-pills nav menu-lowerpad"> 
                                            <li><a class="general mobile-menu-toggle"><i class="fa fa-bars"></i></a></li>
                                            <li><a class="toggle-1-button"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a class="general main-menu-search"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="navbar-right visible-lg">
                                    <div class="menu-center">  
                                      <ul class="nav-pills navbar-right nav">      
                                        <?php
										/**
                                        * Hook - sornacommerce_site_main_menu.
                                        *
                                        * @hooked sornacommerce_main_menu - 10
										* @hooked sornacommerce_main_menu_min_cart - 15
										* @hooked sornacommerce_main_menu_search_icon - 20
                                        */
                                        do_action( 'sornacommerce_site_main_menu' );
                                        ?>
                                      </ul>  
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="mobile-menu">
                    <div class="container">
						<?php
                        /**
                        * Hook - sornacommerce_site_main_menu_responsive.
                        *
                        * @hooked sornacommerce_site_main_menu_responsive - 10
                        */
                        do_action( 'sornacommerce_site_main_menu_responsive' );
                        ?>
                    </div>
                </div>
            </div>
        </section>
        </header> 
	<?php
	}

endif;

add_action( 'sornacommerce_site_header_block', 'sornacommerce_header_block',11 );


if ( ! function_exists( 'sornacommerce_site_slider_widgets' ) ) :

	/**
	 * Site sornacommerce_site_slider_widgets.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_site_slider_widgets() {
		if ( is_front_page() ): 
		echo "<div id='sornacommerce_landing_header'>";
		$lading_type = apply_filters( 'sornacommerce_lading_type', cs_get_option('eds_home_page_landing_type') );
	
		switch ($lading_type) {
			case 'slider':
				do_action('sorna_commerce_slider');
				break;
			case 'video':
				do_action('sorna_commerce_video_banner');
				break;
			case 'image':
				do_action('sorna_commerce_static_banner');
				break;
			default:
       		echo '<div style="height:100px; display:block;"></div>';	
				break;
		}
		
		echo "</div>";
		endif;
	}

endif;

add_action( 'sornacommerce_site_slider_widgets', 'sornacommerce_site_slider_widgets' );


if ( ! function_exists( 'sornacommerce_title_in_custom_header' ) ) :

	/**
	 * Add title in custom header.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_title_in_custom_header() {
		
		$meta_data = get_post_meta( get_the_ID(), '_eds_page_settings', true );
		if(isset($meta_data['_page_header_color']) && $meta_data['_page_header_color'] !=""){
			$color = $meta_data['_page_header_color'];
		}else{
			$color = '';
		}
		if ( is_home() ) {
			if( get_option( 'page_for_posts' ) ){
				echo '<h1 class="title" style="color:'.$color.'">';
				echo get_the_title( get_option( 'page_for_posts' ) );
				echo '</h1>';
			}else {
			?>
             <h1 class="title" style="color:<?php echo $color;?>"><?php echo ( cs_get_option( 'eds_blog_list_title' )!="" ) ? cs_get_option( 'eds_blog_list_title' ) : __('Blog - Posts List', 'sornacommerce');?></h1>
                    <div class="subtitle" style="color:<?php echo $color;?>"><?php echo ( cs_get_option( 'eds_blog_list_sub_title' ) != "" ) ? cs_get_option( 'eds_blog_list_sub_title' ) :  __('There are many variations of passages', 'sornacommerce');?></div>
            <?php
			}
		}else if ( function_exists('is_shop') && apply_filters( 'woocommerce_show_page_title', true ) && is_shop() ){
			if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
				echo '<h1 class="title" style="color:'.$color.'">';
				echo woocommerce_page_title();
				echo '</h1>';
			}
		} elseif ( is_singular() ) {
			echo '<h1 class="title" style="color:'.$color.'">';
			echo single_post_title( '', false );
			echo '</h1>';
		} elseif ( is_archive() ) {
			echo '<h1 class="title" style="color:'.$color.'">';
			the_archive_title();
			echo '</h1>';
			//the_archive_description( '<div class="subtitle">', '</div>' );
		} elseif ( is_search() ) {
			echo '<h1 class="title" style="color:'.$color.'">';
			printf( esc_html__( 'Search Results for: %s', 'sornacommerce' ),  get_search_query() );
			echo '</h1>';
		} elseif ( is_404() ) {
			echo '<h1 class="title" style="color:'.$color.'">';
			esc_html_e( '404 Error', 'sornacommerce' );
			echo '</h1>';
		}elseif( is_shop() ){
			
		}

		

	}

endif;
add_action( 'sornacommerce_title_in_custom_header', 'sornacommerce_title_in_custom_header' );

if ( ! function_exists( 'sornacommerce_sub_title_in_custom_header' ) ) :

	/**
	 * Add title in custom header.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_sub_title_in_custom_header() {
		$meta_data = get_post_meta( get_the_ID(), '_eds_page_settings', true );
		if(isset($meta_data['_page_header_color']) && $meta_data['_page_header_color'] !=""){
			$color = $meta_data['_page_header_color'];
		}else{
			$color = '';
		}
		echo '<div class="subtitle" style="color:'.$color.'">';

		if ( is_archive() ) {
			?>
              <?php the_archive_description( );?>
            <?php
		}else{
			?>
             <?php if ( function_exists( 'the_subtitle' ) && cs_get_option('eds_subtitle') != "" ) { ?>
                 <?php the_subtitle();?>
              <?php }?>
             
            <?php
			
		}

		echo '</div>';

	}

endif;
add_action( 'sornacommerce_sub_title_in_custom_header', 'sornacommerce_sub_title_in_custom_header' );

if ( ! function_exists( 'sornacommerce_page_section_header' ) ) :

	/**
	 * Site sornacommerce_page_section_header.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_page_section_header() {
		if ( !is_front_page() ): 
		
		$meta_data = get_post_meta( get_the_ID(), '_eds_page_settings', true );
		if(isset($meta_data ["page_header"]) && $meta_data ["page_header"] == false){
			echo '<div style="height:120px;"></div>';
			return true;
		}
		
		if(isset($meta_data ["_page_header_background"]) && $meta_data ["_page_header_background"]!=""){
		  $bg ="";
		  if($meta_data ["_page_header_background"]['image']!=""){
		   $bg .= "background:url('".$meta_data ["_page_header_background"]['image']."') ";
		  }
		  if($meta_data ["header_bg"]['repeat']!=""){
		   $bg .= $meta_data ["_page_header_background"]['repeat']." ";
		  }
		  if($meta_data ["header_bg"]['position']!=""){
		   $bg .= $meta_data ["_page_header_background"]['position']." ";
		  }
		  if($meta_data ["_page_header_background"]['attachment']!=""){
		   $bg .= $meta_data ["_page_header_background"]['attachment']." ";
		     $bg .= ';';
		  }
		 
		  if($meta_data ["_page_header_background"]['size']!=""){
		   $bg .= ' background-size:'.$meta_data ["header_bg"]['size'].';';
		  }
		  if($meta_data ["_page_header_background"]['color']!=""){
		   $bg .= ' background-color:'.$meta_data ["_page_header_background"]['color'].';';
		  }
		  if($bg!=""){
		 	 $add_more_height = 'custom_header_height';
		  }else{
			   $add_more_height = '';
		  }
		}else{
		  $bg = "";
		  $add_more_height = '';
		}
	?>

    <section class="section-page-header <?php echo $add_more_height;?>" style="<?php echo $bg;?>">
        <div class="container">
            <div class="row">
    
                <!-- Page Title -->
                <div class="col-md-6 header_block_title">
                    <?php do_action( 'sornacommerce_title_in_custom_header' ); ?>
                    <?php do_action( 'sornacommerce_sub_title_in_custom_header' ); ?>
                </div>
                <!-- /Page Title -->
                <div class="col-md-6 breadcrumbs">
                   <?php do_action( 'sornacommerce_breadcrumb' ); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?Php
		endif;
	}
endif;
add_action( 'sornacommerce_page_section_header', 'sornacommerce_page_section_header' );



if ( ! function_exists( 'sornacommerce_breadcrumb' ) ) :

	/**
	 * Breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_breadcrumb() {
		if( cs_get_option('eds_breadcrumbs') != "" ){
			
		
		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			get_template_part( 'vendors/breadcrumbs/breadcrumbs' );
		}

		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		echo '<div id="breadcrumb">';
		breadcrumb_trail( $breadcrumb_args );
		echo '</div><!-- #breadcrumb -->';
		
		}
	}

endif;
add_action( 'sornacommerce_breadcrumb', 'sornacommerce_breadcrumb' );


if ( ! function_exists( 'sornacommerce_site_footer_block' ) ) :

	/**
	 * sornacommerce_site_footer_block.
	 *
	 * @since 1.0.0
	 */
	function sornacommerce_site_footer_block() {
	  ?>
      
        <footer id="footer">
            <section class="footer footer-margin">
                <div class="container">
                    <?php if ( is_active_sidebar( 'footer' ) ) : ?>
                        <div class="row">
                            <?php dynamic_sidebar( 'footer' ); ?>
                        </div>
                    <?php endif ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center">
                                <p class="footer"><?php  echo (cs_get_option('eds_copyrights_text') != "") ? cs_get_option( 'eds_copyrights_text') : ''; ?>
                        </p>
                        <!-- /Copyright -->
        
                            </div>
                           
                            <ul class="social-link">
                            <?php if( cs_get_option('eds_footer_social_button')!="" ): ?>
                                 <?php do_action('sornacommerce_social_list_li');?>
                              <?php endif;?>   
                            </ul>
                            
                            
                        </div>
                    </div>
                </div>
            </section>
         
        </footer>
        
        <a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>

      <?php

	}

endif;
add_action( 'sornacommerce_site_footer_block', 'sornacommerce_site_footer_block' );




if ( ! function_exists( 'sornacommerce_enqueue_scripts' ) ) {
  function sornacommerce_enqueue_scripts() {

    $enqueue_fonts  = array();
    $google_fonts   = array();
	$google_fonts[] = cs_get_option( 'eds_menu_font' );
	$google_fonts[] = cs_get_option( 'eds_drop_down_menu_font' );
	$google_fonts[] = cs_get_option( 'eds_article_title_font' );
	$google_fonts[] = cs_get_option( 'eds_article_font' );
	$google_fonts[] = cs_get_option( 'eds_widgets_title_font' );
	$google_fonts[] = cs_get_option( 'eds_widgets_fonts' );
	$google_fonts[] = cs_get_option( 'eds_woocommerce_shop_loop_title_font' );
	$google_fonts[] = cs_get_option( 'eds_woocommerce_single_page_title_font' );
	$google_fonts[] = cs_get_option( 'eds_content_h1' );
	$google_fonts[] = cs_get_option( 'eds_content_h2' );
	$google_fonts[] = cs_get_option( 'eds_content_h3' );
	$google_fonts[] = cs_get_option( 'eds_content_h4' );
	$google_fonts[] = cs_get_option( 'eds_content_h5' );
	$google_fonts[] = cs_get_option( 'eds_content_h6' );
    if ( $google_fonts != "" ) {
      foreach ( $google_fonts as $font ) {
        if( isset( $font['font'] ) && $font['font'] == 'google' ) {
          $variant = ( isset( $font['variant'] ) && $font['variant'] !== 'regular' ) ? ':'. $font['variant'] : '';
          $enqueue_fonts[] = $font['family'] . $variant;
        }
      }
    }

    if ( ! empty( $enqueue_fonts ) ) {
      wp_enqueue_style( 'cs-google-fonts', esc_url( add_query_arg( 'family', urlencode( implode( '|', $enqueue_fonts ) ) , '//fonts.googleapis.com/css' ) ), array(), null );
    }

  }
  add_action( 'wp_enqueue_scripts', 'sornacommerce_enqueue_scripts' );
}
