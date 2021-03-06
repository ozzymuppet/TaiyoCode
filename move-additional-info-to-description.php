// Remove additional information tab
add_filter( 'woocommerce_product_tabs', function( $tabs ) {
	unset( $tabs['additional_information'] );
	return $tabs;
}, 98 );

// Insert additional information into description tab
add_filter( 'woocommerce_product_tabs', function( $tabs ) {
	$tabs['description']['callback'] = function() {
		global $product;
		wc_get_template( 'single-product/tabs/description.php' );
		if ( $product && ( $product->has_attributes() || apply_filters( 'wc_product_enable_dimensions_display', $product->has_weight() || $product->has_dimensions() ) ) ) {
			wc_get_template( 'single-product/tabs/additional-information.php' );
		}
	};
	return $tabs;
}, 98 );