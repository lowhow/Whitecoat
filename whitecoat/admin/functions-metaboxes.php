<?php
/**
 *  Main Metaboxes function file.
 *  Use this to inlcude WP Alchemy meta spec files.
 *  
 */
include_once 'metaboxes/magazinestats-spec.php';
include_once 'metaboxes/magazinelogo-spec.php';




/**
 *  Enqueue Scripts and styles intp wordpress admin pages
 */

if (is_admin() && $piggyback->wpalchemy) {
  /**
   * Includes jQuery UI date picker
   */
  wp_enqueue_script('jquery-ui-datepicker');

  
  /**
   * Jquery UI Aristo theme
   *
   * @link https://github.com/taitems/Aristo-jQuery-UI-Theme ''
   * @version taitems-Aristo-jQuery-UI-Theme-c50d9b5 
   */
  wp_enqueue_style('jquery-ui-style-aristo', get_bloginfo('stylesheet_directory').'/piggyback-core/media/taitems-Aristo-jQuery-UI-Theme/css/Aristo/Aristo.css');

  
  /**
   * Includes a fluid grid css and admin css for customisation.
   */
  wp_enqueue_style('fluid-grid960', get_bloginfo('stylesheet_directory').'/admin/css/grid.css');
  wp_enqueue_style('adminui', get_bloginfo('stylesheet_directory').'/admin/css/adminui.css');
  
  
  /**
   * Includes jQuery Validation
   * Also a custom validation js for admin pages.
   * 
   * @version 1.9.0
   * @link http://bassistance.de/jquery-plugins/jquery-plugin-validation/
   *
   * Use this only when jQuery Validation lib is autoloaded in PiggyBack.
   */  
  //global $piggyback_jqueryvalidation;
  //$jqueryvalidation_js = $piggyback_jqueryvalidation->get_js();
  
  //wp_enqueue_script('jquery-validation', $jqueryvalidation_js[0], array('jquery') );
  //wp_enqueue_script('validateform', get_bloginfo('stylesheet_directory').'/admin/js/validateform_custom.js', array('jquery') );
}