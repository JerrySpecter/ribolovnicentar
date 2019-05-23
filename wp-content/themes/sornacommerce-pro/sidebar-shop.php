<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sorna_Commerce
 */

if ( ! is_active_sidebar( 'woocommerce' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'woocommerce' ); ?>
</aside><!-- #secondary -->
