<?php
// Add my new menu to the Admin Control Panel
// 
// Hook the 'admin_menu' action hook, run the function named 'mpp_Add_My_Admin_Link()'
// Add a new top level menu link to the ACP
function mpp_Add_My_Admin_Link(){
      add_menu_page(
        'My First Page', // Title of the page
        'My First Plugin', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'plugin_slug', // The 'slug' - file to display when clicking the link
		'admin_index',
		'dashicons-admin-page',
		110);
}
function admin_index(){
	require_once plugin_dir_path(__FILE__) . 'admin.php';
}

$plugin;
function __construct(){
	$plugin = plugin_basename(__FILE__);
}

add_action( 'admin_menu', 'mpp_Add_My_Admin_Link' );

add_filter( "plugin_action_links_$plugin", 'settings_link');

function settings_link($links){
	#settings_link = '<a href ="options-general.php?page=plugin_slug>Settings</a>;
	array_push( $links, $settings_link );
	return $links;
}

