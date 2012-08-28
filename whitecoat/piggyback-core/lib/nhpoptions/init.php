<?php
/**
 * INIT file for nhp-options
 *
 * @version 1.0.6
 * @link https://github.com/leemason/NHP-Theme-Options-Framework/wiki
 * 
 * @package PiggyBack
 * @since version 0.1
 */

class piggyback_nhpoptions extends piggyback_lib_setting { 

    function setting () {
				$this->_version = '1_0_6'; // library version
				$this->_location_folder = '1_0_6'; // library folder
				$this->_library_name = 'nhpoptions'; // library name
				$this->_jquery_dependency = false; // jquery dependency, true or false
		}
}
