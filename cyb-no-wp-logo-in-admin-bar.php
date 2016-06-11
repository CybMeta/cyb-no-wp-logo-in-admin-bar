<?php
/*
Plugin Name:  Cyb No WP Logo in admin bar
Plugin URI:   http://cybmeta.com
Description:  Remove WP logo and link from admin bar and change the text in the footer of admin area
Version:      0.1
Author:       Juan Padial (@CybMeta)
Author URI:   http://cybmeta.com
*/

if( is_admin() ) {
	//Add custom text in admin footer
	add_filter('admin_footer_text', 'cyb_footer_admin_message');
	function cyb_footer_admin_message() {
		echo '<b>Administration of <i>"'.get_bloginfo('name').'"</i> Website</b>. Based on the great <a href="https://wordpress.org/">WordPress platform</a>.';
	}
}

add_action('wp_before_admin_bar_render', 'cyb_no_logo_admin_bar', 0);
function cyb_no_logo_admin_bar() {
	global $wp_admin_bar;
	/* Remove wp logo */
	$wp_admin_bar->remove_menu('wp-logo');
}

?>