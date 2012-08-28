<?php
/**
 * INIT file for Isotope
 *
 * @version 2.0.4
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * 
 * @dependencies jQuery
 */

class piggyback_isotope extends piggyback_lib_setting { 

    function setting () {
				$this->_version = '2_0_4'; // library version
				$this->_location_folder = ''; // library version
				$this->_library_name = 'isotope'; // library name
				$this->_jquery_dependency = true; // jquery dependency, true or false
				$this->_js = array ( 'jquery.isotope.min.js' ); // js path
		}
}