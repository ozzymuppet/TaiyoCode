add_shortcode( 'display_loggedin_userstats', function () {

	if ( is_user_logged_in() ) {
	global $current_user;
  	wp_get_current_user() ;
  	$currentUser = $current_user->user_login;
	$count_posts = wp_count_posts( $post_type = 'product' );

	if ( $count_posts ) {
		$published_posts = $count_posts->publish;
		?> <p class="userNameBox"> <span class="userName"><?php echo $currentUser ?></span><span class="authorPosts"> ( <?php echo $published_posts ?> )</span> </p> <?php	
		}
		if ( !$count_posts ) {
?> <p class="userNameBox"> <span class="userName"><?php echo $currentUser ?> </span> </p> <?php
		}
			
	}
});