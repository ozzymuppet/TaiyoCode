/**     
See: http://stackoverflow.com/a/28644134/2078474
 */

 add_shortcode( 'wpse_comments_template', function( $atts = array(), $content = '' )
 {
    if( is_singular() && post_type_supports( get_post_type(), 'comments' ) )
    {
        ob_start();
        comments_template();
        add_filter( 'comments_open',       'wpse_comments_open'   );
        add_filter( 'get_comments_number', 'wpse_comments_number' );
        return ob_get_clean();
    }
    return '';
}, 10, 2 );

function wpse_comments_open( $open )
{
    remove_filter( current_filter(), __FUNCTION__ );
    return false;
}

function wpse_comments_number( $open )
{
    remove_filter( current_filter(), __FUNCTION__ );
    return 0;
}