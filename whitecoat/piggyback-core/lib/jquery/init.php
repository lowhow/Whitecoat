<?php
/**
 * INIT file for JQuery
 *
 * @version 1.7.2
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * 
 */

class piggyback_jquery extends piggyback_lib_setting { 

    function setting () {
				$this->_version = '1.7.2'; // library version
				$this->_location_folder = ''; // library version
				$this->_library_name = 'jquery'; // library name
				$this->_jquery_dependency = true; // jquery dependency, true or false
				$this->_js = array ( 'jquery-1.7.2.min.js' ); // js path
		}
}