<?php
/** 囧
 * Config File
 *
 * @package PIGGYBACK
 * @since version 0.1
 */

$piggyback_config = array(
                      'platform'  =>  'wordpress',  // 'normal', 'wordpress', 'codeigniter'
											'core_url' => get_bloginfo('stylesheet_directory'), // Core url location without "/piggyback-core".
											/**
											*		NOTE: If components are jQuery dependent, jQuery will be loaded automatically.
											*/
											'jsload' => 'jquery', // 'none', 'jquery'.
                      'responsive' => true,     // Responsive layout
											'autoload' => array (
                        
                          /** Bootstrap as a css framework. */
                          'bootstrap',
                          
                          /** Isotope is a jQuery plugin */
                          //'isotope',
                          
                          /** jQuery Validation is a jQuery plugin to validate input fields using jQuery. */
                          'jqueryvalidation',
                          
                          /** Flexslider is a jQuery plugin */
                          'flexslider',
                          
                          /** PrettyPhoto is a jQuery plugin */
                          'prettyphoto',
                          
                          /** NHPOptions is a WordPress Theme Option framework. */
                          'nhpoptions',
                          
                          /** WP Alchemy is a WordPress metabox framework.
                           *
                           *  Must do prior autoload:
                           *  1. Create folder 'metaboxes' in theme folder.
                           *  2. Create file call 'functions-metaboxes.php'.
                           *  3. In 'functions-metaboxes.php', include_once the metaboxes files.
                           */
                          'wpalchemy'
                        )
                    );
