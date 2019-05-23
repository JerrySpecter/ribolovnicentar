<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sorna_Commerce
 */

get_header(); ?>
<?php
if ( is_front_page() ):
 $layout = (cs_get_option( 'eds_static_page_layout' ) != "") ? cs_get_option( 'eds_static_page_layout' ) : 'fullscreen';
else:
  $layout = (cs_get_option( 'eds_page_layout' ) != "") ? cs_get_option( 'eds_page_layout' ) : 'right_sidebar';
 endif;
?>
<?php if( $layout == 'left_sidebar'):?>
  <aside class="col-md-3 sidebar sidebar-right pull-left">
	<?php get_sidebar(); ?>
  </aside>
  <div id="primary" class="content-area col-md-9">
<?php elseif ( $layout == 'right_sidebar' ) :?>
	<div id="primary" class="content-area col-md-9">
<?php else:?>  
  <div id="primary" class="content-area col-md-12">
<?php endif;?>
         

    <main id="main" class="site-main blog_wrp" role="main">

		<?php
        while ( have_posts() ) : the_post();
        
            get_template_part( 'template-parts/content', 'page' );
        
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php if ( $layout == 'right_sidebar' ) :?>
  <aside class="col-md-3 sidebar sidebar-right">
  <?php get_sidebar(); ?>
  </aside>
<?php endif;?> 
<?php
get_footer();
