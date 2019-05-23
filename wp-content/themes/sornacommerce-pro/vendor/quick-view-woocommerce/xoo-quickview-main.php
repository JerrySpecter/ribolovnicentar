<?php
/**
* Plugin Name: Quick View WooCommerce
* Plugin URI: http://xootix.com
* Author: XootiX
* Version: 1.7
* Text Domain: xoo-qv-domain
* Domain Path: /languages
* Author URI: http://xootix.com
* Description: WooCommerce Quick View Enables customer to have a quick look of product without visiting product page.
* Tags: free quick view, modal, product summary, products quick view, quick-view, single product, summary, woocommerce, woocommerce extension, WooCommerce Plugin,WooCommerce quickview , WooCommerce Lightbox , WooCommerce quick view , Woocommerce fast view , Quick View , Lightbox
*/


//Exit if accessed directly
if(!defined('ABSPATH')){
	return;
}

//WooCommerce Activation & Mobile device check
if( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option('active_plugins'))) || class_exists( 'WooCommerce' )){
	include get_template_directory() . '/vendor/quick-view-woocommerce/xoo-qv-core.php';
}
else{
	//add_action( 'admin_notices', 'xoo_qv_admin_notices' );
}

//WooCommerce not activated error.
function xoo_qv_admin_notices(){
	?>
    <div class="notice notice-error">
        <p><?php _e( 'WooCommerce Quick view requires WooCommerce in order to work.', 'sample-text-domain' ); ?></p>
    </div>
    <?php
}


?>