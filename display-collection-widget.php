add_shortcode( 'wishlist_or_login', function () {
	if ( is_user_logged_in() ) { 
		echo do_shortcode('[yith_wcwl_add_to_wishlist]'); 
	} else { 
		?> <a href="/wp-login.php" title="Members Area Login" rel="home">Login to start collecting!</a> <?php
	}
});
			  