add_shortcode( 'display_author', function () {
		$author_id = get_the_author_meta( 'ID' );
		$authorName = get_the_author_meta('display_name', $author_id);
		$authorPostCount = count_user_posts($author_id, $post_type = "product");
		
		$roleColor = 'userLogoBGnormal';
		
		if ($authorPostCount >=5 && $authorPostCount <10) {
		$roleColor = 'userLogoBGbronze';
		}
		
		if ($authorPostCount >=10 && $authorPostCount < 25) {
		$roleColor = 'userLogoBGsilver';
		}
		
		if ($authorPostCount >=25 && $authorPostCount <50) {
		$roleColor = 'userLogoBGgold';
		}
		
		if ($authorPostCount >=50) {
		$roleColor = 'userLogoBGgodmode';
		}		
			?>	
				<span class="authorNameGroup">
				<span class="fa-stack userIconGroup">
				<!-- The icon that will wrap the number -->
				<span class="fa-stack-1x userIcon" style="color: black;">
				<i class="fa fa-car userLogoCircle <?php echo $roleColor ?>"></i>
				</span>
				<!-- a strong element with the custom content, in this case a number -->
				<strong class="fa-stack-1x userSubCountText"><?php echo $authorPostCount ?></strong> </span><span class="authorNameText"> <?php echo $authorName ?></span> </span> </br> 
	 <?php
});