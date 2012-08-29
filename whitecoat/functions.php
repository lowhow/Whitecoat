<?php
/** 囧
 * PiggyBack standard theme functions and definitions
 *  
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 * 
 */
 
/**
 *  PiggyBack Config File
 *  
 *  Load the autoconfig file that will set some 
 *  constants based on the installation type (plugin or theme)
 */
require_once('piggyback-core/init.php');


global $piggyback;

  
/**
 *  Include Theme's Base function file: functions-base.php
 */
require_once("functions-base.php");


/**
 *  NHP Options INIT
 */
if($piggyback->nhpoptions ){
  /** NHP Options for Super Duper Admin */
  if(file_exists( dirname( __FILE__ ).'/admin/superduperadmin-options.php')){
    global $current_user;
    get_currentuserinfo();
    if(md5($current_user->user_login) === '16cd213bfba78207bbb10ba3d7bcaf43'){
      require_once(dirname( __FILE__ ).'/admin/superduperadmin-options.php');  
    }
  }
  /** NHP Options for Regular Admin */
  if(file_exists( dirname( __FILE__ ).'/admin/theme-options.php')){
    require_once(dirname( __FILE__ ).'/admin/theme-options.php');  
  }
}


/**
 *  WP Alchemy INIT
 */
if($piggyback->wpalchemy && file_exists(dirname(__FILE__).'/admin/functions-metaboxes.php')){
  piggyback_init_wpalchemy();
  require_once( dirname(__FILE__).'/admin/functions-metaboxes.php');
}


/**
 *  Include Theme Specific function file: functions-theme.php
 */
require_once('functions-theme.php');