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
		6);
}
function admin_index(){
	require_once plugin_dir_path(__FILE__) . 'admin.php';
}

$plugin;
function __construct(){
	$plugin = plugin_basename(__FILE__);
}

add_action( 'admin_menu', 'mpp_Add_My_Admin_Link' );






function register_thing(){

	$args = array(
		'type'				=> 'string',
		'sanitize_callback'	=> 'sanitize_text_field',
		'default'			=> NULL,
	);

	register_setting('plugin_slug', 'plugin_field_1', $args);

	add_settings_field(
		'plugin_field_1',
		esc_html__('Field 1', 'default'),
		'plugin_field_callback',
		'plugin_slug'
	);
}
add_action('admin_init', 'register_thing');


function plugin_field_callback(){

	echo '<input type="text" name="plugin_field_1 />';
}


function save_custom_fields(){
	$value = $_POST['plugin_field_1'];

	global $wpdb;
	$wpdb->insert(
		$wpdb->prefix.'test_test',
		[
			'ID' => '10',
			'title' => 'plugin_test_1',
			'num' => '2',
		]		
	);
}
add_action('admin_init', 'save_custom_fields');
