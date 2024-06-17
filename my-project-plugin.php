<?php

/**
 * Plugin Name: MY PLUGIN TEST
 * Description: This is a test plugin to see what I can do
 */

 // Include mpp-functions.php, use require_once to stop the script if mpp-functions.php is not found
require_once plugin_dir_path(__FILE__) . 'includes/mpp-functions.php';

//create database
function database_creation(){
	global $wpdb;
	$test_table = $wpdb->prefix.'test_test';
	$charset = $wpdb->get_charset_collate();
	
	$testtestest = "CREATE TABLE ".$test_table."(
		ID		int		NOT NULL,
		title	text,
		num		int,
		PRIMARY KEY (ID)
	) $charset;";
	
	require_once(ABSPATH.'wp-admin/includes/upgrade.php');
	
	dbDelta($testtestest);
}

register_activation_hook(__FILE__, 'database_creation');


