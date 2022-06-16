add_shortcode( 'product_basics', function () {
	
	$brand = get_field('brand',false,false);
	
	if($brand == "Taiyo") {
		$brand_image = '3855';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Tyco") {
		$brand_image = '3847';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Metro") {
		$brand_image = '3819';
		$brand_size = 'spec_icon_brand';
	}
	
	if($brand == "Dickie") {
		$brand_image = '3825';
		$brand_size = 'spec_icon_battery';
	}
	
	if($brand == "Tyco Mattel") {
		$brand_image = '3828';
		$brand_size = 'spec_icon_battery';
	}
	
	$year = get_field('release_year');
	$model = get_field('manufacturerid');
	$drive = get_field('drive');
	$available_nib = get_field('available_nib');
	$available_used = get_field('available_used');
	$top_speed_kph = get_field('top_speed_kph');
	$top_speed_mph = round($top_speed_kph / 1.60934);
	$price_range = get_field('price_range');
	$scale = get_field('scale',false,false);
	$rating = get_field('rating',false,false);
	$rating_comment = get_field('rating_comment',false,false);
	$battery_size = 'spec_icon_battery';

	if (strlen($rating_comment) < 5) {
		$rating_comment = "Incomplete data - use Comment or Contact us to submit missing info!";
	}
	
	$battery = get_field('battery');
	
	if($battery == "9.6V Pack") {
		$battery_image = '2196';
	}
	
	if($battery == '6.0V Jet Turbo') {
		$battery_image = '2195';
	}
	
	if($battery == '8xAA') {
		$battery_image = '2192';
	}
	
	if($battery == '6xAA') {
		$battery_image = '3861';
	}
	
	if($battery == '5xAA') {
		$battery_image = '3862';
	}
	
	if($battery == '4xAA') {
		$battery_image = '2193';
	}
	
	if($battery == '2xAA') {
		$battery_image = '2194';
	}
	
	if($battery == '3xC+9V') {
		$battery_image = '3858';
	}
	
	if($battery == '4xC+9V') {
		$battery_image = '2199';
	}
	
	if($battery == '2xAA+9V') {
		$battery_image = '2528';
	}
	
	if($battery == '3xAA+9V') {
		$battery_image = '2529';
	}
	
	if($battery == '5xC') {
		$battery_image = '2561';
	}
	
	?>
	
<div class="basics-container">
  <table class="basicspecs">
    <tbody class="basicspecs-body">
      <tr>
        <th style="min-width:135px">BRAND</s></th>
        <th style="min-width:95px">YEAR</th>
        <th style="min-width:105px">MODEL NO.</th>
        <th style="min-width:95px">SPEED</th>
	    <th style="min-width:105px">POWER</th>
		<th class="tohide" style="min-width:95px">DRIVE</th>
        <th class="tohide" style="min-width:135px">AVAILABLE</th>
        <th style="min-width:105px">VALUE</th>
	 	<th style="min-width:95px">RATING</th>
		<th style="min-width:175px">COMMENT</th>
      </tr>
      <tr class="basicspecs-row">
        <td class="basicspecs-brand"> <?php echo wp_get_attachment_image( $brand_image, $brand_size ); ?> </td>
        <td class="basicspecs-year"> <?php echo $year  ?>   </td>
		<td class="basicspecs-scale"> <?php echo $model  ?>   </td>
		<td class="basicspecs-speed"> <b><?php echo $top_speed_kph ?></b><small>km/h</small><br><b><?php echo $top_speed_mph ?></b><small>mph</small> </td>
		<td class="basicspecs-battery"> <?php echo wp_get_attachment_image( $battery_image, $battery_size ); ?> </td>
		<td class="basicspecs-drive tohide"> <?php echo $drive  ?>   </td>  
		<td class="basicspecs-availability tohide"> <div class="availability-block smaller-text"> Used: <div class="availability-usedNIB"><?php echo $available_used ?> </div><br><div class="availability-block smaller-text">NIB:</div> <div class="availability-usedNIB"><?php echo $available_nib ?> </div> </div></td>
        <td class="basicspecs-price"> <?php echo $price_range ?><br> <div class="smallest-text">($-$$$$)</div> </td>
  		<td class="basicspecs-rating"> <?php echo $rating ?><div class="availability-block smallest-text">/100</div> </td>
		<td class="basicspecs-comment"><small> <i> <?php echo $rating_comment ?></i> </small></td>
      </tr>
    </tbody>
  </table>
</div>
<?php
	$brand_image = '';
	$battery_image = '';	
} );