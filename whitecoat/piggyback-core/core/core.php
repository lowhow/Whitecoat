<?php
/**
 * Basic Core file for PHP
 *
 * @version 1.0
 * 
 * @package PIGGYBACK
 * @since version 0.1
 */

class piggyback_core {

		function __construct () {
				$this->header = new piggyback_header;
				$this->auto_load();
    }
		
		function auto_load () {
				/** initial the auto loading library file */
				foreach ( $this->header->get_config ( 'autoload' ) as $autoload ){
						require_once ( PIGGYBACK_CORE."/lib/".$autoload."/init.php" );
						$library = "piggyback_".$autoload;
						$this->$autoload = new $library ();
						$this->header->set_jquery_dependency ( $this->$autoload->get_jquery_dependency() );
						$this->header->set_js ( $this->$autoload->get_js() );
						$this->header->set_css ( $this->$autoload->get_css() );
						$this->header->set_meta_responsive ( $this->$autoload->get_meta_responsive() );
						
						if ( is_file ( PIGGYBACK_CORE."/".$this->header->get_config( 'platform' )."/functions-".$autoload.".php" ) ) {
								require_once ( PIGGYBACK_CORE."/".$this->header->get_config( 'platform' )."/functions-".$autoload.".php" );							
						}
				}
				
				/* include the platform file */
				require_once ( PIGGYBACK_CORE."/".$this->header->get_config( 'platform' )."/init.php" ); // load plateform
		}

		function debug () {
				echo "Library loaded : <br />";
				foreach ( $this as $obj ) {
						echo str_replace ( "piggyback_", "", get_class ( $obj ) )."<br />";
				}
		}
}