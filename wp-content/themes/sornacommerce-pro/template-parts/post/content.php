<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sorna_Commerce
 */
$classes = array('blog','blog-grid');
$columns = (cs_get_option( 'eds_post_column' ) !="")? cs_get_option( 'eds_post_column' ) : '12'; 
?>

<div class="grid-item col-lg-<?php echo $columns;?> col-sm-<?php echo $columns;?> col-xs-12 blog-margin-top grid_layout">
<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
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
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php sornacommerce_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
   
		<?php
		if ( cs_get_option( 'eds_show_post' ) == 'excerpt' ){
			the_excerpt();
		}else{
			the_content();
		}
		
			
		?>
	</div><!-- .entry-content -->
    <footer>
        <a href="<?php echo esc_url( get_permalink()); ?>" class="button-2 button-xsmall"><?php echo cs_get_option( 'eds_read_more_btn' ); ?></a>
    </footer>
	<footer class="entry-footer">
		<?php sornacommerce_entry_footer(); ?>
	</footer><!-- .entry-footer -->
    <div class="clearfix"></div>
</article><!-- #post-## -->
</div>