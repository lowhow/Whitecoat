<?php
/**
 *  @todo 2012/08/06 - Cleanup comments.
 */

/**
 * INIT file for jQuery Validation
 *
 * @version 1.9.0
 * @link http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * 
 * @dependencies jQuery
 */

class piggyback_jqueryvalidation extends piggyback_lib_setting { 
  
	function setting () {
		$this->_version = '1_9_0'; // library version
		$this->_location_folder = '1_9_0'; // library version
		$this->_library_name = 'jqueryvalidation'; // library name
		$this->_jquery_dependency = true; // jquery dependency, true or false
		$this->_js = array ( 'jquery.validate.min.js' ); // js path
	}
	
}

global $piggyback_jqueryvalidation;
$piggyback_jqueryvalidation = new piggyback_jqueryvalidation;
