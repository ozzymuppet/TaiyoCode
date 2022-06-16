// ADDING A CUSTOM COLUMN TITLE TO ADMIN PRODUCTS LIST
add_filter( 'manage_edit-product_columns', 'custom_product_column',11);
function custom_product_column($columns)
{
	$new_columns = array();
    foreach( $columns as $key => $column ){
        $new_columns[$key] =  $columns[$key];
        if( $key === 'name' )
            $new_columns['manufacturerid'] = __( 'Model#','woocommerce');
    }
    return $new_columns;
	
}

// ADDING THE DATA FOR EACH PRODUCTS BY COLUMN (EXAMPLE)
add_action( 'manage_product_posts_custom_column' , 'custom_product_list_column_content', 10, 2 );
function custom_product_list_column_content( $column, $product_id )
{
    global $post;

    // HERE get the data from your custom field (set the correct meta key below)
    $delivery_time = get_post_meta( $product_id, 'manufacturerid', true );

    switch ( $column )
    {
        case 'manufacturerid' :
            echo $delivery_time; // display the data
            break;
    }
}