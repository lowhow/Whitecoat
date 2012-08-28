<?php
/** 囧
 * Flexslider related Functions and Classes for Wordpress.
 *
 * @author HOW
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 */

 
/**
 * Register & enqueue Flexslider style & script.
 *
 * @param string $fsCss  Name of Flexslider CSS Handle. 
 * @param string $fsJs  Name of Flexslider Script Handle.
 *
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 */
function piggyback_register_flexslider( $fsCss, $fsJs){
  global $piggyback;

  $flexslider_css_all = $piggyback->flexslider->get_css();

  wp_register_style('flexslider', $flexslider_css_all[0], $piggyback->flexslider->_version);
  wp_enqueue_style('flexslider');
  
  $flexslider_js_all = $piggyback->flexslider->get_js();
  
	wp_register_script( 'flexslider', $flexslider_js_all[0], array('jquery'),$piggyback->flexslider->_version,FALSE);
  wp_enqueue_script( 'flexslider' );
}





