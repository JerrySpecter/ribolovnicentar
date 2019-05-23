<?php


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/core.php';

/**
 * Load Theme Options
 */
require get_template_directory() . '/inc/framework/cs-framework.php';



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/default/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/default/extras.php';

/**
 * Implement WP Bootstrap Navwalker
 */
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

/**
 * Load breadcrumbs Plugins
 */
if( cs_get_option('eds_breadcrumbs') != "" ){
	require get_template_directory() . '/plugins/breadcrumbs/breadcrumbs.php';
}
/**
 * Load Post Related Hooks And Function
 */
require get_template_directory() . '/inc/post_hooks.php';


/**
 * Load Post Related Hooks And Function
 */
require get_template_directory() . '/inc/theme-functions.php';


/**
 * Load Theme Hooks
 */
require get_template_directory() . '/inc/theme-hooks.php';


/**
 * Load WooCommerce
 */
require get_template_directory() . '/inc/woocommerce-hook.php';




/**
 * Load header_hook
 */
require get_template_directory() . '/inc/header_hook.php';


/**
 * Load Subtitles
 */
if( cs_get_option('eds_subtitle') != "" ){
require get_template_directory() . '/vendor/subtitles/subtitles.php';
}



/**
 * Load Subtitles
 */
if( cs_get_option('eds_logo_carousel') != "" ){ 
require get_template_directory() . '/vendor/unlimited-logo-carousel/unlimited-logo-carousel.php';
}


/**
 * WooCommerce Fly Cart
 */
if( class_exists( 'WooCommerce' ) ){ 
require get_template_directory() . '/vendor/woocommerce-fly-cart/index.php';
}

/**
 * WooCommerce Quick View
 */

require get_template_directory() . '/vendor/quick-view-woocommerce/xoo-quickview-main.php';



/**
 * Load Wordpress Plugins
 */
require get_template_directory() . '/inc/tgm/load_plugins.php';

/**
* Load widgets Plugins
*/
require get_template_directory() . '/inc/post_type.php';

/**
* Load widgets Plugins
*/
require get_template_directory() . '/inc/shortcode.php';

/**
* Load widgets Plugins
*/
require get_template_directory() . '/inc/widgets.php';


require get_template_directory() . '/vendor/variation-swatches-for-woocommerce/variation-swatches-for-woocommerce.php';



require get_template_directory().'/theme-updates/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://eds.edatastyle.com/product/sornacommerce/sornacommerce.json',
	__FILE__,
	'sornacommerce-pro'
);
