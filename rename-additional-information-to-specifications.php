/** 
 * Change the heading on the Additional Information tab section title for single products.
 */
add_filter( 'woocommerce_product_additional_information_heading', 'isa_additional_info_heading' );
 
function isa_additional_info_heading() {
    return 'Specifications';
}