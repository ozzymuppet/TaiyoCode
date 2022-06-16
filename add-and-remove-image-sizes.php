// Remove default WC image sizes
function wpdocs_remove_plugin_image_sizes() {
	remove_image_size( '1536x1536' );
	remove_image_size( '2048x2048' );
	remove_image_size( 'Medium_large' );
	add_image_size( 'spec_icon_battery', 100, 70 ); 
	add_image_size( 'spec_icon_brand', 130, 32 ); 
}
add_action('init', 'wpdocs_remove_plugin_image_sizes');