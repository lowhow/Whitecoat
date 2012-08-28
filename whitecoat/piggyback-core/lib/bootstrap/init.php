<?php
/**
 * INIT file for Boostrap
 *
 * @version 2.0.4
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * @author How
 * 
 * @dependencies jQuery
 */

class piggyback_bootstrap extends piggyback_lib_setting { 

  function setting () {
      $this->_version = '2_1_0'; // library version
      $this->_location_folder = '2_1_0'; // library folder
      $this->_library_name = 'bootstrap'; // library name
      $this->_jquery_dependency = true; // jquery dependency, true or false
      $this->_meta_reponsive = array ( 'content' => 'width=device-width, initial-scale=1.0', 'css' => 'css/bootstrap-responsive.min.css' ); // meta responsive content can be empty
      $this->_js = array ( 'js/bootstrap.min.js' ); // js path
      $this->_css = array ( 'css/bootstrap.min.css' ); // css path
  }
    
}

