<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sorna_Commerce
 */

?>

	</div>
</div>
</section><!-- #content -->
    
	<?php
    /**
    * Hook - sornacommerce_site_footer_block.
    *
    * @hooked sornacommerce_site_footer_block - 10
    */
    do_action('sornacommerce_site_footer_block');
    ?>


    
    
</div><!-- #page -->

<?php wp_footer(); ?>

<?php  echo (cs_get_option('eds_footer_code') != "") ? cs_get_option( 'eds_footer_code') : ''; ?>
</body>
</html>
