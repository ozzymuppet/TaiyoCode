add_shortcode( 'add_brand_graphic', function () {
	
	$brand = get_field('brand',false,false);
	
	if($brand == "Taiyo") {
		$brand_image = '<img src="https://taiyocollectors.com/wp-content/uploads/2022/04/TaiyoRC_trans4-e1651280516137-300x55.png"/>';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Tyco") {
		$brand_image = '<img src="https://taiyocollectors.com/wp-content/uploads/2022/04/Tyco_logo_sml-150x40.png"/>';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Metro") {
		$brand_image = '<img src="https://taiyocollectors.com/wp-content/uploads/2022/04/METRO-RC-transparent2-e1651280537893-150x29.png"/>';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Dickie") {
		$brand_image = '<img src="https://taiyocollectors.com/wp-content/uploads/2022/04/dickietoys-trans-150x96.png"/>';
		$brand_size = 'spec_icon_battery';
	}
	
	return $brand_image;
} );