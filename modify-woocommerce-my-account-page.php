function remove_dashboard_tab($items) {
    unset($items['dashboard']);
    return $items;            
}
add_filter ('woocommerce_account_menu_items', 'remove_dashboard_tab');