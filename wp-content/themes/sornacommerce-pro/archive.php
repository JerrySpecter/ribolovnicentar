<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
  <div id="primary" class="content-area col-md-9">
<?php elseif ( $layout == 'right_sidebar' ) :?>
	<div id="primary" class="content-area col-md-9">
<?php else:?>  
  <div id="primary" class="content-area col-md-12">
<?php endif;?>
         

    <main id="main" class="site-main blog_wrp grid" role="main">

   
               
    <?php
    if ( have_posts() ) :
	$columns = (cs_get_option( 'eds_post_column' ) !="")? cs_get_option( 'eds_post_column' ) : '12'; 
	if($columns == 6){
		$reset = 2;
	}elseif($columns == 4){
		$reset = 3;
	}elseif($columns == 3){
		$reset = 4;
	}else{
		$reset = 1;	
	}
	$grid_type = (cs_get_option( 'eds_post_grid_type' ) !="")? cs_get_option( 'eds_post_grid_type' ) : 'masonry_grid'; 
		if( $grid_type == 'masonry_grid' ){
			echo '<div class="masonry_grid"><div class="grid-sizer col-lg-'.$columns.' col-sm-'.$columns.' col-xs-12 blog-margin-top grid_layout"></div>';
		}else{
			echo '<div>';
		}
        /* Start the Loop */
		$i = 0;
        while ( have_posts() ) : the_post();
			$i++;
            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
          
            get_template_part( 'template-parts/post/content', get_post_format() );
            
		 if( $grid_type != 'masonry_grid' ){
			 if( $i == $reset){
				echo '<div class="clearfix"></div>';
				$i = 0; 
			 }
		 }
        endwhile;
		echo '</div>';
        the_posts_navigation();

    else :
       
        get_template_part( 'template-parts/content', 'none' );
        
    endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php if ( $layout == 'right_sidebar' ) :?>
  <aside class="col-md-3 sidebar sidebar-right">
  <?php get_sidebar(); ?>
  </aside>
<?php endif;?> 
<?php
get_footer();
