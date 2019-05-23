<?php

function sorna_commerce_slider(){
	$eds_slider_options = cs_get_option( 'eds_slider' ) ;


	?>
    
<div id="sorna_commerce_landing_page_slider" class="sorna_commerce_landing_page_slider owl-carousel owl-theme" style="height:<?php echo cs_get_option( 'eds_home_page_landing_height' );?>; width:100%;">
	<?php if ( is_array($eds_slider_options) && count($eds_slider_options) > 0) :?>
    <!-- Slide -->
    <?php foreach($eds_slider_options as $slide):
	
	?>
		<?php if( $slide[ 'slide_img' ] != "") :
		 $image = wp_get_attachment_image_src( $slide[ 'slide_img' ], 'full' ); 
		?>
        <div class="item mask" style="background: url(<?php echo $image[0];?>) no-repeat center top / cover; height:<?php echo cs_get_option( 'eds_home_page_landing_height' );?>; width:100%">
    
           
    
                        <div class="captions_block" style="color:<?php echo $slide['slide_captions_color'];?>" >
                            <h1 style="color:<?php echo $slide['slide_captions_color'];?>"><?php echo  $slide[ 'slide_title' ];?></h1>
                            <div class="text-white caption-text" style="color:<?php echo $slide['slide_captions_color'];?>">
                               <?php echo $description= ($slide[ 'slide_captions' ]== "") ? '' : $slide[ 'slide_captions' ];?>
                            </div>
                            <a href="<?php echo ($slide[ 'slide_url' ] != "") ? $slide[ 'slide_url' ] : '';?>" class="smooth-scroll btn btn-theme"><?php echo ($slide[ 'slide_button' ] != "") ? $slide[ 'slide_button' ]:'';?>
							</a>
                        </div>
                 
    
    
              
        </div>
        <?php endif;?>
    <!-- /Slide -->
   <?php endforeach;?>
   
   <?php endif;?>

</div>
    <?php	
}
add_action('sorna_commerce_slider','sorna_commerce_slider');

function sorna_commerce_static_banner (){
	$img_ids =(cs_get_option('eds_home_image' )== "") ? '' : cs_get_option('eds_home_image' );
	$img = wp_get_attachment_image_src( $img_ids, 'full' );
	if($img!=""){
?>
<div id="videowrp" style="background:url( <?php echo $img[0];?>) no-repeat center center; background-size:cover; -webkit-background-size:cover; -moz-background-size:cover; height:<?php echo cs_get_option( 'eds_home_page_landing_height' );?>;">

    <div class="captions_block" style="color:<?php echo cs_get_option('static_banner_text_color' );?>" >
        <h1 style="color:<?php echo cs_get_option('static_banner_text_color' );?>"><?php echo cs_get_option('eds_home_title' );?></h1>
        <div class="text-white caption-text" style="color:<?php echo cs_get_option('static_banner_text_color' );?>">
           <?php echo (cs_get_option('eds_home_captions' )== "") ? '' : cs_get_option('eds_home_captions' );?>
        </div>
       <a href="<?php echo (cs_get_option('eds_home_url' ) != "") ? cs_get_option('eds_home_url' ) : '';?>" class="smooth-scroll btn btn-theme"><?php echo (cs_get_option('eds_home_button' ) != "") ? cs_get_option('eds_home_button' ):'';?>
                </a>
    </div>
    
</div>
<?php	
	}
}
add_action('sorna_commerce_static_banner','sorna_commerce_static_banner');


function sorna_commerce_video_banner (){
?>
<div id="videowrp" style="height:<?php echo cs_get_option( 'eds_home_page_landing_height' );?>; width:100%;">
    <video autoplay loop poster="<?php echo cs_get_option('eds_landing_poster' );?>" id="background">
        <source src="<?php echo cs_get_option('eds_landing_video' );?>" type="video/mp4">
        
    </video>
    
</div>
	
<?php	
}
add_action('sorna_commerce_video_banner','sorna_commerce_video_banner');