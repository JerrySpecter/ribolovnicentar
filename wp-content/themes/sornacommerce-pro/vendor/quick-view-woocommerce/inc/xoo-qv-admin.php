<?php
/**
 ========================
      ADMIN SETTINGS
 ========================
 */

//Exit if accessed directly
if(!defined('ABSPATH')){
	return;
}



//Button text
$xoo_qv_button_text_value = sanitize_text_field(get_option('xoo-qv-button-text', __('Quick View','xoo-qv-domain')));
function xoo_qv_button_text_cb(){
	global $xoo_qv_button_text_value;
	$html = '<input type="text" class="xoo-qv-input" name="xoo-qv-button-text" value="'.$xoo_qv_button_text_value.'">';
	$html .= '<label for = "xoo-qv-button-text">'.__('Label for quick view button.','xoo-qv-domain').'</label>';
	echo $html;
}

//Font size
$xoo_qv_button_fsize_value = sanitize_text_field(get_option('xoo-qv-button-fsize',14));
function xoo_qv_button_fsize_cb(){
	global $xoo_qv_button_fsize_value;
	$html =  '<input type="number" class="xoo-qv-input" name="xoo-qv-button-fsize" value="'.$xoo_qv_button_fsize_value.'">';
	$html .= '<label for ="xoo-qv-button-fsize">'.__('Quick View button & icon font size.','xoo-qv-domain').'</label>';
	$html .= '<p class="description">'.__('Size in px (For eg: 13 , 14 , 20)','xoo-qv-domain').'</p>';
	echo $html;
}


//Button Position
$xoo_qv_button_position_value = sanitize_text_field(
									get_option('xoo-qv-button-position','
												woocommerce_before_shop_loop_item_title'));
function xoo_qv_button_position_cb(){
	global $xoo_qv_button_position_value;
	?>
	<select name="xoo-qv-button-position" class="xoo-qv-input">

		<?php $after_image = 'woocommerce_before_shop_loop_item_title'; ?>
		<option value="<?php echo $after_image ?>" <?php selected($xoo_qv_button_position_value,$after_image); ?> ><?php _e('After product image','xoo-qv-domain'); ?></option>

		<?php $after_title = 'woocommerce_shop_loop_item_title'; ?>
		<option value="<?php echo $after_title ?>" <?php selected($xoo_qv_button_position_value,$after_title); ?>><?php _e('After product title','xoo-qv-domain'); ?></option>

		<?php $after_price = 'woocommerce_after_shop_loop_item_title'; ?>
		<option value="<?php echo $after_price ?>" <?php selected($xoo_qv_button_position_value,$after_price); ?>><?php _e('After product price','xoo-qv-domain'); ?></option>

		<?php $after_cart = 'woocommerce_after_shop_loop_item'; ?>
		<option value="<?php echo $after_cart ?>" <?php selected($xoo_qv_button_position_value,$after_cart); ?>><?php _e('After product cart button','xoo-qv-domain'); ?></option>

		<?php $image_hover = 'image_hover'; ?>
		<option value="<?php echo $image_hover ?>" <?php selected($xoo_qv_button_position_value,$image_hover); ?>><?php _e('On Image hover','xoo-qv-domain'); ?></option>

	</select>
	<label for = "xoo-qv-button-position"><?php _e('Position of quick view button on archive.','xoo-qv-domain'); ?></label>
	<p class="description imgh-alert">Image hover may not work properly with some themes.</p>

	<?php
}

//Button Background Color
$xoo_qv_btn_bgc_value = sanitize_text_field(get_option('xoo-qv-btn-bgc','inherit'));
function xoo_qv_btn_bgc_cb(){
	global $xoo_qv_btn_bgc_value;
	$html = '<input type="text" class="color-field" name="xoo-qv-btn-bgc" value="'.$xoo_qv_btn_bgc_value.'" >';
	echo $html;
}

//Button Color
$xoo_qv_button_color_value = sanitize_text_field(get_option('xoo-qv-button-color','inherit'));
function xoo_qv_button_color_cb(){
	global $xoo_qv_button_color_value;
	$html = '<input type="text" class="color-field" name="xoo-qv-button-color" value="'.$xoo_qv_button_color_value.'" >';
	echo $html;
}

//Button Padding
$xoo_qv_btn_ps_value = sanitize_text_field(get_option('xoo-qv-btn-ps','6px 8px'));
function xoo_qv_btn_ps_cb(){
	global $xoo_qv_btn_ps_value;
	$html = '<input type="text" name="xoo-qv-btn-ps" value="'.$xoo_qv_btn_ps_value.'" >';
	$html .= '<label>'.__('top-bottom , left-right (Default: 6px 8px)','xoo-qv-domain').'</label>';
	echo $html;
}

//Border Size
$xoo_qv_btn_bs_value = sanitize_text_field(get_option('xoo-qv-btn-bs','1'));
function xoo_qv_btn_bs_cb(){
	global $xoo_qv_btn_bs_value;
	$html  = '<input type="number" name="xoo-qv-btn-bs" value="'.$xoo_qv_btn_bs_value.'" >';
	$html .= '<label>'.__('Size in px (Default: 1)','xoo-qv-domain').'</label>';
	echo $html;
}


//Border Color
$xoo_qv_btn_bc_value = sanitize_text_field(get_option('xoo-qv-btn-bc','#000000'));
function xoo_qv_btn_bc_cb(){
	global $xoo_qv_btn_bc_value;
	$html = '<input type="text" class="color-field" name="xoo-qv-btn-bc" value="'.$xoo_qv_btn_bc_value.'" >';
	echo $html;
}


//Button icon
$xoo_qv_btn_icon_value = sanitize_text_field(get_option('xoo-qv-btn-icon','true'));
function xoo_qv_btn_icon_cb(){
	global $xoo_qv_btn_icon_value;
	$html  = '<input type="checkbox" name="xoo-qv-btn-icon" id ="xoo-qv-btn-icon" value="true"'.checked('true',$xoo_qv_btn_icon_value,false).'>';
	$html .= '<label for="xoo-qv-btn-icon">'.__('Enable Quick view Button icon.','xoo-qv-domain').'</label>';
	echo $html;
}

//Button icon color
$xoo_qv_btn_iconc_value = sanitize_text_field(get_option('xoo-qv-btn-iconc','inherit'));
function xoo_qv_btn_iconc_cb(){
	global $xoo_qv_btn_iconc_value;
	$html = '<input type="text" class="color-field" name="xoo-qv-btn-iconc" value="'.$xoo_qv_btn_iconc_value.'" >';
	echo $html;
}


//Enable on mobile device
$xoo_qv_gl_mobile_value = sanitize_text_field(get_option('xoo-qv-gl-mobile','true'));
function xoo_qv_gl_mobile_cb(){
	global $xoo_qv_gl_mobile_value;
	$html  = '<input type="checkbox" name="xoo-qv-gl-mobile" id ="xoo-qv-gl-mobile" value="true"'.checked('true',$xoo_qv_gl_mobile_value,false).'>';
	$html .= '<label for="xoo-qv-gl-mobile">'.__('Enable Quick view on mobile devices.','xoo-qv-domain').'</label>';
	echo $html;
}

//Modal Animation
$xoo_qv_gl_anim_value = sanitize_text_field(get_option('xoo-qv-gl-anim','linear'));
function xoo_qv_gl_anim_cb(){
	global $xoo_qv_gl_anim_value;
	?>
	<select name="xoo-qv-gl-anim" class="xoo-qv-input">
		<option value="none" <?php selected($xoo_qv_gl_anim_value,'none'); ?> ><?php _e('None','xoo-qv-domain'); ?></option>
		<option value="linear" <?php selected($xoo_qv_gl_anim_value,'linear'); ?> >Linear</option>
		<option value="fade-in" <?php selected($xoo_qv_gl_anim_value,'fade-in'); ?> >Fade-In</option>
		<option value="bounce-in" disabled>Bounce-In (Premium)</option>
	</select>
	<?php
	echo '<label for="xoo-qv-gl-anim">'.__('Quick View Modal (Box) Animation.','xoo-qv-domain').'</label>';
}

//Product info button
$xoo_qv_gl_pbutton_value = sanitize_text_field(get_option('xoo-qv-gl-pbutton','true'));
function xoo_qv_gl_pbutton_cb(){
	global $xoo_qv_gl_pbutton_value;
	$html = '<input type="checkbox" id="xoo-qv-gl-pbutton" value="true" name="xoo-qv-gl-pbutton" '.checked('true',$xoo_qv_gl_pbutton_value,false).'>';
	$html .= '<label for="xoo-qv-gl-pbutton">'.__('Link to the current product','xoo-qv-domain').'</label>';
	echo $html;
}

//Product info button text
$xoo_qv_gl_pbutton_text_value = sanitize_text_field(get_option('xoo-qv-gl-pbutton-text',__('Product Details','xoo-qv-domain')));
function xoo_qv_gl_pbutton_text_cb(){
	global $xoo_qv_gl_pbutton_text_value;
	$html = '<input type="text" name="xoo-qv-gl-pbutton-text"  value="'.$xoo_qv_gl_pbutton_text_value.'">';
	$html .= '<label for="xoo-qv-gl-pbutton-text">'.__('Label for product link button.','xoo-qv-domain').'</label>';
	echo $html;
}

//Product Images Area
$xoo_qv_lb_img_area_value = intval(get_option('xoo-qv-lb-img-area','40'));
function xoo_qv_lb_img_area_cb(){
	global $xoo_qv_lb_img_area_value;
	$html =  '<input type="number" class="xoo-qv-input" name="xoo-qv-lb-img-area" value="'.$xoo_qv_lb_img_area_value.'">';
	$html .= '<label for ="xoo-qv-lb-img-area">'.__('Area covered by images.','xoo-qv-domain').'</label>';
	$html .= '<p class="description">'.__('Default: 40 (Value is in percentage.)','xoo-qv-domain').'</p>';
	echo $html;
}

//Product Images Width
$xoo_qv_lb_img_width_value = intval(get_option('xoo-qv-lb-img-width','100'));
function xoo_qv_lb_img_width_cb(){
	global $xoo_qv_lb_img_width_value;
	$html =  '<input type="number" class="xoo-qv-input" name="xoo-qv-lb-img-width" value="'.$xoo_qv_lb_img_width_value.'">';
	$html .= '<label for ="xoo-qv-lb-img-width">'.__('Width of woocommerce product images.','xoo-qv-domain').'</label>';
	$html .= '<p class="description">'.__('Default: 100 (Value is in percentage.)','xoo-qv-domain').'</p>';
	echo $html;
}


//Enable Gallery
$xoo_qv_lb_en_gallery_value = sanitize_text_field(get_option('xoo-qv-lb-en-gallery','true'));
function xoo_qv_lb_en_gallery_cb(){
	global $xoo_qv_lb_en_gallery_value;
	$html  = '<input type="checkbox" id="xoo-qv-lb-en-gallery" name="xoo-qv-lb-en-gallery" value="true" '.checked('true',$xoo_qv_lb_en_gallery_value,false).'>';
	$html .= '<label for = "xoo-qv-lb-en-gallery">'.__('Enable Gallery Images.','xoo-qv-domain').'</label>';
	echo $html;
}

//Lightbox Enable
$xoo_qv_lb_enable_value = sanitize_text_field(get_option('xoo-qv-lb-enable','true'));
function xoo_qv_lb_enable_cb(){
	global $xoo_qv_lb_enable_value;
	$html  = '<input type="checkbox" id="xoo-qv-lb-enable" name="xoo-qv-lb-enable" value="true" '.checked('true',$xoo_qv_lb_enable_value,false).'>';
	$html .= '<label for = "xoo-qv-lb-enable">'.__('Product Images will open in lightbox.','xoo-qv-domain').'</label>';
	echo $html;
}

//Lightbox Image title
$xoo_qv_lb_title_value = sanitize_text_field(get_option('xoo-qv-lb-title','true'));
function xoo_qv_lb_title_cb (){
	global $xoo_qv_lb_title_value;

	$html = '<input type="checkbox" name="xoo-qv-lb-title" id="xoo-qv-lb-title" value="true"'.checked('true',$xoo_qv_lb_title_value,false).'>';
	$html .= '<label for = "xoo-qv-lb-title">'.__('Show image title.','xoo-qv-domain').'</label>';
	echo $html;
}


?>