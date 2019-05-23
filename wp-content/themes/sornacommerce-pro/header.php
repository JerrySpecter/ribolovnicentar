<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sorna_Commerce
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php if(cs_get_option('eds_favicon') != ""):?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo cs_get_option('eds_favicon');?>">
<?php endif;?>
<?php  echo (cs_get_option('eds_header_code') != "")? cs_get_option( 'eds_header_code') : ''; ?>

<?php  echo (cs_get_option('eds_header_code') != "")? cs_get_option( 'eds_header_code') : ''; ?>

<?php if(cs_get_option('eds_custom_css')!=""){?>
<style type="text/css">
	<?php echo cs_get_option('eds_custom_css');?>
</style>
<?php }?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    
    <?php
    /**
     * Hook - sornacommerce_site_header_block.
     *
     * @hooked sorna_action_top_bar - 10
	 * @hooked sornacommerce_site_header_block - 11
     */
    do_action( 'sornacommerce_site_header_block' );
    ?>
     <?php
    /**
     * Hook - sornacommerce_site_slider_widgets.
     *
     * @hooked sornacommerce_site_slider_widgets - 10
     */
    do_action( 'sornacommerce_site_slider_widgets' );
	
    ?>
    <?php
    /**
     * Hook - sornacommerce_site_slider_widgets.
     *
     * @hooked sornacommerce_site_slider_widgets - 10
     */
    do_action( 'sornacommerce_page_section_header' );
	
    ?>







<section id="content" class="section section-margin site-content">
<div class="container">
<div class="row">