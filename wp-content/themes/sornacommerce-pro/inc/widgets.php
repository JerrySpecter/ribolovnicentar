<?php
class SornacommerceIconBlockWidget extends WP_Widget
{
	function __construct() {
	parent::__construct(
			// Base ID of your widget
			'sornacommerce_icon_text_block', 
			// Widget name will appear in UI
			__('Sornacommerce Icon,Text Widgets', 'sornacommerce'), 
		
			// Widget description
			array( 'description' => __( 'Displays a icon Block & TEXT Widgets', 'sornacommerce' ), ) 
		);
	}
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'content' => '' , 'icon' =>'' ,'buttontext' =>'','buttonurl' =>'') );
    $title = $instance['title'];
	$content = $instance['content'];
	$icon = $instance['icon'];
	$buttontext = $instance['buttontext'];
	$buttonurl = $instance['buttonurl'];
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: 
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
<p><label for="<?php echo $this->get_field_id('Content'); ?>">Content:
<textarea name="<?php echo $this->get_field_name('content'); ?>" cols="20" rows="5" class="widefat"><?php echo $content; ?></textarea>
</p>
<p><label for="<?php echo $this->get_field_id('icon'); ?>">Icon name: 
  <input class="widefat" id="<?php echo $this->get_field_id('icon'); ?>" name="<?php echo $this->get_field_name('icon'); ?>" type="text" value="<?php echo esc_attr($icon); ?>" placeholder="fa-quora" /></label>
  <?php echo __('See 600+ Icon list: <a href="'.esc_url( __( 'http://fontawesome.io/icons/', 'sornacommerce' )).'" target="_blank">fontawesome.io</a>.','sornacommerce'); ?>
</p>
<p><label for="<?php echo $this->get_field_id('buttontext'); ?>">Button Text: 
  <input class="widefat" id="<?php echo $this->get_field_id('buttontext'); ?>" name="<?php echo $this->get_field_name('buttontext'); ?>" type="text" value="<?php echo esc_attr($buttontext); ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('buttonurl'); ?>">Button url: 
  <input class="widefat" id="<?php echo $this->get_field_id('buttonurl'); ?>" name="<?php echo $this->get_field_name('buttonurl'); ?>" type="text" value="<?php echo esc_attr($buttonurl); ?>" /></label></p>

<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['title'] = $new_instance['title'];
	$instance['content'] = $new_instance['content'];
	$instance['icon'] = $new_instance['icon'];
	$instance['buttontext'] = $new_instance['buttontext'];
	$instance['buttonurl'] = $new_instance['buttonurl'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget."<div class='feature'>";
    $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
	$icon = empty($instance['icon']) ? '' : apply_filters('widget_icon', $instance['icon']);
	$content = empty($instance['content']) ? '' : apply_filters('widget_content', $instance['content']);
	$buttontext = empty($instance['buttontext']) ? '' : apply_filters('widget_buttontext', $instance['buttontext']);
	$buttonurl = empty($instance['buttonurl']) ? '' : apply_filters('widget_buttonurl', $instance['buttonurl']);
	
	if (preg_match("/fa-/i", $icon)) {
		
		$icon=strtolower( trim($icon) );
	}else{
		if (!empty($icon)){
			$icon='fa-'.strtolower( trim($icon) );
		}
	}
	
 	 if (!empty($icon))
	 echo '<i class="icon fa '.$icon.'"></i>';
	 
    if (!empty($title))
      echo '<h3 class="title">'. $title . '</h3>';
 	
 
    // WIDGET CODE GOES HERE
    echo '<div class="description">'.$content.'</div>';
 	if($buttontext != "" && $buttonurl != ""){
		echo '<a class="btn btn-theme" href="'.$buttonurl.'">'.$buttontext.'</a>';
	}
	
	
    echo '</div>'.$after_widget;
  }
 
}
class SornacommerceProductCategoryGrid extends WP_Widget
{
	function __construct() {
	parent::__construct(
			// Base ID of your widget
			'sornacommerce_product_category_grid', 
			// Widget name will appear in UI
			__('Sornacommerce Product Category Image Grid', 'sornacommerce'), 
		
			// Widget description
			array( 'description' => __( 'Displays Product Category Grid Widgets', 'sornacommerce' ), ) 
		);
	}
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'seleted_category' => array(), 'columns' => '3' ,'common_button_text' =>'Shop Now','color'=>'#000') );
    $seleted_category = $instance['seleted_category'];
	$columns = $instance['columns'];
	
	$common_button_text = $instance['common_button_text'];
	$color = $instance['color'];
	$product_cat = get_terms( 'product_cat' );
	
?>

<p><label for="<?php echo $this->get_field_id('seleted_category'); ?>"><?php echo __('Choose Woocommerce Category:','sornacommerce');?> 
<select class="widefat" role="5" cols="10" id="<?php echo $this->get_field_id('seleted_category'); ?>[]" name="<?php echo $this->get_field_name('seleted_category'); ?>[]" multiple="multiple">
<?php if( count($product_cat) > 0 ){
	foreach ( $product_cat as $term ) {	
	  ?>
<option value="<?php echo $term->slug;?>" <?php if(in_array($term->slug,$seleted_category[0] )): ?>selected="selected"<?php endif;?>?><?php echo $term->name;?></option>
<?php } }?>
</select></label>
</p>
<p><label for="<?php echo $this->get_field_id('columns'); ?>"><?php echo __('Category Columns:','sornacommerce');?> 
<select class="widefat" role="5" cols="10" id="<?php echo $this->get_field_id('columns'); ?>" name="<?php echo $this->get_field_name('columns'); ?>" >
<option value="12" <?php selected( 12,  esc_attr($columns) ); ?>><?php echo __('1 Columns','sornacommerce');?> </option>
<option value="6" <?php selected( 6,  esc_attr($columns) ); ?>><?php echo __('2 Columns','sornacommerce');?> </option>
<option value="4" <?php selected( 4,  esc_attr($columns) ); ?>><?php echo __('3 Columns','sornacommerce');?> </option>
<option value="3" <?php selected( 3,  esc_attr($columns) ); ?>><?php echo __('4 Columns','sornacommerce');?> </option>
<option value="2" <?php selected( 2,  esc_attr($columns) ); ?>><?php echo __('5 Columns','sornacommerce');?> </option>
</select></label>
</p>


<p><label for="<?php echo $this->get_field_id('common_button_text'); ?>"><?php echo __('Common Button Text:','sornacommerce');?> 
<input class="widefat" id="<?php echo $this->get_field_id('common_button_text'); ?>" name="<?php echo $this->get_field_name('common_button_text'); ?>" type="text" value="<?php echo esc_attr($common_button_text); ?>" /></label></p>

 <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#<?php echo $this->get_field_id( 'color' ); ?>').wpColorPicker();
    });
</script>

<p><label for="<?php echo $this->get_field_id('color'); ?>"><?php echo __('Text Color:','sornacommerce');?> 
<input id="<?php echo $this->get_field_id( 'color' ); ?>" type="text" name="<?php echo $this->get_field_name( 'color' ); ?>" value="<?php echo esc_attr( $instance['color'] ); ?>" /> </label></p>                        
                          


<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	
	$instance['seleted_category'] = $new_instance['seleted_category'];
	$instance['columns'] = $new_instance['columns'];
	$instance['color'] = $new_instance['color'];

	$instance['common_button_text'] = $new_instance['common_button_text'];
	
    return $instance;
  }

  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget."<div class='product-category-image-grid-wrp row'>";
    $seleted_category = empty($instance['seleted_category']) ? array() : apply_filters('widget_seleted_category', $instance['seleted_category']);
	$columns = empty($instance['columns']) ? '' : apply_filters('widget_columns', $instance['columns']);
	$link_type = empty($instance['link_type']) ? '' : apply_filters('widget_link_type', $instance['link_type']);
	$common_button_text = empty($instance['common_button_text']) ? '' : apply_filters('widget_common_button_text', $instance['common_button_text']);
	$color = empty($instance['color']) ? '#000' : apply_filters('widget_color', $instance['color']);
	
	$product_cat = get_terms( 'product_cat' );
	if( count($product_cat) > 0 && is_array($seleted_category[0]) ){
		foreach ( $product_cat as $term ) {
			if(in_array( $term->slug, $seleted_category[0])){ 
		
			echo '<figure class="col-md-'.$columns.' col-sm-'.$columns.'">';
			 echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="box_wrp ' . $term->slug . '">';
				$thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
				$img = wp_get_attachment_image_src($thumbnail_id,'full');
				echo '<img src="'.$img[0].'" class="responsive" />';
				echo '<figcaption><h3 style="color:'.$color.'">'.$term->name.'</h3><p style="color:'.$color.'">'.$term->description.'</p> <a href="' .  esc_url( get_term_link( $term ) ) . '" class="btn-theme">'.$common_button_text.'</a></figcaption>';
			  echo '</a>';		
			echo '</figure>';	
			}
			
		}
	}
	
    echo '</div>'.$after_widget;
  }
 
}

class SornacommerceProductCarousel extends WP_Widget
{
 	function __construct() {
	parent::__construct(
		// Base ID of your widget
		'SornacommerceProductCarousel', 

		// Widget name will appear in UI
		__('Sornacommerce Product Carousel', 'sornacommerce'), 

		// Widget description
		array( 'description' => __( 'Displays a WooCommerce Product Carousel', 'sornacommerce', 'sornacommerce' ), ) 
		);
	}

 function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array('product_type' => 'new' , 'order' =>'DESC' ,'orderby' =>'ID','number_of_product' =>'12','columns'=>4,'speed'=>3000) );
   
	$product_type = isset($instance['product_type']) ? $instance['product_type'] :'';
	$order = isset($instance['order']) ? $instance['order'] :'';
	$orderby = isset($instance['orderby']) ? $instance['orderby'] :'';
	$number_of_product = isset($instance['number_of_product'])? $instance['number_of_product'] : 12;
	$columns = isset($instance['columns']) ? $instance['columns'] :'4';
	$speed = isset($instance['speed']) ? $instance['speed'] :'3000';
	
?>


<p><label for="<?php echo $this->get_field_id('product_type'); ?>"><?php _e( 'Product Type', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('product_type'); ?>" name="<?php echo $this->get_field_name('product_type'); ?>" class="widefat">
	<option value="new" <?php selected( $product_type, 'new' ); ?>>New</option>
	<option value="featured" <?php selected( $product_type, 'featured' ); ?>>Featured</option>
	<option value="selling" <?php selected( $product_type, 'selling' ); ?>>Best Selling</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('order'); ?>"><?php _e( 'Order', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>" class="widefat">
	<option value="DESC" <?php selected( $order, 'DESC' ); ?>>DESC</option>
	<option value="ASC" <?php selected( $order, 'ASC' ); ?>>ASC</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e( 'Orderby', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>" class="widefat">
	<option value="ID" <?php selected( $orderby, 'ID' ); ?>>ID</option>
	<option value="title" <?php selected( $orderby, 'title' ); ?>>title</option>
	<option value="rand" <?php selected( $orderby, 'rand' ); ?>>rand</option>
	<option value="date" <?php selected( $orderby, 'date' ); ?>>date</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('number_of_product'); ?>"><?php _e( 'Number of products', 'woocommerce' ); ?>: 
<input type="number" id="<?php echo $this->get_field_id('number_of_product'); ?>" name="<?php echo $this->get_field_name('number_of_product'); ?>" class="widefat" value="<?php echo esc_attr($number_of_product); ?>">
</label>
</p>

<p><label for="<?php echo $this->get_field_id('columns'); ?>"><?php echo __('Number of Columns:','sornacommerce');?> 
<input type="number" id="<?php echo $this->get_field_id('columns'); ?>" name="<?php echo $this->get_field_name('columns'); ?>" class="widefat" value="<?php echo esc_attr($columns); ?>">
</label>
</p>

<p><label for="<?php echo $this->get_field_id('speed'); ?>"><?php echo __('Carousel Speed:','sornacommerce');?> 
<input type="number" id="<?php echo $this->get_field_id('speed'); ?>" name="<?php echo $this->get_field_name('speed'); ?>" class="widefat" value="<?php echo esc_attr($speed); ?>">
</label>
</p>



<?php
  }
 
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	
	$instance['product_type'] = ( ! empty( $new_instance['product_type'] ) ) ? strip_tags( $new_instance['product_type'] ) : '';
	$instance['orderby'] = ( ! empty( $new_instance['orderby'] ) ) ? strip_tags( $new_instance['orderby'] ) : '';
	$instance['order'] = ( ! empty( $new_instance['order'] ) ) ? strip_tags( $new_instance['order'] ) : '';
	$instance['columns'] = ( ! empty( $new_instance['columns'] ) ) ? strip_tags( $new_instance['columns'] ) : '4';
	$instance['speed'] = ( ! empty( $new_instance['speed'] ) ) ? strip_tags( $new_instance['speed'] ) : '3000';
	$instance['number_of_product'] = ( ! empty( $new_instance['number_of_product'] ) ) ? strip_tags( $new_instance['number_of_product'] ) : 12;
	return $instance;
}
 
  function widget($args, $instance)
  {
  	//global $product;
    extract($args, EXTR_SKIP);


 $product_type = isset($instance['product_type']) ? $instance['product_type'] : '';
 $orderby = isset($instance['orderby']) ? $instance['orderby'] : '';
 $order = isset($instance['order']) ? $instance['order'] :'' ;
 $number_of_product = isset($instance['number_of_product']) ? $instance['number_of_product'] : '';

$columns = isset($instance['columns']) ? $instance['columns'] :'4';
$speed = isset($instance['speed']) ? $instance['speed'] :'3000';
  
   
    if ( $product_type =='featured' ){
	    $args = array(  
	        'post_type'      => 'product',  
	        'meta_key'       => '_featured',  
	        'meta_value'     => 'yes',  
	        'posts_per_page' => $number_of_product,
	        'order '  		 =>	$order,
	        'orderby  '  	 =>	$orderby,
	    ); 
	}elseif( $product_type =='selling' ){
		
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => $number_of_product,
			'order '  		 =>	$order,
			'orderby  '  	 =>	$orderby,
			'meta_key' => 'total_sales',
			'orderby' => 'meta_value_num',
		 );

	}else{

		
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => $number_of_product,
			'order '  		 =>	'DESC',
			'orderby  '  	 =>	$orderby
		 );

	
	}wp_reset_postdata();
        wp_reset_query();
    $product_query = new WP_Query( $args );  
    if ($product_query->have_posts()) :
    ?>
    
        <div class=" product_carousel_widgets woocommerce">
        
            <?php
            while ($product_query->have_posts()) :
                $product_query->the_post(); 
                $product = wc_get_product(get_the_id());  
                ?>
                
                 <div class="col-lg-<?php echo $columns;?> col-sm-<?php echo $columns;?> col-xs-12">
                <?php wc_get_template_part( 'content', 'sornacommercewidgets' ); ?>
              	</div>
              
                <?php
            endwhile;
            ?>
        </div>
        
    	<?php	
    endif;    
	wp_reset_postdata();
        wp_reset_query();
		?>
        <script type="text/javascript">
		(function(jQuery) {
    'use strict';
    jQuery(document).ready(function() {

		/* ============== SLIDE SHOW ============= */
		
		if(jQuery('.product_carousel_widgets').length > 0) {
			jQuery('.product_carousel_widgets').owlCarousel({
			items:<?php echo $columns;?>,
			autoPlay :<?php echo $speed;?>,
			pagination : false,
			navigation : true,
			navigationText : ['', ''],
			});
		}
	});
})(jQuery);
		</script>
        <?php
 
  }
 
}

function widgets_scripts( $hook ) {
    if ( 'widgets.php' != $hook ) {
        return;
    }
    wp_enqueue_style( 'wp-color-picker' );        
    wp_enqueue_script( 'wp-color-picker' ); 
}
add_action( 'admin_enqueue_scripts', 'widgets_scripts' );



class SornacommerceProductGrid extends WP_Widget
{
 	function __construct() {
	parent::__construct(
		// Base ID of your widget
		'SornacommerceProductGrid', 

		// Widget name will appear in UI
		__('Sornacommerce Product Grid', 'sornacommerce'), 

		// Widget description
		array( 'description' => __( 'Displays a WooCommerce Product Grid', 'sornacommerce', 'sornacommerce' ), ) 
		);
	}

 function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array('product_type' => 'new' , 'order' =>'DESC' ,'orderby' =>'ID','number_of_product' =>'12','columns'=>3,'speed'=>3000) );
   
	$product_type = isset($instance['product_type']) ? $instance['product_type'] :'';
	$order = isset($instance['order']) ? $instance['order'] :'';
	$orderby = isset($instance['orderby']) ? $instance['orderby'] :'';
	$number_of_product = isset($instance['number_of_product'])? $instance['number_of_product'] : 12;
	$columns = isset($instance['columns']) ? $instance['columns'] :'4';
	$speed = isset($instance['speed']) ? $instance['speed'] :'3000';
	
?>


<p><label for="<?php echo $this->get_field_id('product_type'); ?>"><?php _e( 'Product Type', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('product_type'); ?>" name="<?php echo $this->get_field_name('product_type'); ?>" class="widefat">
	<option value="new" <?php selected( $product_type, 'new' ); ?>>New</option>
	<option value="featured" <?php selected( $product_type, 'featured' ); ?>>Featured</option>
	<option value="selling" <?php selected( $product_type, 'selling' ); ?>>Best Selling</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('order'); ?>"><?php _e( 'Order', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>" class="widefat">
	<option value="DESC" <?php selected( $order, 'DESC' ); ?>>DESC</option>
	<option value="ASC" <?php selected( $order, 'ASC' ); ?>>ASC</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e( 'Orderby', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>" class="widefat">
	<option value="ID" <?php selected( $orderby, 'ID' ); ?>>ID</option>
	<option value="title" <?php selected( $orderby, 'title' ); ?>>title</option>
	<option value="rand" <?php selected( $orderby, 'rand' ); ?>>rand</option>
	<option value="date" <?php selected( $orderby, 'date' ); ?>>date</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('number_of_product'); ?>"><?php _e( 'Number of products', 'woocommerce' ); ?>: 
<input type="number" id="<?php echo $this->get_field_id('number_of_product'); ?>" name="<?php echo $this->get_field_name('number_of_product'); ?>" class="widefat" value="<?php echo esc_attr($number_of_product); ?>">
</label>
</p>



<p><label for="<?php echo $this->get_field_id('columns'); ?>"><?php echo __('Number of Columns:','sornacommerce');?> 
<select class="widefat" role="5" cols="10" id="<?php echo $this->get_field_id('columns'); ?>" name="<?php echo $this->get_field_name('columns'); ?>" >
<option value="12" <?php selected( 12,  esc_attr($columns) ); ?>><?php echo __('1 Columns','sornacommerce');?> </option>
<option value="6" <?php selected( 6,  esc_attr($columns) ); ?>><?php echo __('2 Columns','sornacommerce');?> </option>
<option value="4" <?php selected( 4,  esc_attr($columns) ); ?>><?php echo __('3 Columns','sornacommerce');?> </option>
<option value="3" <?php selected( 3,  esc_attr($columns) ); ?>><?php echo __('4 Columns','sornacommerce');?> </option>
<option value="2" <?php selected( 2,  esc_attr($columns) ); ?>><?php echo __('5 Columns','sornacommerce');?> </option>
</select></label>
</p>



<?php
  }
 
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	
	$instance['product_type'] = ( ! empty( $new_instance['product_type'] ) ) ? strip_tags( $new_instance['product_type'] ) : '';
	$instance['orderby'] = ( ! empty( $new_instance['orderby'] ) ) ? strip_tags( $new_instance['orderby'] ) : '';
	$instance['order'] = ( ! empty( $new_instance['order'] ) ) ? strip_tags( $new_instance['order'] ) : '';
	$instance['columns'] = ( ! empty( $new_instance['columns'] ) ) ? strip_tags( $new_instance['columns'] ) : '4';
	
	$instance['number_of_product'] = ( ! empty( $new_instance['number_of_product'] ) ) ? strip_tags( $new_instance['number_of_product'] ) : 12;
	return $instance;
}
 
  function widget($args, $instance)
  {
  	//global $product;
    extract($args, EXTR_SKIP);


 $product_type = isset($instance['product_type']) ? $instance['product_type'] : '';
 $orderby = isset($instance['orderby']) ? $instance['orderby'] : '';
 $order = isset($instance['order']) ? $instance['order'] :'' ;
 $number_of_product = isset($instance['number_of_product']) ? $instance['number_of_product'] : '';

$columns = isset($instance['columns']) ? $instance['columns'] :'4';

  
   
    if ( $product_type =='featured' ){
	    $args = array(  
	        'post_type'      => 'product',  
	        'meta_key'       => '_featured',  
	        'meta_value'     => 'yes',  
	        'posts_per_page' => $number_of_product,
	        'order '  		 =>	$order,
	        'orderby  '  	 =>	$orderby,
	    ); 
	}elseif( $product_type =='selling' ){
		
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => $number_of_product,
			'order '  		 =>	$order,
			'orderby  '  	 =>	$orderby,
			'meta_key' => 'total_sales',
			'orderby' => 'meta_value_num',
		 );

	}else{

		
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => $number_of_product,
			'order '  		 =>	'DESC',
			'orderby  '  	 =>	$orderby
		 );

	
	}wp_reset_postdata();
        wp_reset_query();
    $product_query = new WP_Query( $args );
	  
    if ($product_query->have_posts()) :
    ?>
    
        <div class="sornacommerce_product_grid_widgets woocommerce">
        
            <?php
            while ($product_query->have_posts()) :
                $product_query->the_post(); 
                $product = wc_get_product(get_the_id());  
                ?>
                <div class="col-lg-<?php echo $columns;?> col-sm-<?php echo $columns;?> col-xs-12">
                <?php wc_get_template_part( 'content', 'sornacommercewidgets' ); ?>
              	</div>
                <?php
            endwhile;
            ?>
        </div>
        
    	<?php	
    endif;    
	wp_reset_postdata();
        wp_reset_query();
		?>
    
        <?php
 
  }
 
}


class SornacommerceTestimonial extends WP_Widget
{

 
 function __construct() {
parent::__construct(
		// Base ID of your widget
		'SornacommerceTestimonial', 
	
		// Widget name will appear in UI
		__('Sornacommerce Testimonial', 'sornacommerce'), 
	
		// Widget description
		array( 'description' => __( 'Displays a Testimonial Widgets', 'sornacommerce' ), ) 
	);
}
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'shownumber' => '6', 'orderby' => 'id','order' =>'DESC') );
    $shownumber = $instance['shownumber'];
	$orderby = $instance['orderby'];
	$order = $instance['order'];
	
	
?>
<p><label for="<?php echo $this->get_field_id('shownumber'); ?>">Show number: 
  <input class="widefat" id="<?php echo $this->get_field_id('shownumber'); ?>" name="<?php echo $this->get_field_name('shownumber'); ?>" type="text" value="<?php echo esc_attr($shownumber); ?>" /></label></p>



<p><label for="<?php echo $this->get_field_id('orderby'); ?>">Order by: 
	<select class="widefat" id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>">
    	<option value="id" <?php echo ($subtitle_pos=='id')? 'selected="selected"' : '';?>>ID</option>
        <option value="title" <?php echo ($subtitle_pos=='title')? 'selected="selected"' : '';?>>Title</option>
        <option value="name" <?php echo ($subtitle_pos=='name')? 'selected="selected"' : '';?>>Name</option>
        <option value="date" <?php echo ($subtitle_pos=='date')? 'selected="selected"' : '';?>>Date</option>
        <option value="rand" <?php echo ($subtitle_pos=='rand')? 'selected="selected"' : '';?>>Rand</option>
    </select></p>
<p><label for="<?php echo $this->get_field_id('order'); ?>">Order: 
	<select class="widefat" id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>">
    	<option value="DESC" <?php echo ($align=='DESC')? 'selected="selected"' : '';?>>DESC</option>
        <option value="ASC" <?php echo ($align=='ASC')? 'selected="selected"' : '';?>>ASC</option>
    </select></p>
    
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['shownumber'] = $new_instance['shownumber'];
	$instance['orderby'] = $new_instance['orderby'];
	$instance['order'] = $new_instance['order'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $shownumber = empty($instance['shownumber']) ? '' : apply_filters('widget_shownumber', $instance['shownumber']);
	$orderby = empty($instance['orderby']) ? '' : apply_filters('widget_orderby', $instance['orderby']);
	$order = empty($instance['order']) ? '' : apply_filters('widget_order', $instance['order']);
	
  
		$shownumber = empty($shownumber) ?'':' shownumber="'.$shownumber.'" ';
		$orderby = empty($orderby) ?'':' orderby="'.$orderby.'" ';
		$order = empty($order) ?'':' order="'.$order.'" ';
		
		if($shownumber!=""){
			echo do_shortcode('[edstestimonial '.$shownumber.' '.$orderby.' '.$order.']');	
		}
 
    echo $after_widget;
  }
 
}

class SornacommerceBlogPostCarousel extends WP_Widget
{
 	function __construct() {
	parent::__construct(
		// Base ID of your widget
		'SornacommerceBlogPostCarousel', 

		// Widget name will appear in UI
		__('Sornacommerce Blog Post Grid', 'sornacommerce'), 

		// Widget description
		array( 'description' => __( 'Displays a Blog Post Grid', 'sornacommerce', 'sornacommerce' ), ) 
		);
	}

 function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array('product_type' => 'new' , 'order' =>'DESC' ,'orderby' =>'ID','number_of_product' =>'12','columns'=>4,'type'=>'grid') );
   
	
	$order = isset($instance['order']) ? $instance['order'] :'';
	$orderby = isset($instance['orderby']) ? $instance['orderby'] :'';
	$number_of_product = isset($instance['number_of_product'])? $instance['number_of_product'] : 12;
	$columns = isset($instance['columns']) ? $instance['columns'] :'4';
	$type = isset($instance['type']) ? $instance['type'] :'grid';
	
?>




<p><label for="<?php echo $this->get_field_id('order'); ?>"><?php _e( 'Order', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>" class="widefat">
	<option value="DESC" <?php selected( $order, 'DESC' ); ?>>DESC</option>
	<option value="ASC" <?php selected( $order, 'ASC' ); ?>>ASC</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e( 'Orderby', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>" class="widefat">
	<option value="ID" <?php selected( $orderby, 'ID' ); ?>>ID</option>
	<option value="title" <?php selected( $orderby, 'title' ); ?>>title</option>
	<option value="rand" <?php selected( $orderby, 'rand' ); ?>>rand</option>
	<option value="date" <?php selected( $orderby, 'date' ); ?>>date</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('number_of_product'); ?>"><?php _e( 'Number of products', 'woocommerce' ); ?>: 
<input type="number" id="<?php echo $this->get_field_id('number_of_product'); ?>" name="<?php echo $this->get_field_name('number_of_product'); ?>" class="widefat" value="<?php echo esc_attr($number_of_product); ?>">
</label>
</p>

<p><label for="<?php echo $this->get_field_id('columns'); ?>"><?php echo __('Number of Columns:','sornacommerce');?> 
<select class="widefat" role="5" cols="10" id="<?php echo $this->get_field_id('columns'); ?>" name="<?php echo $this->get_field_name('columns'); ?>" >
<option value="12" <?php selected( 12,  esc_attr($columns) ); ?>><?php echo __('1 Columns','sornacommerce');?> </option>
<option value="6" <?php selected( 6,  esc_attr($columns) ); ?>><?php echo __('2 Columns','sornacommerce');?> </option>
<option value="4" <?php selected( 4,  esc_attr($columns) ); ?>><?php echo __('3 Columns','sornacommerce');?> </option>
<option value="3" <?php selected( 3,  esc_attr($columns) ); ?>><?php echo __('4 Columns','sornacommerce');?> </option>
<option value="2" <?php selected( 2,  esc_attr($columns) ); ?>><?php echo __('5 Columns','sornacommerce');?> </option>
</select></label>
</p>

<p><label for="<?php echo $this->get_field_id('type'); ?>"><?php echo __('Grid Type:','sornacommerce');?> 
<select class="widefat" role="5" cols="10" id="<?php echo $this->get_field_id('type'); ?>" name="<?php echo $this->get_field_name('type'); ?>" >
<option value="grid" <?php selected( 'grid',  esc_attr($type) ); ?>><?php echo __('Simply Grid','sornacommerce');?> </option>
<option value="masonry_grid" <?php selected( 'masonry_grid',  esc_attr($type) ); ?>><?php echo __('Masonry Grid','sornacommerce');?> </option>

</select></label>
</p>



<?php
  }
 
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	
	
	$instance['orderby'] = ( ! empty( $new_instance['orderby'] ) ) ? strip_tags( $new_instance['orderby'] ) : '';
	$instance['order'] = ( ! empty( $new_instance['order'] ) ) ? strip_tags( $new_instance['order'] ) : '';
	$instance['columns'] = ( ! empty( $new_instance['columns'] ) ) ? strip_tags( $new_instance['columns'] ) : '4';
	$instance['type'] = ( ! empty( $new_instance['type'] ) ) ? strip_tags( $new_instance['type'] ) : 'grid';
	$instance['number_of_product'] = ( ! empty( $new_instance['number_of_product'] ) ) ? strip_tags( $new_instance['number_of_product'] ) : 12;
	return $instance;
}
 
  function widget($args, $instance)
  {
  	//global $product;
    extract($args, EXTR_SKIP);



 $orderby = isset($instance['orderby']) ? $instance['orderby'] : '';
 $order = isset($instance['order']) ? $instance['order'] :'' ;
 $number_of_product = isset($instance['number_of_product']) ? $instance['number_of_product'] : '';

$columns = isset($instance['columns']) ? $instance['columns'] :'4';
$grid_type = isset($instance['type']) ? $instance['type'] :'grid';

 		 $args = array(  
	        'post_type'      => 'post',  
	        'posts_per_page' => $number_of_product,
	        'order '  		 =>	$order,
	        'orderby  '  	 =>	$orderby,
	    ); 
   
    
	wp_reset_postdata();
        wp_reset_query();
    $product_query = new WP_Query( $args );  
    if ($product_query->have_posts()) :
	
	if( $grid_type == 'masonry_grid' ){
			echo '<div class="masonry_grid"><div class="grid-sizer col-lg-'.$columns.' col-sm-'.$columns.' col-xs-12 blog-margin-top grid_layout"></div>';
		}else{
			echo '<div>';
		}
		
	if($columns == 6){
		$reset = 2;
	}elseif($columns == 4){
		$reset = 3;
	}elseif($columns == 3){
		$reset = 4;
	}else{
		$reset = 1;	
	}
   
			$i = 0;
            while ($product_query->have_posts()) :
                $product_query->the_post();$i++;
				?>
                <div class="grid-item col-lg-<?php echo $columns;?> col-sm-<?php echo $columns;?> col-xs-12 blog-margin-top grid_layout">
                	<?php  get_template_part( 'template-parts/post/content-widgets', get_post_format() ); ?>
                
                </div>
                <?php
              if( $grid_type != 'masonry_grid' ){
				 if( $i == $reset){
					echo '<div class="clearfix"></div>';
					$i = 0; 
				 }
		 		}  
            endwhile;
            ?>
       
        </div>
    	<?php	
    endif;    
	wp_reset_postdata();
        wp_reset_query();
		?>
         
        <?php
 
  }
 
}


class SornacommerceLogoCarousel extends WP_Widget
{

 
 function __construct() {
parent::__construct(
		// Base ID of your widget
		'SornacommerceLogoCarousel', 
	
		// Widget name will appear in UI
		__('Sornacommerce Logo Carousel', 'sornacommerce'), 
	
		// Widget description
		array( 'description' => __( 'Displays a Logo Carousel Widgets', 'sornacommerce' ), ) 
	);
}
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'logoid' => '0') );
    $logoid = $instance['logoid'];
?>


<p><label for="<?php echo $this->get_field_id('logoid'); ?>"><?php echo __('Select Logo Carousel','sornacommerce');?> 
	<select class="widefat" id="<?php echo $this->get_field_id('logoid'); ?>" name="<?php echo $this->get_field_name('logoid'); ?>">
<?php
$args = array(  
'post_type'      => 'ed_logo',  
'posts_per_page' => -1,

); 
wp_reset_postdata();
wp_reset_query();
$logo = new WP_Query( $args );  
if ($logo->have_posts()) :
while ($logo->have_posts()) :  $logo->the_post(); 
?>    	
<option value="<?php echo get_the_ID();?>" <?php selected( get_the_ID(), $logoid );?>><?php echo get_the_title();?></option>
<?php endwhile; endif;
wp_reset_postdata();
wp_reset_query();
?>        
    </select></p>

    
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
	$instance['logoid'] = $new_instance['logoid'];

    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $logoid = empty($instance['logoid']) ? '' : apply_filters('widget_logoid', $instance['logoid']);
	if( $logoid != "" ){
		echo do_shortcode("[ed-logo id='".$logoid."']");
	}
	
	
	
    echo $after_widget;
  }
 
}

class SornacommerceBrandsCarousel extends WP_Widget
{


	function __construct() {
		parent::__construct(
			// Base ID of your widget
			'SornacommerceBrandsCarousel', 

			// Widget name will appear in UI
			__('Sornacommerce Brands Carousel', 'edsbootstrap'), 

			// Widget description
			array( 'description' => __( 'Displays a Yith WooCommerce Brands Carousel', 'sornacommerce' ), ) 
		);
	}

 function form($instance){
    $instance = wp_parse_args( (array) $instance, array(  'order' =>'DESC' ,'orderby' =>'ID') );
    
	$order = isset($instance['order']) ? $instance['order'] :'';
	$orderby = isset($instance['orderby']) ? $instance['orderby'] :'';
	
	
?>


<p><label for="<?php echo $this->get_field_id('order'); ?>"><?php _e( 'Order', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>" class="widefat">
	<option value="DESC" <?php selected( $order, 'DESC' ); ?>>DESC</option>
	<option value="ASC" <?php selected( $order, 'ASC' ); ?>>ASC</option>
</select>
</label>
</p>

<p><label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e( 'Orderby', 'woocommerce' ); ?>: 
<select id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>" class="widefat">
	<option value="ID" <?php selected( $orderby, 'ID' ); ?>>ID</option>
	<option value="name" <?php selected( $orderby, 'name' ); ?>>Name</option>
	<option value="slug" <?php selected( $orderby, 'slug' ); ?>>Slug</option>
	<option value="term_group" <?php selected( $orderby, 'term_group' ); ?>>Term Group</option>
    <option value="slug" <?php selected( $orderby, 'slug' ); ?>>Slug</option>
</select>
</label>
</p>



<?php
}
 
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	
	$instance['orderby'] = ( ! empty( $new_instance['orderby'] ) ) ? strip_tags( $new_instance['orderby'] ) : '';
	$instance['order'] = ( ! empty( $new_instance['order'] ) ) ? strip_tags( $new_instance['order'] ) : '';
	
	return $instance;
}
 
  function widget($args, $instance)
  {
  	//global $product;
    extract($args, EXTR_SKIP);



 $orderby = isset($instance['orderby']) ? $instance['orderby'] : '';
 $order = isset($instance['order']) ? $instance['order'] :'' ;



   echo $before_widget;
   if( function_exists('yith_wcbr_get_term_meta') ){
	echo '<div class="brand-carousel">';
				
    $product_brands = get_terms('yith_product_brand', array('hide_empty' => false, 'orderby' =>$orderby, 'order' =>$order ));
    if ( count( $product_brands ) > 0 ){
		foreach( $product_brands as $term ) {
			
			$thumbnail_id = absint( yith_wcbr_get_term_meta( $term->term_id, 'thumbnail_id', true ) );
			$image = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
				if( $image ){
				echo '
					<div class="single-brand">';
				echo sprintf( '<a href="%s"><img src="%s" width="%d" height="%d" alt="%s"/></a>', get_term_link( $term ), $image[0], $image[1], $image[2], $term->name );
				echo '</div>';
				}
				
		}
    }
	}else{
		echo "YITH WooCommerce Brands Add-On Not Found";
	}
	echo "</div>";
    echo $after_widget;
  }
 
}
// Register and load the widget
function sornacommerce_load_widget() {
	register_widget( 'SornacommerceIconBlockWidget');
	register_widget( 'SornacommerceProductCategoryGrid');
	register_widget( 'SornacommerceProductCarousel');
	register_widget( 'SornacommerceProductGrid');
	register_widget( 'SornacommerceTestimonial');
	register_widget( 'SornacommerceBlogPostCarousel');
	register_widget( 'SornacommerceLogoCarousel');
	register_widget( 'SornacommerceBrandsCarousel');
}
add_action( 'widgets_init', 'sornacommerce_load_widget' );
