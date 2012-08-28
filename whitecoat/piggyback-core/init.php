<?php
/**
 * init.php 
 *
 * @package PIGGYBACK
 * @since version 0.1
 */

/** PIGGYBACK Theme server path */
define ( 'PIGGYBACK_CORE', dirname ( dirname ( __FILE__ ) ).'/piggyback-core' );

require_once ( PIGGYBACK_CORE.'/../piggyback-config.php' );

/**
 *  System autoload. Whether you like it or not.
 */

/** SYSTEM CORE */
require_once ( PIGGYBACK_CORE.'/core/init.php' );


/**
 * Defining Media folder URL
 * 
 * @author HOW
 * @since version 0.5
 */
define ( 'PIGGYBACK_MEDIA_URL', $piggyback_config['core_url'] . '/media' );
