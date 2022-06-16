function contributors_author_list_tiny() {
	$authors = get_users(array(
		'role' => 'Contributor',
		'has_published_posts' => array('product'),
		'number' => '-1'
	));

	$author_posts = array();

	foreach ($authors as $user) {
		$name = $user->display_name;
		$contributedProducts = count_user_posts($user->ID, $post_type = "product");
		$author_posts[] = array(
			'subCount' =>  $contributedProducts,
			'userName' => $name
		);
	}
	
	$sortedAuthors = wp_list_sort($author_posts, 'subCount','DESC');
	
	foreach ( $sortedAuthors as $key => $sortedAuthors ) {
		$thisUserPosts = $sortedAuthors->subCount;
		$roleColor = 'userLogoBGnormal';
		
		if ($thisUserPosts >=5 && $thisUserPosts <10) {
		$roleColor = 'userLogoBGbronze';
		}
	
		if ($thisUserPosts >=10 && $thisUserPosts < 25) {
		$roleColor = 'userLogoBGsilver';
		}
		
		if ($thisUserPosts >=25 && $thisUserPosts <50) {
		$roleColor = 'userLogoBGgold';
		}
		
		if ($thisUserPosts >=50) {
		$roleColor = 'userLogoBGgodmode';
		}
		
			?>	
				<span class="userNameGroup">
				<span class="fa-stack userIconGroup">
				<!-- The icon that will wrap the number -->
				<span class="fa-stack-1x userIcon" style="color: black;">
					<i class="fa fa-car userLogoCircle <?php echo $roleColor ?>"></i>
				</span>
				<!-- a strong element with the custom content, in this case a number -->
				<strong class="fa-stack-1x userSubCountText"><?php echo $sortedAuthors['subCount'] ?></strong> </span> <?php echo $sortedAuthors['userName'] ?>  </span>  <?php	
	};
}
add_shortcode( 'show_leaderboard_tiny', function () {
contributors_author_list_tiny();
});


//// Full Feature Contributors Leaderboard 
function contributors_author_list() {
    $contributor_ids = get_users( array(
        'fields'  => 'ID',
        'orderby' => 'post_count',
        'order'   => 'DESC',
        'who'     => 'authors',
    ) );

    foreach ( $contributor_ids as $contributor_id ) :
        $post_count = count_user_posts( $contributor_id, "product" );

        // Move on if user has not published a post (yet).
        if ( ! $post_count ) {
			$post_count = null;
            continue;
        }
    ?>

    <div class="contributor">
        <div class="contributor-info">
            <div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
            <div class="contributor-summary">
                <h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>
                <p class="contributor-bio">
                    <?php echo get_the_author_meta( 'description', $contributor_id ); ?>
                </p>
                <a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
                    <?php printf( _n( '%d Article', '%d Articles', $post_count, 'twentyfourteen' ), $post_count ); ?>
                </a>
            </div><!-- .contributor-summary -->
        </div><!-- .contributor-info -->
    </div><!-- .contributor -->

    <?php
	$post_count = null;
    endforeach;
}
add_shortcode( 'show_leaderboard', function () {
contributors_author_list();
});


// [product_count] shortcode
function product_count_shortcode( ) {
	$count_posts = wp_count_posts( 'product' );
	return $count_posts->publish;
}
add_shortcode( 'product_count', 'product_count_shortcode' );

