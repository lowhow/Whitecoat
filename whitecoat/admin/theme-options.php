<?php
/*
 * 
 * Require the framework class before doing anything else, so we can use the defined urls and dirs
 * Also if running on windows you may have url problems, which can be fixed by defining the framework url first
 *
 */
global $piggyback;
//define('NHP_OPTIONS_URL', site_url('path the options folder'));
if(!class_exists('NHP_Options')){
	require_once( $piggyback->nhpoptions->library_path() . '/options/options.php' );
}

/*
 * This is the meat of creating the optons page
 *
 * Override some of the default values, uncomment the args and change the values
 * - no $args are required, but there there to be over ridden if needed.
 *
 *
 */


function setup_piggyback_framework_options(){
$args = array();

//Set it to dev mode to view the class settings/info in the form - default is false
$args['dev_mode'] = FALSE;


//Choose to disable the import/export feature
$args['show_import_export'] = false;

$args['opt_name'] = 'whitecoat';

//Custom menu title for options page - default is "Options"
$args['menu_title'] = __('Theme Options', 'nhp-opts');

//Custom Page Title for options page - default is "Options"
$args['page_title'] = __(wp_get_theme().' Theme Options', 'nhp-opts');

//Custom page slug for options page (wp-admin/themes.php?page=***) - default is "nhp_theme_options"
$args['page_slug'] = $childtheme_name.'_nhp_theme_options';

//custom page location - default 100 - must be unique or will override other items
$args['page_position'] = 27;


$sections = array();
				
				
				
	$tabs = array();
			
	global $white_Options;
	$white_Options = new NHP_Options($sections, $args, $tabs);

}//function
add_action('init', 'setup_piggyback_framework_options', 0);
