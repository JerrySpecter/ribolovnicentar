<?php
if( !function_exists('ed_logo_carousel_style_settings')){
  function ed_logo_carousel_style_settings($post_type) {
    $types = array('ed_logo');

    if (in_array($post_type, $types)) {
      add_meta_box(
        'ed-logo-carousel-style-settings',
        'Style Settings ',
        'ed_logo_carousel_style_settings_callback',
        $post_type,
        'side',
        'low'
      );
    }
  }
  add_action('add_meta_boxes', 'ed_logo_carousel_style_settings');
  
  function ed_logo_carousel_style_settings_callback($post){
	   wp_nonce_field( basename(__FILE__), 'ed_logo_carousel_style_settings_nonce' );
	 	$options = get_option( 'ed_logo_carousel_options' );
	    $meta_style = maybe_unserialize( get_post_meta($post->ID, 'ed_logo_carousel_style', true) );
		$arrows_size = (isset($meta_style['arrows_size']) && $meta_style['arrows_size'] != "")? $meta_style['arrows_size']: $options['arrows_size'];
		$arrows_bg = (isset($meta_style['arrows_bg']) && $meta_style['arrows_bg'] != "")? $meta_style['arrows_bg']: $options['arrows_bg'];
		$arrows_color = (isset($meta_style['arrows_color']) && $meta_style['arrows_color'] != "")? $meta_style['arrows_color']: $options['arrows_color'];
		$arrows_bg_h = (isset($meta_style['arrows_bg_h']) && $meta_style['arrows_bg_h'] != "")? $meta_style['arrows_bg_h']: $options['arrows_bg_h'];
		$arrows_color_h = (isset($meta_style['arrows_color_h']) && $meta_style['arrows_color_h'] != "")? $meta_style['arrows_color_h']: $options['arrows_color_h'];
		$pagination_color = (isset($meta_style['pagination_color']) && $meta_style['pagination_color'] != "")? $meta_style['pagination_color']: $options['pagination_color'];
		$pagination_color_h = (isset($meta_style['pagination_color_h']) && $meta_style['pagination_color_h'] != "")? $meta_style['pagination_color_h']: $options['pagination_color_h'];
		$tooltip_bg = (isset($meta_style['tooltip_bg']) && $meta_style['tooltip_bg'] != "")? $meta_style['tooltip_bg']: $options['tooltip_bg'];
		$tooltip_color = (isset($meta_style['tooltip_color']) && $meta_style['tooltip_color'] != "")? $meta_style['tooltip_color']: $options['tooltip_color'];
		$tooltip_size = (isset($meta_style['tooltip_size']) && $meta_style['tooltip_size'] != "")? $meta_style['tooltip_size']: $options['tooltip_size'];
	 
	  ?>
      
   
    	<div class="ed-space"></div>
        <label for="sample_text"><?php _e( 'Pagination Color', 'ed_logo' ); ?></label>
       <input class="ed_color_field" type="text" name="ed_logo_carousel_style[pagination_color]" value="<?php esc_attr_e( $pagination_color ); ?>" data-default-color="#da5d5d"/>
    	<div class="ed-space"></div>
        <label for="sample_text"><?php _e( 'Pagination Hover Color', 'ed_logo' ); ?></label>
       <input class="ed_color_field" type="text" name="ed_logo_carousel_style[pagination_color_h]" value="<?php esc_attr_e( $pagination_color_h ); ?>" data-default-color="#da5d5d"/>
    	<div class="ed-space"></div>
    	 <label for="sample_text"> <?php _e( 'Tooltip Background', 'ed_logo' ); ?></label>
       <input class="ed_color_field" type="text" name="ed_logo_carousel_style[tooltip_bg]" value="<?php esc_attr_e( $tooltip_bg ); ?>" data-default-color="#da5d5d"/>
    	<div class="ed-space"></div>
        <label for="sample_text"><?php _e( 'Tooltip Text Color', 'ed_logo' ); ?></label>
       <input class="ed_color_field" type="text" name="ed_logo_carousel_style[tooltip_color]" value="<?php esc_attr_e( $tooltip_color ); ?>" data-default-color="#da5d5d"/>
         <div class="ed-space"></div>
         <label for="sample_text"><?php _e( 'Tooltip Font Size', 'ed_logo' ); ?></label>
        <select name="ed_logo_carousel_style[tooltip_size]" >
            <?php for ($x = 9; $x <= 50; $x++) {?>
          <option value="<?php echo $x;?>" <?php if($tooltip_size == $x):?> selected="selected"<?php endif;?>><?php echo $x;?> <?php _e( 'px', 'ed_logo' ); ?></option>
           <?php } ?>
        </select>
      <div class="ed-space"></div>
      	<?php $logo_border = (isset($meta_style['logo_border']) && $meta_style['logo_border'] != "")? $meta_style['logo_border']: $options['logo_border'];?>
      
       <label for="sample_text"><?php _e( 'Logo Border', 'ed_logo' ); ?></label>
        <select name="ed_logo_carousel_style[logo_border]" >
         <option value="no" <?php if($logo_border == 'no'):?> selected="selected"<?php endif;?>><?php _e( 'No', 'ed_logo' ); ?></option>
    	 <option value="yes" <?php if($logo_border == 'yes'):?> selected="selected"<?php endif;?>><?php _e( 'Yes', 'ed_logo' ); ?></option>	
        </select>
         <div class="ed-space"></div>
         <?php $border_size = (isset($meta_style['border_size']) && $meta_style['border_size'] != "")? $meta_style['border_size']: $options['border_size'];?>
          <label for="sample_text"><?php _e( 'Logo Border Size', 'ed_logo' ); ?></label>
          <input name="ed_logo_carousel_style[border_size]]" value="<?php echo $border_size;?>" type="number"> px
          <div class="ed-space"></div>
          <?php $border_color = (isset($meta_style['border_color']) && $meta_style['border_color'] != "")? $meta_style['border_color']: $options['border_color'];?>
        <label for="sample_text"><?php _e( 'Border Color', 'ed_logo' ); ?></label>
       <input class="ed_color_field" type="text" name="ed_logo_carousel_style[border_color]" value="<?php esc_attr_e( $border_color ); ?>"/>
    	 <div class="ed-space"></div>
          <?php $border_color_h = (isset($meta_style['border_color_h']) && $meta_style['border_color_h'] != "")? $meta_style['border_color_h']: $options['border_color_h'];?>
        <label for="sample_text"><?php _e( 'Border Hover Color', 'ed_logo' ); ?></label>
       <input class="ed_color_field" type="text" name="ed_logo_carousel_style[border_color_h]" value="<?php esc_attr_e( $border_color_h ); ?>" />
    	
      <?php
	  
  }
}

if( !function_exists('ed_bg_assign_section_meta_save') ){
	  
  function ed_bg_assign_section_meta_save($post_id) {
    if (!isset($_POST['ed_logo_carousel_style_settings_nonce']) || !wp_verify_nonce($_POST['ed_logo_carousel_style_settings_nonce'], basename(__FILE__))) return;

    if (!current_user_can('edit_post', $post_id)) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(isset($_POST['ed_logo_carousel_style'])) {
	  $carousel_style = ed_sanitize_text( $_POST['ed_logo_carousel_style'] );
      update_post_meta($post_id, 'ed_logo_carousel_style', maybe_serialize( $carousel_style ) );
    } else {
      delete_post_meta($post_id, 'ed_logo_carousel_style');
    }
	
	
  }
  add_action('save_post', 'ed_bg_assign_section_meta_save');

}





if( !function_exists('ed_logo_carousel_slider_settings')){
  function ed_logo_carousel_slider_settings($post_type) {
    $types = array('ed_logo');

    if (in_array($post_type, $types)) {
      add_meta_box(
        'ed-logo-carousel-slider-settings',
        'Slider Settings',
        'ed_logo_carousel_slider_settings_callback',
        $post_type,
        'normal',
        'low'
      );
    }
  }
 // add_action('add_meta_boxes', 'ed_logo_carousel_slider_settings');
  function ed_logo_carousel_slider_settings_callback($post){
	   wp_nonce_field( basename(__FILE__), 'ed_logo_carousel_slider_settings_nonce' );
	   	$options = get_option( 'ed_logo_carousel_options' );
	    $meta_slider = maybe_unserialize( get_post_meta($post->ID, 'ed_logo_carousel_slider', true) );
		$auto_play = (isset($meta_slider['auto_play']) && $meta_slider['auto_play']!="")? $meta_slider['auto_play'] : $options['auto_play'];
		$auto_play_speed = (isset($meta_slider['auto_play_speed']) && $meta_slider['auto_play_speed']!="")? $meta_slider['auto_play_speed'] : $options['auto_play_speed'];
		$slide_speed = (isset($meta_slider['slide_speed']) && $meta_slider['slide_speed']!="")? $meta_slider['slide_speed'] : $options['slide_speed'];
		$stop_on_hover = (isset($meta_slider['stop_on_hover']) && $meta_slider['stop_on_hover']!="")? $meta_slider['stop_on_hover'] : $options['stop_on_hover'];
	 	$next_prev_buttons = (isset($meta_slider['next_prev_buttons']) && $meta_slider['next_prev_buttons']!="")? $meta_slider['next_prev_buttons'] : $options['next_prev_buttons'];
	  	$next_prev_position = (isset($meta_slider['next_prev_position']) && $meta_slider['next_prev_position']!="")? $meta_slider['next_prev_position'] : $options['next_prev_position'];
		$pagination = (isset($meta_slider['pagination']) && $meta_slider['pagination']!="")? $meta_slider['pagination'] : $options['pagination'];
		$mouse_drag = (isset($meta_slider['mouse_drag']) && $meta_slider['mouse_drag']!="")? $meta_slider['mouse_drag'] : $options['mouse_drag'];
		$lazy_load = (isset($meta_slider['lazy_load']) && $meta_slider['lazy_load']!="")? $meta_slider['lazy_load'] : $options['lazy_load'];
		$desktop = (isset($meta_slider['desktop']) && $meta_slider['desktop']!="")? $meta_slider['desktop'] : $options['desktop'];
		$mini_desktop = (isset($meta_slider['mini_desktop']) && $meta_slider['mini_desktop']!="")? $meta_slider['mini_desktop'] : $options['mini_desktop'];
		$tablet = (isset($meta_slider['tablet']) && $meta_slider['tablet']!="")? $meta_slider['tablet'] : $options['tablet'];
		$mobile = (isset($meta_slider['mobile']) && $meta_slider['mobile']!="")? $meta_slider['mobile'] : $options['mobile'];
	  ?>
       <table class="form-table ed-table">
      <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Auto Play', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<select id="ed_logo_carousel_slider[auto_play]" name="ed_logo_carousel_slider[auto_play]">
        	<option <?php if($auto_play =='yes'):?> selected="selected" <?php endif;?> value="yes"><?php _e( 'Yes', 'ed_logo' ); ?></option>
            <option <?php if($auto_play =='no'):?> selected="selected" <?php endif;?> value="no"><?php _e( 'No', 'ed_logo' ); ?></option>
        </select>
      </td>
      </tr>
        <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Auto play speed ', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<input id="ed_logo_carousel_slider[auto_play_speed]" name="ed_logo_carousel_slider[auto_play_speed]" value="<?php echo $auto_play_speed;?>" type="number"><span style="font-size:12px; margin-left:25px; font-style:italic; color:#aaa;">milliseconds</span>
      </td>
      </tr>
        <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Slide Speed', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<input id="ed_logo_carousel_slider[slide_speed]" name="ed_logo_carousel_slider[slide_speed]" value="<?php echo $slide_speed;?>" type="number"><span style="font-size:12px; margin-left:25px; font-style:italic; color:#aaa;">milliseconds</span>
      </td>
      </tr>
      
      
      <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Stop on Hover', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<select name="ed_logo_carousel_slider[stop_on_hover]">
        	<option <?php if($stop_on_hover =='yes'):?> selected="selected" <?php endif;?> value="yes"><?php _e( 'Yes', 'ed_logo' ); ?></option>
            <option <?php if($stop_on_hover =='no'):?> selected="selected" <?php endif;?> value="no"><?php _e( 'No', 'ed_logo' ); ?></option>
        </select>
      </td>
      </tr>
      
       <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'next/prev Buttons', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<select name="ed_logo_carousel_slider[next_prev_buttons]">
        	<option <?php if($next_prev_buttons =='yes'):?> selected="selected" <?php endif;?> value="yes"><?php _e( 'Yes', 'ed_logo' ); ?></option>
            <option <?php if($next_prev_buttons =='no'):?> selected="selected" <?php endif;?> value="no"><?php _e( 'No', 'ed_logo' ); ?></option>
        </select>
      </td>
      </tr>
       <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'next/prev position ', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<select name="ed_logo_carousel_slider[next_prev_position]">
        	<option <?php if($next_prev_position =='center'):?> selected="selected" <?php endif;?> value="center"><?php _e( 'Center', 'ed_logo' ); ?></option>
            <option <?php if($next_prev_position =='top_right'):?> selected="selected" <?php endif;?> value="top_right"><?php _e( 'Top Right', 'ed_logo' ); ?></option>
            <option <?php if($next_prev_position =='top_left'):?> selected="selected" <?php endif;?> value="top_left"><?php _e( 'Top Left', 'ed_logo' ); ?></option>
            <option <?php if($next_prev_position =='bottom_left'):?> selected="selected" <?php endif;?> value="bottom_left"><?php _e( 'Bottom Left', 'ed_logo' ); ?></option>
            <option <?php if($next_prev_position =='bottom_right'):?> selected="selected" <?php endif;?> value="bottom_right"><?php _e( 'Bottom Right', 'ed_logo' ); ?></option>
        </select>
      </td>
      </tr>
    
    
     <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Pagination', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<select name="ed_logo_carousel_slider[pagination]">
        	<option <?php if($pagination =='yes'):?> selected="selected" <?php endif;?> value="yes"><?php _e( 'Yes', 'ed_logo' ); ?></option>
            <option <?php if($pagination =='no'):?> selected="selected" <?php endif;?> value="no"><?php _e( 'No', 'ed_logo' ); ?></option>
        </select>
      </td>
      </tr>
      
   	 <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Mouse Drag', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<select name="ed_logo_carousel_slider[mouse_drag]">
        	<option <?php if($mouse_drag =='yes'):?> selected="selected" <?php endif;?> value="yes"><?php _e( 'Yes', 'ed_logo' ); ?></option>
            <option <?php if($mouse_drag =='no'):?> selected="selected" <?php endif;?> value="no"><?php _e( 'No', 'ed_logo' ); ?></option>
        </select>
      </td>
      </tr>
       
       <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Lazy Load', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<select name="ed_logo_carousel_slider[lazy_load]">
        	<option <?php if($lazy_load =='yes'):?> selected="selected" <?php endif;?> value="yes"><?php _e( 'Yes', 'ed_logo' ); ?></option>
            <option <?php if($lazy_load =='no'):?> selected="selected" <?php endif;?> value="no"><?php _e( 'No', 'ed_epg' ); ?></option>
        </select>
      </td>
      </tr>
      
      
      </tr>
        <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Logo items (on Desktop, screen larger than 1198px)', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<input id="ed_logo_carousel_slider[desktop]" name="ed_logo_carousel_slider[desktop]" value="<?php echo $desktop;?>" type="number">
      </td>
      </tr>
      
      </tr>
        <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Logo items (on Desktop, screen larger than 978px)', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<input id="ed_logo_carousel_slider[mini_desktop]" name="ed_logo_carousel_slider[mini_desktop]" value="<?php echo $mini_desktop;?>" type="number">
      </td>
      </tr>
      
       </tr>
        <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Logo items (on Tablet)', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<input id="ed_logo_carousel_slider[tablet]" name="ed_logo_carousel_slider[tablet]" value="<?php echo $tablet;?>" type="number">
      </td>
      </tr>
      
        </tr>
        <tr>
        <th style="width:20%"><label for="sample_text"><?php _e( 'Logo items (on Mobile)', 'ed_logo' ); ?></label>
       </th>
      <td>
      	<input id="ed_logo_carousel_slider[mobile]" name="ed_logo_carousel_slider[mobile]" value="<?php echo $mobile;?>" type="number">
      </td>
      </tr>
      
      
     
      </table>
      <?php
  }
}

if( !function_exists('ed_logo_carousel_slider_meta_save') ){
	  
  function ed_logo_carousel_slider_meta_save($post_id) {
    if (!isset($_POST['ed_logo_carousel_slider_settings_nonce']) || !wp_verify_nonce($_POST['ed_logo_carousel_slider_settings_nonce'], basename(__FILE__))) return;

    if (!current_user_can('edit_post', $post_id)) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(isset($_POST['ed_logo_carousel_slider'])) {
	  
	  $ed_logo_carousel_slider = ed_sanitize_text( $_POST['ed_logo_carousel_slider'] );
      update_post_meta($post_id, 'ed_logo_carousel_slider', maybe_serialize( $ed_logo_carousel_slider ) );
    } else {
      delete_post_meta($post_id, 'ed_logo_carousel_slider');
    }
	
	
  }
  add_action('save_post', 'ed_logo_carousel_slider_meta_save');

}



if( !function_exists('ed_logo_carousel_usage')){
  function ed_logo_carousel_usage($post_type) {
    $types = array('ed_logo');

    if (in_array($post_type, $types)) {
      add_meta_box(
        'ed-logo-carousel-usage',
        'Usage',
        'ed_logo_carousel_usage_callback',
        $post_type,
        'side',
        'low'
      );
    }
  }
  add_action('add_meta_boxes', 'ed_logo_carousel_usage');
  
  function ed_logo_carousel_usage_callback($post){
	  
	  ?>
      
<ul>
    <li rel="tab-1" class="selected">
        <h4>Shortcode</h4>
        <p>Copy &amp; paste the shortcode directly into any WordPress post or page.</p>
        <input type="text" value="[ed-logo id='<?php echo $post->ID;?>']" readonly="readonly" style="text-align:center; width:100%;" size="40px;"  onfocus="this.select();" onmouseup="return false;" />
    </li>
    <li rel="tab-2">
        <h4>Template Include</h4>
        <p>Copy &amp; paste this code into a template file to include the slideshow within your theme.</p>
        <textarea class="full" readonly="readonly" style="width:100%;"  onfocus="this.select();" onmouseup="return false;" >&lt;?php echo do_shortcode("[ed-logo id='<?php echo $post->ID;?>']"); ?&gt;</textarea>
    </li>
</ul>
      
      <?php
	  
  }
}
