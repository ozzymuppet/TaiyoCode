function patricks_woocommerce_catalog_orderby( $orderby ) {
	unset($orderby["price"]);
	unset($orderby["price-desc"]);
	return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "patricks_woocommerce_catalog_orderby", 20 );