<?php
/*
Plugin Name: Demo Plugin
Description: This is a very basic plugin to save user info and displays it.
Author: Dhirendra Pratap Singh
Version: 1.0
*/

register_activation_hook( __FILE__, 'my_plugin_create_db' );

function my_plugin_create_db() {

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'user_info';

	$sql = "CREATE TABLE $table_name (
	id mediumint(9) NOT NULL AUTO_INCREMENT,
	name varchar(55) NOT NULL,
	phone int(55) NOT NULL,
	email varchar(55) NOT NULL,
	address varchar(55) NOT NULL,
	time timestamp  NOT NULL,
	UNIQUE KEY id (id)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
}


add_action('wp_footer', 'mp_footer'); 
add_action('admin_menu','admin_menu_actions');

function admin_menu_actions() {
 
}
 




?>