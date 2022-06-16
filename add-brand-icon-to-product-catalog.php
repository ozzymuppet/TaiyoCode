add_action( 'woocommerce_before_shop_loop_item', 'add_brand_badge' );

function add_brand_badge() {
	
$brand = get_field('brand',false,false);
	
	if($brand == "Taiyo") {
		$brand_image = '3855';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Tyco") {
		$brand_image = '3847';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Metro") {
		$brand_image = '3819';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Dickie") {
		$brand_image = '3825';
		$brand_size = 'spec_icon_battery';
	}
	
	if($brand == "Tyco Mattel") {
		$brand_image = '3828';
		$brand_size = 'spec_icon_battery';
	}
	
	?> <div class="brand_badge"> <?php echo wp_get_attachment_image( $brand_image, $brand_size ); ?> </div> <?php 
}

