add_shortcode( 'product_specifications', function () {
	
	$features = get_field('features');	
	$colors = get_field('colors');	
	$drive = get_field('drive',false,false);
	$madein = get_field('madein',false,false);
	$differential = get_field('differential',false,false);
	$gearbox = get_field('gearbox',false,false);
	$motor = get_field('motor',false,false);
	$scale = get_field('scale',false,false);
	$steering = get_field('steering',false,false);
	$suspension = get_field('suspension',false,false);
	$vehicle_type = get_field('vehicle_type',false,false);
	
	?>
  <table class="specs-table">
  <thead class="specs-header">
    <tr class="specs-tr">
     <!-- <th class="specs-th" colspan="4">ALL SPECIFICATIONS</th> -->

    </tr>
  </thead>
  <tbody class="specs-body">
	  
	  <tr class="specs-tr">
      <td class="specs-td specs-title"><strong>Variants</strong></td>
      <td class="specs-td"><?php echo $colors  ?></td>
	  </tr>
	  <tr class="specs-tr">
	  <td class="specs-td specs-title"><strong>Vehicle Type</strong></td>
      <td class="specs-td"><?php echo $vehicle_type  ?></td>
    </tr>
    <tr class="specs-tr">
      <td class="specs-td specs-title"><strong>Drive</strong></td>
      <td class="specs-td"><?php echo $drive  ?></td>
	</tr>
	  <tr class="specs-tr">	
      <td class="specs-td specs-title"><strong>Scale</strong></td>
      <td class="specs-td"><?php echo $scale  ?></td>

    	</tr>
		<tr class="specs-tr">
      <td class="specs-td specs-title"><strong>Manufactured</strong></td>
      <td class="specs-td"><?php echo $madein  ?></td>
	  </tr>
	  <tr class="specs-tr">
      <td class="specs-td specs-title"><strong>Steering</strong></td>
      <td class="specs-td"><?php echo $steering  ?></td>
  
    </tr>
    <tr class="specs-tr">
      <td class="specs-td specs-title"><strong>Differential</strong></td>
      <td class="specs-td"><?php echo $differential  ?></td>
	</tr>
	  <tr class="specs-tr">	
      <td class="specs-td specs-title"><strong>Suspension</strong></td>
      <td class="specs-td"><?php echo $suspension  ?></td>
    </tr>
    <tr class="specs-tr">
      <td class="specs-td specs-title"><strong>GearBox</strong></td>
      <td class="specs-td"><?php echo $gearbox  ?></td>
	</tr>
	  <tr class="specs-tr">	
      <td class="specs-td specs-title"><strong>Motor</strong></td>
      <td class="specs-td"><?php echo $motor  ?></td>
    </tr>					
	  <tr class="specs-tr">  			
      <td class="specs-td specs-title"><strong>Features</strong></td>
      <td colspan="3" class="specs-td"><?php echo $features  ?></td>
	  </tr>
  </tbody>
</table>
<?php
} );