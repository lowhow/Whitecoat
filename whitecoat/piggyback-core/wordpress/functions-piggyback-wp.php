<?php
/** 囧
 * Wordpress function files in PiggyBack.
 *
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 */

/** 
 * Add Favicon Link
 * 
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 */
function favicon_link() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_bloginfo('stylesheet_directory') . '/images/favicon.ico" />' . "\n";
}



/**
 * Add 'active' & 'current' class to current menu item.
 *
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 */
function special_nav_class($classes, $item){
	if(in_array('current-menu-item', $classes)){
		$classes[] = "active";
    $classes[] = "current";
	}
	return $classes;
}



/**
 * Remove Admin Bar in front-end.
 *
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 */
function remove_admin_bar() {
	return false;
}



/**
 * Remove TwentyEleven Theme Options
 *
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 * @link http://wordpress.org/support/topic/overriding-twentyeleven-theme-optionsphp
 */
function ask_twentyeleven_cleanup() {
  remove_action( 'admin_menu', 'twentyeleven_theme_options_add_page' );
}



/**
 * Remove TwentyEleven Header page and Background page in Admin.
 *  
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 * @link http://wordpress.org/support/topic/overriding-twentyeleven-theme-optionsphp (deprecated).
 */
function remove_twentyeleven_options() {
	remove_theme_support( 'custom-background' );
	remove_theme_support( 'custom-header' );
}



/**
 * Remove all Twenty Eleven Default Widgets Area
 * 
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 */
function remove_twentyeleven_all_widgets() {
  remove_filter( 'widgets_init', 'twentyeleven_widgets_init' );
}



