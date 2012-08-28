<?php
/**
 * INIT file for PrettyPhoto
 *
 * @version 3.1.4
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * @author How
 * 
 * @dependencies jQuery
 */

class piggyback_prettyphoto extends piggyback_lib_setting { 

  function setting () {
      $this->_version = '3_1_4'; // library version
      $this->_location_folder = '3_1_4'; // library folder
      $this->_library_name = 'prettyphoto'; // library name
      $this->_jquery_dependency = true; // jquery dependency, true or false
      $this->_js = array ( 'js/jquery.prettyPhoto.js' ); // js path
      $this->_css = array ( 'css/prettyPhoto.css' ); // css path
  }
    
}

/** Instantiate PrettyPhoto class */
global $piggyback_prettyphoto;
$piggyback_prettyphoto = new piggyback_prettyphoto;
