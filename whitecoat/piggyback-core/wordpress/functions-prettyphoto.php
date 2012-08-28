<?php
/** 囧
 * PrettyPhoto related Functions and Classes for Wordpress.
 *
 * @author IVAN, HOW
 * @package PiggyBack
 * @since version 0.5
 * @version 0.8beta
 */


/**
 * Initiate Scripts in Theme
 *
 * @param string $fsCss  Name of Flexslider CSS Handle. 
 * @param string $fsJs  Name of Flexslider Script Handle.
 * 
 * @package PiggyBack
 * @since version 0.5
 * @version 1
 * 
 */
function piggyback_register_prettyphoto($ppCss, $ppJs) {
  global $piggyback;

  $prettyphoto_css_all = $piggyback->prettyphoto->get_css();

  wp_register_style($ppCss, $prettyphoto_css_all[0]);
  wp_enqueue_style( $ppCss);

  $prettyphoto_js_all = $piggyback->prettyphoto->get_js();

	wp_register_script( $ppJs, $prettyphoto_js_all[0], array('jquery'),$piggyback->prettyphoto->_version,TRUE);
  wp_enqueue_script($ppJs);
}
	