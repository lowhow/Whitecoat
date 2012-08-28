<?php
/**
 *  @todo 2012/08/06 - Cleanup comments.
 */

 
/**
 * Include all mandatory WP Alchemy files
 * 
 * Note that we will not be using WP Alchemy's default setup.php and
 * the sample functions.php. However we do want to preserve the folder
 * structure for future version upgrade.
 *
 * @package PiggyBack
 * @since version 0.1
 *
 */

/**
 *  Originally from metaboxes/setup.php
 */
function piggyback_init_wpalchemy(){
  global $piggyback;
  
  include_once $piggyback->wpalchemy->library_path().'wp-content/wpalchemy/MetaBox.php';
  include_once $piggyback->wpalchemy->library_path().'wp-content/wpalchemy/MediaAccess.php';
  
  /** 
   *  global styles for the meta boxes
   */
  if (is_admin()) wp_enqueue_style('wpalchemy-metabox', $piggyback->wpalchemy->library_url().'wp-content/themes/mytheme/metaboxes/meta.css');
  
  global $wpalchemy_media_access;
  $wpalchemy_media_access = new WPAlchemy_MediaAccess();

}
