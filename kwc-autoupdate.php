<?php
/*
Plugin Name: Auto Update Everything
Plugin URI: http://www.kindredwebconsuting.com 
Description: Auto Updates Core, Plugins, Themes and Cancels the email that sends
Version: 0.1
Author: Chris Kindred
Author URI: http://www.kindredwebconsulting.com
License: GPL2
*/

add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_core_update_send_email', '__return_true' );

add_filter( 'auto_update_core', '__return_true' );
add_filter( 'allow_minor_auto_core_updates', '__return_true' );
add_filter( 'allow_major_auto_core_updates', '__return_true' );

add_filter( 'auto_update_translation', '__return_true' );