<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sorna_Commerce
 */
$classes = array('blog','blog-grid');

?>

<div class="col-lg-3 col-lg-3 col-xs-12">

	<div class="header_block_wrp">
    <?php
    /**
     * Hook - sornacommerce_posts_formats_header.
     *
     * @hooked sornacommerce_posts_formats_header - 10
     */
    do_action( 'sornacommerce_posts_formats_header' );
    ?>
    </div>
	<header class="entry-header">
		<?php
	
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>

		
	</header>
</div>
	
   
