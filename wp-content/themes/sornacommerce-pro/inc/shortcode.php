<?php
function eds_testimonial( $atts ) {
	$data = shortcode_atts( array(
        'shownumber' =>'5000',
		'orderby' =>'ID',
		'order' =>'DESC',
    ), $atts );
	$args= array( 
		'post_type' =>'eds_testimonial',
		'order' =>$data['order'],
		'orderby' =>$data['orderby'],
		'posts_per_page'=>(int)$data['shownumber'],
		'suppress_filters' => true
	);
	$second_query = new WP_Query( $args );
	if ($second_query->have_posts()) :
		$output .='
		<div class="col-md-12">
		<div id="testimonial-slider" class="owl-carousel">';
		 while ($second_query->have_posts()) : $second_query->the_post();
		 $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
		 $meta = get_post_meta( get_the_ID(), '_eds_testimonial', true );
			$output .='<div class="testimonial">
                    <div class="pic">
                        <img src="'.$image[0].'" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="description">
                            '.get_the_content().'
                        </div>
                        <h3 class="testimonial-title">'.get_the_title().'</h3>
                        <small class="post">/ '.$meta['_eds_des'].'</small>
                    </div>
                </div>';
			
	     endwhile; wp_reset_postdata();
		$output .='</div>
		</div>
		';
	endif; wp_reset_query();
	return $output;	
}
add_shortcode( 'edstestimonial', 'eds_testimonial' );
