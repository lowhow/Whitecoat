<?php
/**
 * INIT file for WP Alchemy
 *
 * @version 1.5.0
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * @author How
 * 
 * @dependencies jQuery
 */

class piggyback_wpalchemy extends piggyback_lib_setting { 

  function setting () {
    $this->_version = '1_5_0'; // library version
    $this->_location_folder = '1_5_0'; // library folder
    $this->_library_name = 'wpalchemy'; // library name
    $this->_jquery_dependency = true; // jquery dependency, true or false
  }
}

/** Instantiate Bootstrap class */
//global $piggyback_wpalchemy;
//$piggyback_wpalchemy = new piggyback_wpalchemy;

