<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sorna_Commerce
 */

get_header(); ?>


<?php
  $layout = (cs_get_option( 'eds_blog_layout' ) != "") ? cs_get_option( 'eds_blog_layout' ) : 'right_sidebar';
?>
<?php if( $layout == 'left_sidebar'):?>
  <aside class="col-md-3 sidebar sidebar-right pull-left">
	<?php get_sidebar(); ?>
  </aside>
  <div id="primary" class="content-area col-md-9 subpage subpage-left">
<?php elseif ( $layout == 'right_sidebar' ) :?>
	<div id="primary" class="content-area col-md-9 subpage subpage-left">
<?php else:?>  
  <div id="primary" class="content-area col-md-12 subpage subpage-left">
<?php endif;?>
         

    <main id="main" class="site-main blog_wrp" role="main">

		<?php
        
        while ( have_posts() ) : the_post();
        
          get_template_part( 'template-parts/post/single/content', get_post_format() );
        	
			if(cs_get_option('eds_single_post_nav') == true):
            the_post_navigation();
			endif;
        
		
			 if(cs_get_option('eds_related_posts') == true):
			 	do_action('sornacommerce_related_post');
			 endif;
			 if(cs_get_option('eds_author_bio') == true):
			 	sornacommerce_post_author();
			 endif;
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
