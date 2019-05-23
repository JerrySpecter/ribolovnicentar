<?php 
//defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );
header("Content-type: text/javascript ");
$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
$wp_load = $absolute_path[0] . 'wp-load.php';
require_once($wp_load);

?>
(function(jQuery) {
    'use strict';
    jQuery(document).ready(function() {
    
		if(jQuery('#sorna_commerce_landing_page_slider').length){
		jQuery('#sorna_commerce_landing_page_slider').owlCarousel({
			singleItem : true,
			transitionStyle : "<?php echo (cs_get_option( 'eds_slider_transitions' )!="" )? cs_get_option( 'eds_slider_transitions' ) : 'fade';?>",
			autoPlay : <?php echo (cs_get_option( 'eds_slider_speed' )!="" )? cs_get_option( 'eds_slider_speed' ) : '3000';?>,
			pagination : false,
			navigation : true,
			navigationText : ['', ''],
		});
		}	
            
		/* ============== SLIDE SHOW ============= */
		<?php $columns = (cs_get_option( 'woo_related_product_num' ) !="")? cs_get_option( 'woo_related_product_num' ) : '3';  ?>
		if(jQuery('.product_carousel').length > 0) {
			jQuery('.product_carousel').owlCarousel({
			items:<?php echo $columns;?>,
			transitionStyle : "fade",
			autoPlay :<?php echo (cs_get_option( 'woo_related_carousel_speed' )!="" )? cs_get_option( 'woo_related_carousel_speed' ) : '5000';?>,
			pagination : false,
			navigation : true,
			navigationText : ['', ''],
			});
		}
        
        if(jQuery('.brand-carousel').length > 0) {
			jQuery('.brand-carousel').owlCarousel({
			items:5,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            smartSpeed:1000,
            pagination : false,
            navigation : true,
            navigationText : ['', ''],
            
			});
            
            
		}
        
        <?php if(cs_get_option( 'eds_menu_type' ) =='sticky') {?>
        jQuery(".sticky-wrapper").sticky({topSpacing:0});
        <?php }?>
	});
})(jQuery);

