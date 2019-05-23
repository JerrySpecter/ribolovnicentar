<?php
if(	!function_exists('ed_logo_carousel_enqueue')	){
	add_action('wp_enqueue_scripts', 'ed_logo_carousel_enqueue',999);
	function ed_logo_carousel_enqueue() {
		if (!is_admin()) { 
			wp_enqueue_style( 'ed-owl.carousel', get_template_directory_uri().'/vendor/unlimited-logo-carousel/assets/owl.carousel.css' );
			//wp_enqueue_style( 'ed-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' );
		
		    //wp_enqueue_script('ed-owl.carousel-js', ED_LOGO_URL . 'assets/owl.carousel.js' , array('jquery'), '1.3.3', true);
			
		}
	}
}

if(	!function_exists('ed_logo_carousel_views')	){
	function ed_logo_carousel_views( $atts ) {
		
		$data = shortcode_atts( array(
        'id' =>0,
   		 ), $atts );
		$output = ''; 
		
		if( isset($data['id']) && $data['id'] !="" && $data['id'] > 0):
		
		$postlist = get_post( $data['id'] );
		$ed_logo_id = get_post_meta($data['id'],'ed_logo_id', true);
		
			if( count($postlist) > 0 ):
			  $options = maybe_unserialize(get_post_meta($data['id'], 'ed_logo_carousel_slider', true));
			  $output .= '<div class="ed-carousel-wrp ed-carousel-'.$data['id'].'">';
			  $output .= '<div id="ed-carousel-'.$data['id'].'" class="owl-carousel ed-carousel '.$options['next_prev_position'].'">';
			
				$ed_logo_id = maybe_unserialize(get_post_meta($data['id'],'ed_logo_id', true));
				$tooltip = maybe_unserialize( get_post_meta($data['id'], 'ed_logo_tooltip', true));
				$link = maybe_unserialize( get_post_meta($data['id'], 'ed_logo_link', true) );
				$target = maybe_unserialize( get_post_meta($data['id'], 'ed_logo_target', true));
				
				
				foreach ($ed_logo_id as $key => $thumbnail_id) {
					$logo = wp_get_attachment_image_src( $thumbnail_id, 'full' );
					if(isset($logo) && $logo != "" ){
						$tool_class = ( isset($tooltip[$key]) && $tooltip[$key] != "" )? 'masterTooltip':'';
						$tool_text = ( isset($tooltip[$key]) && $tooltip[$key] != "" )? $tooltip[$key]:'';
						
						
							$img = '<img src="'.$logo[0].'" alt="'.esc_html($tool_text).'" class="masterTooltip" title="'.esc_html($tool_text).'">';
						
						
						if($link[$key] != ""){
							$output .= '<a href="'.esc_url( $link[$key] ).'" target="'.$target[$key].'" rel="nofollow" class="ed-item">'.$img.'</a>';
						}else{
							$output .= '<div class="ed-item">'.$img.'</div>';
						}
					}
				}
					
			$output .='</div>';
			$output .='</div>';
			
			else:
			
			$output .= '<h2 class="sp-not-found-any-logo">' . __( 'No logo found', 'logo_carousel' ) . '</h2>';
			
			endif;	  
		else:
		
		$output .= '<h2 class="sp-not-found-any-logo">' . __( 'No logo found', 'logo_carousel' ) . '</h2>';	 
		 
		endif;	  
		return $output;
	}
	add_shortcode( 'ed-logo', 'ed_logo_carousel_views' );	
}




function ed_logo_carousel_css() { 
wp_reset_postdata();
        wp_reset_query();
$args= array( 
	'post_type' =>'ed_logo',
	'posts_per_page'=>-1,
	'suppress_filters' => true
);
$options = get_option( 'ed_logo_carousel_options' );
$second_query = new WP_Query( $args );
if ($second_query->have_posts()) :
	echo '<style type="text/css">';
	while ($second_query->have_posts()) : $second_query->the_post();
	$meta = maybe_unserialize( get_post_meta(get_the_ID(), 'ed_logo_carousel_style', true) );
	$meta_settings = maybe_unserialize( get_post_meta(get_the_ID(), 'ed_logo_carousel_slider', true) );
	$pagination = (isset($meta_settings['pagination']) && $meta_settings['pagination']!="")? $meta_settings['pagination'] : $options['pagination'];
	$pagination_have = ($pagination == 'yes') ? 20 : 0;
	?>
        #ed-carousel-<?php echo get_the_ID();?> .owl-controls .owl-buttons div{
            color: <?php echo (isset($meta['arrows_color']) && $meta['arrows_color'] != "")? $meta['arrows_color']: $options['arrows_color'];?>;
            background:<?php echo (isset($meta['arrows_bg']) && $meta['arrows_bg'] != "")? $meta['arrows_bg']: $options['arrows_bg'];?>;
            width:<?php echo (isset($meta['arrows_size']) && $meta['arrows_size'] != "")? $meta['arrows_size']: $options['arrows_size'];?>px;
            height:<?php echo (isset($meta['arrows_size']) && $meta['arrows_size'] != "")? $meta['arrows_size']: $options['arrows_size'];?>px;
            line-height:<?php echo (isset($meta['arrows_size']) && $meta['arrows_size'] != "")? ($meta['arrows_size']-1): ($options['arrows_size']-1);?>px;
            font-size:<?php echo (isset($meta['arrows_size']) && $meta['arrows_size'] != "")? ($meta['arrows_size']-8): ($options['arrows_size']-8);?>px;
        }
        #ed-carousel-<?php echo get_the_ID();?> .owl-controls .owl-buttons div:hover{
            color: <?php echo (isset($meta['arrows_color_h']) && $meta['arrows_color_h'] != "")? $meta['arrows_color_h']: $options['arrows_color_h'];?>;
            background:<?php echo (isset($meta['arrows_bg_h']) && $meta['arrows_bg_h'] != "")? $meta['arrows_bg_h']: $options['arrows_bg_h'];?>;
        }
        #ed-carousel-<?php echo get_the_ID();?> .owl-controls .owl-page span{
          background:<?php echo (isset($meta['pagination_color']) && $meta['pagination_color'] != "")? $meta['pagination_color']: $options['pagination_color'];?>;
        }
		.ed-carousel.center .owl-buttons div{
			margin-top:-<?php echo (isset($meta['arrows_size']) && $meta['arrows_size'] != "")? ($meta['arrows_size']/2)+ $pagination_have : ($options['arrows_size']/2)+ $pagination_have;?>px;
		}
        #ed-carousel-<?php echo get_the_ID();?> .owl-controls .owl-page.active span,
        #ed-carousel-<?php echo get_the_ID();?> .owl-controls.clickable .owl-page:hover span{
            background:<?php echo (isset($meta['pagination_color_h']) && $meta['pagination_color_h'] != "")? $meta['pagination_color_h']: $options['pagination_color_h'];?>;
        }
        
        #ed-carousel-<?php echo get_the_ID();?>.ed-carousel.top_right,#ed-carousel-<?php echo get_the_ID();?>.ed-carousel.top_left{
            padding-top:<?php echo (isset($meta['arrows_size']) && $meta['arrows_size'] != "")? ($meta['arrows_size']+4): ($options['arrows_size']+4);?>px;	
        }
        #ed-carousel-<?php echo get_the_ID();?>.ed-carousel.bottom_left,#ed-carousel-<?php echo get_the_ID();?>.ed-carousel.bottom_right{
            padding-bottom:<?php echo (isset($meta['arrows_size']) && $meta['arrows_size'] != "")? ($meta['arrows_size']+4): ($options['arrows_size']+4);?>px;
        }
        .ed-carousel-<?php echo get_the_ID();?> .ed-tooltip{
            background-color:<?php echo (isset($meta['tooltip_bg']) && $meta['tooltip_bg'] != "")? $meta['tooltip_bg']: $options['tooltip_bg'];?>;
            color:<?php echo (isset($meta['tooltip_color']) && $meta['tooltip_color'] != "")? $meta['tooltip_color']: $options['tooltip_color'];?>;
            font-size:<?php echo (isset($meta['tooltip_size']) && $meta['tooltip_size'] != "")? $meta['tooltip_size']: $options['tooltip_size'];?>px;
        }
		<?php 
		$border = (isset($meta['logo_border']) && $meta['logo_border'] != "")? $meta['logo_border']: $options['logo_border'];
		$border_size = (isset($meta['border_size']) && $meta['border_size'] != "")? $meta['border_size']: $options['border_size'];
		$border_color = (isset($meta['border_color']) && $meta['border_color'] != "")? $meta['border_color']: $options['border_color'];
		$border_color_h = (isset($meta['border_color_h']) && $meta['border_color_h'] != "")? $meta['border_color_h']: $options['border_color_h'];
		if($border == 'yes'):?>
		#ed-carousel-<?php echo get_the_ID();?> .ed-item{border:<?php echo ($border_size != "") ? $border_size :'';?>px solid <?php echo $border_color;?>}
		#ed-carousel-<?php echo get_the_ID();?> .ed-item:hover{border:<?php echo ($border_size != "") ? $border_size :'';?>px solid <?php echo $border_color_h;?>}
		<?php endif;?>
	  
    <?php
endwhile; wp_reset_postdata();
echo '</style>';
endif; wp_reset_query();		

}
// on backend area
add_action( 'wp_head', 'ed_logo_carousel_css',999);

function ed_logo_carousel_js(){
	wp_reset_postdata();
        wp_reset_query();
?>
<script type="text/javascript">
jQuery(document).ready(function($) {     
<?php
$args= array( 
	'post_type' =>'ed_logo',
	'posts_per_page'=>-1,
	'suppress_filters' => true
);
$options = get_option( 'ed_logo_carousel_options' );
$second_query = new WP_Query( $args );
if ($second_query->have_posts()) :
	while ($second_query->have_posts()) : $second_query->the_post();
	$meta = maybe_unserialize( get_post_meta(get_the_ID(), 'ed_logo_carousel_slider', true) );
?>
		<?php $autoPlay =(isset($meta['auto_play']) && $meta['auto_play'] != "") ? $meta['auto_play'] : $options['auto_play'];?>	
        <?php $auto_play_speed =(isset($meta['auto_play_speed']) && $meta['auto_play_speed'] != "")? $meta['auto_play_speed']: $options['auto_play_speed'];?>	
		<?php $slide_speed =(isset($meta['slide_speed']) && $meta['slide_speed'] != "") ? $meta['slide_speed'] : $options['slide_speed'];?>	
		<?php $hover =(isset($meta['stop_on_hover']) && $meta['stop_on_hover'] != "") ? $meta['stop_on_hover'] : $options['stop_on_hover'];?>	
		<?php $navigation =(isset($meta['next_prev_buttons']) && $meta['next_prev_buttons'] != "") ? $meta['next_prev_buttons'] : $options['next_prev_buttons'];?>
		 <?php $pagination =(isset($meta['pagination']) && $meta['pagination'] != "") ? $meta['pagination'] : $options['pagination'];?>
		<?php $mouseDrag =(isset($meta['mouse_drag']) && $meta['mouse_drag'] != "") ? $meta['mouse_drag'] : $options['mouse_drag'];?>
		<?php $lazyLoad =(isset($meta['lazy_load']) && $meta['lazy_load'] != "") ? $meta['lazy_load'] : $options['lazy_load'];?>
	$("#ed-carousel-<?php echo get_the_ID();?>").owlCarousel({
		<?php if($auto_play_speed != "" && $autoPlay == "yes"){?>
          autoPlay : <?php echo $auto_play_speed;?>,
        <?php }else{ ?>
          autoPlay : <?php echo ($autoPlay == "yes") ? 'true' : 'false';?>,
        <?php }?>
        slideSpeed : <?php echo $slide_speed;?>,
        stopOnHover : <?php echo ($hover == "yes") ? 'true' : 'false';?>,
        navigation : 'false',
        pagination : <?php echo ($pagination == "yes") ? 'true' : 'false';?>,
        mouseDrag : <?php echo ($mouseDrag == "yes") ? 'true' : 'false';?>,
        lazyLoad : <?php echo ($lazyLoad == "yes") ? 'true' : 'false';?>,
        items : <?php echo (isset($meta['desktop']) && $meta['desktop'] != "") ? $meta['desktop'] : $options['desktop'];?>,
        itemsDesktopSmall : [979, <?php echo (isset($meta['mini_desktop']) && $meta['mini_desktop'] != "") ? $meta['mini_desktop'] : $options['mini_desktop'];?>],
        itemsTablet : [768, <?php echo (isset($meta['tablet']) && $meta['tablet'] != "") ? $meta['tablet'] : $options['tablet'];?>],
        itemsMobile : [479, <?php echo (isset($meta['mobile']) && $meta['mobile'] != "") ? $meta['mobile'] : $options['mobile'];?>],
       
      });
 <?php
	endwhile; wp_reset_postdata();
endif; wp_reset_query();	
?>     
});
</script>
<?php
	
}
//add_action('wp_footer','ed_logo_carousel_js',999);