.main-menu .navbar-right .nav > li > a{
	<?php if( cs_get_option( 'eds_menu_font' ) !="" ):
    $fonts = cs_get_option( 'eds_menu_font' );
    ?>
<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?> <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?> <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>

    <?php endif;?>
    <?php if( cs_get_option( 'eds_menu_primary_color' ) != "" ): ?> color:<?php echo cs_get_option( 'eds_menu_primary_color' );?> <?php endif;?>
    
}
.main-menu .navbar-right .nav > li > a:hover,
.main-menu .navbar-right .nav > li:hover > a,
.main-menu .navbar-right .nav > li > a.active{
<?php if( cs_get_option( 'eds_menu_style' ) == "default" ): ?>
 <?php if( cs_get_option( 'eds_menu_secondary_color' ) != "" ): ?> color:<?php echo cs_get_option( 'eds_menu_secondary_color' );?>!important; <?php endif;?>
<?php endif;?>
<?php if( cs_get_option( 'eds_menu_style' ) == "navbar-fill" ): ?>
 <?php if( cs_get_option( 'eds_menu_secondary_color' ) != "" ): ?> background:<?php echo cs_get_option( 'eds_menu_secondary_color' );?>!important;<?php endif;?>
 <?php if( cs_get_option( 'eds_menu_primary_color' ) != "" ): ?> color:<?php echo cs_get_option( 'eds_menu_primary_color' );?>!important; <?php endif;?>
<?php endif;?>

<?php if( cs_get_option( 'eds_menu_style' ) == "navbar-underline"):?>
 <?php if( cs_get_option( 'eds_menu_secondary_color' ) != "" ): ?> color:<?php echo cs_get_option( 'eds_menu_secondary_color' );?>!important; <?php endif;?>
  <?php if( cs_get_option( 'eds_menu_secondary_color' ) != "" ): ?> border-bottom:1px solid <?php echo cs_get_option( 'eds_menu_secondary_color' );?>!important; <?php endif;?>
<?php endif;?>
}



<?php if( !empty(cs_get_option( 'eds_drop_down_menu_font' )) ):
	$fonts = cs_get_option( 'eds_drop_down_menu_font' );
 ?>
.main-menu .navbar-right .nav li li a{
	<?php echo (!empty($fonts['family']))? "font-family: '".$fonts['family']."', 'Raleway', sans-serif;" : "";?>
    <?php echo (!empty($fonts['size']))? "font-size:".$fonts['size']."px;" : "";?>
    <?php echo (!empty($fonts['font']))? "font-weight:".$fonts['font'].";" : "";?>
    <?php echo (!empty($fonts['line_height']))? "line-height:".$fonts['line_height']."px;" : "";?>
       <?php if( cs_get_option( 'eds_menu_dropdown_primary_color' ) != "" ): ?> color:<?php echo cs_get_option( 'eds_menu_dropdown_primary_color' );?> <?php endif;?>
}
<?php endif;?>
.main-menu .navbar-right .nav li li a:hover,
.main-menu .navbar-right .nav li li a.active{
	<?php if( cs_get_option( 'eds_menu_style' ) == "default" ): ?>
    <?php if( cs_get_option( 'eds_menu_dropdown_secondary_color' ) != "" ): ?> color:<?php echo cs_get_option( 'eds_menu_dropdown_secondary_color' );?>!important; <?php endif;?>
    <?php endif;?>
<?php if( cs_get_option( 'eds_menu_style' ) == "navbar-fill"  || cs_get_option( 'eds_menu_style' ) == "navbar-underline"): ?>
 <?php if( cs_get_option( 'eds_menu_dropdown_primary_color' ) != "" ): ?> color:<?php echo cs_get_option( 'eds_menu_dropdown_primary_color' );?>!important; <?php endif;?>
<?php endif;?>    


}
.main-menu .navbar-right .nav li li:hover,
.main-menu .navbar-right .nav li li.current-menu-item{
<?php if( cs_get_option( 'eds_menu_style' ) == "navbar-fill" ): ?>
 <?php if( cs_get_option( 'eds_menu_dropdown_secondary_color' ) != "" ): ?> background:<?php echo cs_get_option( 'eds_menu_dropdown_secondary_color' );?>!important;<?php endif;?>
<?php endif;?>
<?php if( cs_get_option( 'eds_menu_style' ) == "navbar-underline"):?>
  <?php if( cs_get_option( 'eds_menu_secondary_color' ) != "" ): ?> border-bottom:1px solid <?php echo cs_get_option( 'eds_menu_secondary_color' );?>!important; <?php endif;?>
<?php endif;?>
}

<?php if( cs_get_option( 'eds_menu_responsive' )!="" ):?>
<?php $bg=cs_get_option( 'eds_menu_responsive' );?>
.mobile-menu{
	background:<?php echo (!empty($bg['image']))?'url('.$bg['image'].')':'';?>  <?php echo (!empty($bg['color']))?$bg['color']:'';?>;
    <?php echo (!empty($bg['position']))? 'background-position:'.$bg['position'].';':'';?>
    <?php echo (!empty($bg['position']))? 'background-repeat:'.$bg['position'].';':'';?>
    <?php echo (!empty($bg['attachment']))? 'background-attachment:'.$bg['attachment'].';':'';?>
    <?php echo (!empty($bg['repeat']))? 'background-repeat:'.$bg['repeat'].';':'';?>
    <?php if(!empty($bg['size'])){?>
	-webkit-background-position:<?php echo $bg['size'];?>;
	-moz-background-position:<?php echo $bg['size'];?>;
	background-repeat:<?php echo $bg['size'];?>;
    <?php } ?>
}
<?php endif;?>