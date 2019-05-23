

<?php $fonts = ''; if( cs_get_option( 'eds_article_font' ) !="" ):
$fonts = cs_get_option( 'eds_article_font' );
?>
body{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}

<?php endif;?>

<?php $fonts = ''; if( cs_get_option( 'eds_content_h1' ) !="" ):
$fonts = cs_get_option( 'eds_content_h1' );
?>
h1{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>

<?php $fonts = ''; if( cs_get_option( 'eds_content_h2' ) !="" ):
$fonts = cs_get_option( 'eds_content_h2' );
?>
h2,article.blog header h2.entry-title{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>


<?php $fonts = ''; if( cs_get_option( 'eds_content_h3' ) !="" ):
$fonts = cs_get_option( 'eds_content_h3' );
?>
h3{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>

<?php $fonts = ''; if( cs_get_option( 'eds_content_h4' ) !="" ):
$fonts = cs_get_option( 'eds_content_h4' );
?>
h4,h4.entry-title{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>

<?php $fonts = ''; if( cs_get_option( 'eds_content_h5' ) !="" ):
$fonts = cs_get_option( 'eds_content_h5' );
?>
h5{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>

<?php $fonts = ''; if( cs_get_option( 'eds_content_h6' ) !="" ):
$fonts = cs_get_option( 'eds_content_h6' );
?>
h6{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>

<?php if( cs_get_option( 'eds_article_title_font' ) !="" ):
$fonts = cs_get_option( 'eds_article_title_font' );
?>
.section-page-header .title,
.header_block_title .subtitle{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
.header_block_title .subtitle{
<?php echo (!empty($fonts['size']))? "font-size:".round ( ($fonts['size']/2))."px;" : "";?>
}
<?php endif;?>



<?php $fonts = ''; if( cs_get_option( 'eds_widgets_title_font' ) !="" ):
$fonts = cs_get_option( 'eds_widgets_title_font' );
?>
.sidebar .widget-title,
.sidebar .widget h5,
#footer .widget-title,
#footer .widget h5{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>
<?php $fonts = ''; if( cs_get_option( 'eds_widgets_fonts' ) !="" ):
$fonts = cs_get_option( 'eds_widgets_fonts' );
?>
.sidebar,
.sidebar .widget a,
.sidebar .widget,
#footer .widget,
#footer .widget a{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
#footer .widget .textwidget{
<?php echo (!empty($fonts['line_height']))? "line-height:".($fonts['line_height']+8)."px;" : "";?>
}
<?php endif;?>


<?php $fonts = ''; if( cs_get_option( 'eds_woocommerce_shop_loop_title_font' ) !="" ):
$fonts = cs_get_option( 'eds_woocommerce_shop_loop_title_font' );
?>
h2.woocommerce-loop-product__title{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>

<?php $fonts = ''; if( cs_get_option( 'eds_woocommerce_single_page_title_font' ) !="" ):
$fonts = cs_get_option( 'eds_woocommerce_single_page_title_font' );
?>
h3.product_title{
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
<?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
<?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
<?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
}
<?php endif;?>