add_shortcode( 'bulk_update_brand_logos', function () {

    $args = array(
        'post_type' => 'product',
		'product_cat' => 'tyco-mattel,tycorc,taiyorc,metrorc,dickietoys',
		'posts_per_page' => -1
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
			
			$brand = get_field('brand',false,false);
			$battery = get_field('battery',false,false);
			
			// BRAND
			if($brand == "Taiyo") {
				update_field('brand_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/taiyo-main-logo-10-150x43.png"/>');
			}

			if($brand == "Tyco") {
				update_field('brand_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/tyco-main-logo-7-150x43.png"/>');
			}

			if($brand == "Metro") {
				update_field('brand_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/metro-main-logo-2-100x40.png"/>');
			}

			if($brand == "Dickie") {
				update_field('brand_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/dickie-toys-main-logo-2-100x62.png"/>');
			}		
			
			if($brand == "Tyco Mattel") {
				update_field('brand_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/tycomattel_main_logo-3-100x62.png"/>');
			}
			
			// BATTERY

			if($battery == "9.6V Pack") {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/9.6vTurboBatteryPack-e1651488776929-100x60.png"/>');
			}

			if($battery == '6.0V Jet Turbo') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/6.0VJetTurbo-e1651488792238-100x60.png"/>');
			}

			if($battery == '8xAA') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/9.6v-Turbo-8xAA-e1651488983618-100x70.png"/>');
			}
					

			if($battery == '6xAA') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/6xAA-100x50.png"/>');
			}	
			
			if($battery == '4xAA') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/4xAAv2-e1651488927737-100x65.png"/>');
			}		
			
			if($battery == '2xAA') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/2xAA-e1651488823372-100x66.png"/>');
			}
	
			if($battery == '3xC+9V') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/3xC9v-100x50.png"/>');
			}

			if($battery == '4xC+9V') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/4xC9V-e1651489000681-100x51.png"/>');
			}

			if($battery == '2xAA+9V') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/2xAA9V-100x50.png"/>');
			}

			if($battery == '3xAA+9V') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/3xAA9V-100x50.png"/>');
			}

			if($battery == '5xC') {
				update_field('battery_logo', '<img src="https://taiyocollectors.com/wp-content/uploads/2022/05/5xC-100x50.png"/>');
			}

            ?> <h2>UPDATED: <?php the_title(); ?> </h2>
            <?php
            }
        }
});