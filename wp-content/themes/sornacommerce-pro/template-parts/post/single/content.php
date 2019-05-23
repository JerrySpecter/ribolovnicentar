<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sorna_Commerce
 */
$classes = array('blog','blog-grid','single_post');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
<?php if(cs_get_option('eds_ad_top') != ''): ?>
 <?php echo cs_get_option('eds_ad_top');?>
<?php endif;?>

	<?php
    if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
        <?php sornacommerce_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php
    endif; ?>
	<?php
    /**
     * Hook - sornacommerce_posts_formats_header.
     *
     * @hooked sornacommerce_posts_formats_header - 10
     */
	 
     do_action( 'sornacommerce_posts_formats_header' );
    ?>
	
	


	<div class="entry-content">
    
   		<?php
		the_content();
		   //echo sornacommerce_remove_gallery(get_the_content());
			
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'sornacommerce' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
    
	<?php if(cs_get_option('eds_ad_bottom') != ''): ?>
    <?php echo cs_get_option('eds_ad_bottom');?>
    <?php endif;?>

	<footer class="entry-footer">
		<?php sornacommerce_entry_footer(); ?>
	</footer><!-- .entry-footer -->
    <div class="clearfix"></div>
</article><!-- #post-## -->

<?php if(cs_get_option('eds_social_media') == true): ?>
<section class="section blog">
    <h6><?php echo (cs_get_option('eds_share_this_post')!="") ? cs_get_option('eds_share_this_post') : '';?></h6>
    <div class="share">
        <ul>
          <?php do_action('sornacommerce_share_this_post');?>
        </ul>
    </div>
</section>
<?php endif;?>


