add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated) {
$translated = str_ireplace('Product', 'Model', $translated);
$translated = str_ireplace('Products', 'Models', $translated);
$translated = str_ireplace('Product Categories', 'Model Categories', $translated);
$translated = str_ireplace('Coupon', 'Special', $translated);
return $translated;
}