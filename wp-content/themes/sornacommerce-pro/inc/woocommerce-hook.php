<?php
/**
 * Woocommerce Hooks
 *
 * @package Sorna Commerce
 */
 

// remove hooked woocommerce_breadcrumb - 20
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',20 );

// remove hooked woocommerce_template_loop_add_to_cart - 20
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart',10 );

add_action( 'sornacommerce_woocommerce_template_loop_add_to_cart', 'woocommerce_template_loop_add_to_cart', 10 );


// Change number or products per row to 3
add_filter('loop_shop_columns', 'sornacommerce_loop_columns');
if (!function_exists('sornacommerce_loop_columns')) {
	function sornacommerce_loop_columns() {
		return 3; // 3 products per row
	}
}

/**
 * woocommerce_single_product_summary hook.
 *
 * @remove hooked woocommerce_template_single_rating - 10
 * @remove hooked woocommerce_template_single_price - 10
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating',10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price',10 );
 
/**
* Reorder woocommerce_single_product_summary.
*
* @since 1.0.0
*/
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price',10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating',10 );

/**
 * woocommerce_single_product_summary hook.
 *
 * @remove hooked woocommerce_template_single_rating - 10
 * @remove hooked woocommerce_template_single_price - 10
 */
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );


if(cs_get_option('woo_number_of_product_per_page')!=""){
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return '.cs_get_option('woo_number_of_product_per_page').';' ), 20 );
}

if(cs_get_option('woo_related_product') != true){
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products',20 );
}

if(cs_get_option('woo_upsell_product') != true){
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display',15 );
}

if(cs_get_option('woo_product_share') == true){
function sornacommerce_share_this_product(){
	echo '<div class="share">
	<span>Share this</span>
	<ul style="margin:0px; padding:0px;">';
		if( function_exists('sornacommerce_share_this_post') ){
			echo sornacommerce_share_this_post();	
		}
	echo'</ul>
	</div>';
}

add_action( 'woocommerce_single_product_summary', 'sornacommerce_share_this_product',99 );

}


if ( ! function_exists( 'sornacommerce_template_loop_product_title' ) ) {

	/**
	 * Show the product title in the product loop. By default this is an H2.
	 */
	function sornacommerce_template_loop_product_title() {
		echo '<h3 class="woocommerce-loop-product__title">' . get_the_title() . '</h3>';
	}
	remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
	add_action( 'woocommerce_shop_loop_item_title', 'sornacommerce_template_loop_product_title', 10 );
}