add_filter( 'woocommerce_variable_sale_price_html', 'businessbloomer_remove_prices', 9999, 2 );
 
add_filter( 'woocommerce_variable_price_html', 'businessbloomer_remove_prices', 9999, 2 );
 
add_filter( 'woocommerce_get_price_html', 'businessbloomer_remove_prices', 9999, 2 );
 
function businessbloomer_remove_prices( $price, $product ) {
   if ( ! is_admin() ) $price = '';
   return $price;
}