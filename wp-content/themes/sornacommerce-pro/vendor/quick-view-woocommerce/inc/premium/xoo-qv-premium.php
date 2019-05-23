<?php

//Exit if accessed directly
if(!defined('ABSPATH')){
	return;
}

?>

<div class="advanced-settings settings-tab" tab-class ="tab-2">
	<div class="xoo-hero-btns">
		<a class="buy-prem button button-primary button-hero" href="http://xootix.com/quickview-demo/">LIVE DEMO</a>
		<a class="live-demo button button-primary button-hero" href="http://xootix.com/product/woocommerce-quick-view-premium/">BUY PREMIUM - 9$</a>
	</div>
	<div class="premium-disabled">
		<h3>Premium Settings</h3>
		<h2>General Options</h2>
			<table class="form-table">
				<tr>
					<th scope="row">Ajax add to cart</th>
					<td>
						<input type="checkbox" id="xoo-qv-premium" disabled checked>
						<label for="xoo-qv-premium">Add items to cart , without refreshing page.</label>
					</td>
				</tr>
				<tr>
					<th scope="row">Show</th>
					<td>
						<div class="xoo-df">
							<input type="checkbox" name="xoo-qv-premium" value="1" disabled checked>
							<span>Images</span>
							<input type="checkbox" name="xoo-qv-premium" value="2" disabled checked>
							<span>Title</span>
							<input type="checkbox" name="xoo-qv-premium" value="3" disabled checked>
							<span>Price</span>
							<input type="checkbox" name="xoo-qv-premium" value="4" disabled checked>
							<span>Description</span>
							<input type="checkbox" name="xoo-qv-premium" value="4" disabled checked>
							<span>Description(TAB)</span>
							<input type="checkbox" name="xoo-qv-premium" value="5" disabled checked>
							<span>Add to Cart</span>
							<input type="checkbox" name="xoo-qv-premium" value="6" disabled checked>
							<span>Rating</span>
						</div>
					</td>
				</tr>

				<tr>
					<th scope="row" style="padding-top: 33px">Quickview Icon</th>
					<td>
						<img src="<?php echo plugins_url('/qv-icons.png',__FILE__); ?>">
					</td>
				</tr>

				<tr>
					<th scope="row">Images Slideshow</th>
					<td>
						<input type="checkbox" id="xoo-qv-premium" disabled checked>
						<label for="xoo-qv-premium">Product images slideshow (Lightbox should be enabled)</label>
					</td>
				</tr>

				<tr>
					<th scope="row">Slideshow Speed</th>
					<td>
						<select disabled>
							<option>Fast</option>
							<option>Normal</option>
							<option>Slow</option>
						</select>
					</td>
				</tr>

				<tr>
					<th scope="row">Number of products</th>
					<td>
						<input type="checkbox" id="xoo-qv-premium" disabled checked>
						<label for="xoo-qv-premium">Shows the curent number of product out of total products.</label>
					</td>
				</tr>
			</table>
			<h2>Style Options</h2>
			<table class="form-table">

				<tr>
					<th scope="row">Quickview Container Background</th>
					<td>
						<input type="text" id="xoo-qv-premium" class='color-field' value="#000000" disabled>
					</td>
				</tr>

				<tr>
					<th scope="row">Container Text Color</th>
					<td>
						<input type="text" id="xoo-qv-premium" class='color-field' value="#ffffff" disabled>
					</td>
				</tr>

				<tr>
					<th scope="row">Container Opacity</th>
					<td>
						<input type="number" id="xoo-qv-premium" disabled>
						<label for="xoo-qv-premium">(Default: 0.8)</label>
					</td>
				</tr>

				<tr>
					<th scope="row">Product Details Button Color</th>
					<td>
						<input type="text" id="xoo-qv-premium" class='color-field' value="#db492b" disabled>
					</td>
				</tr>

				<tr>
					<th scope="row">Product Details Text Color</th>
					<td>
						<input type="text" id="xoo-qv-premium" class='color-field' value="#ffffff" disabled>
					</td>
				</tr>

				<tr>
					<th scope="row">Product Details Padding</th>
					<td>
						<input type="number" id="xoo-qv-premium" disabled>
						<label for="xoo-qv-premium">(Default: 10px 15px 10px 15px) top,right,bottom,left</label>
					</td>
				</tr>

				<tr>
					<th scope="row" style="padding-top: 33px">Select Preloader</th>
					<td>
						<img src="<?php echo plugins_url('/preloaders.png',__FILE__); ?>">
					</td>
				</tr>

				<tr>
					<th scope="row">Preloader Color</th>
					<td>
						<input type="text" id="xoo-qv-premium" class='color-field' value="#db492b" disabled>
					</td>
				</tr>

				<tr>
					<th scope="row">Main Preloader Size</th>
					<td>
						<input type="number" id="xoo-qv-premium" disabled>
						<label for="xoo-qv-premium">Size in px (Default: 25px)</label>
					</td>
				</tr>

				<tr>
					<th scope="row">Secondary Preloader Size</th>
					<td>
						<input type="number" id="xoo-qv-premium" disabled>
						<label for="xoo-qv-premium">Switch Products preloader. Size in px (Default: 25px)</label>
					</td>
				</tr>
			</table>
	</div>
</div>