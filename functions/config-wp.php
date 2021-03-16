<?php

add_theme_support( 'title-tag' );

/*
// Disable theme/plugin installation and updates for non-Kalamuna users
// Massage menu and plugin list for non-Kalamuna users

$current_user = wp_get_current_user();
if (strpos($current_user->user_login, 'kalamuna-') === 0 || stripos(strrev($current_user->user_login), strrev('-admin')) === 0) {

} else {

	// Remove ACF Menu Item
	add_filter( 'acf/settings/show_admin', '__return_false' );

	// Remove Other Menu Items
	add_action( 'admin_menu', 'kalapress_hide_menus' );

	// Hide Plugins
	add_action( 'pre_current_active_plugins', 'kalapress_hide_plugins' );

}

function kalapress_hide_menus() {
	remove_submenu_page( 'tools.php', 'wp-migrate-db-pro' );
	remove_submenu_page( 'options-general.php', 'wprocket' );
	remove_submenu_page( 'options-general.php', 'nested-pages-settings' );
}

function kalapress_hide_plugins() {
	global $wp_list_table;
	$hidearr = array(
		'advanced-custom-fields-pro/acf.php',
		'wp-migrate-db-pro/wp-migrate-db-pro.php',
		'wp-nested-pages/nestedpages.php'
	);
	$myplugins = $wp_list_table->items;
	foreach ($myplugins as $key => $val) {
		if (in_array($key,$hidearr)) {
			unset($wp_list_table->items[$key]);
		}
	}

}
*/

