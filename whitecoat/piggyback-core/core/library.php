<?php

class piggyback_lib_setting extends piggyback_config {

		var $_version = '1.0'; 
		var $_location_folder = ''; 
		var $_library_name = 'library'; 
		var $_jquery_dependency = true; 
		var $_meta_reponsive = array ();
		var $_js = array ();
		var $_css = array ();
		var $_php = array ();

		function initialize () {
				$this->setting ();
				
				foreach ( $this->_php as $php ) {
						require_once ( $this->library_path().$php );
				}
		}

		function setting () {
				$this->_version = '1.0'; // library version
				$this->_location_folder = ''; // library folder
				$this->_library_name = 'library'; // library name
				$this->_jquery_dependency = true; // jquery dependency, true or false
				$this->_meta_reponsive = array ( 'content' => '', 'css' => '' ); // meta responsive content can be empty
				$this->_js = array (); // js path
				$this->_css = array (); // css path
				$this->_php = array (); // php path
		}

		function library_url () {
				return $this->get_config ( 'core_url' )."/lib/".$this->_library_name."/".( ( $this->_location_folder ) ? $this->_location_folder."/" : "" );
		}

		function library_path () {
				return PIGGYBACK_CORE."/lib/".$this->_library_name."/".( ( $this->_location_folder ) ? $this->_location_folder."/" : "" );
		}

		function get_version () {
				return $this->_version;
		}

		function get_jquery_dependency () {
				return $this->_jquery_dependency;
		}

		function get_meta_responsive ( $key = "" ) {
				$meta_reponsive['content'] = $this->_meta_reponsive['content'];
				$meta_reponsive['css'] = ( $this->_meta_reponsive['css'] ) ? $this->library_url ().$this->_meta_reponsive['css'] : "";

				if ( $key == "" ){
						return $meta_reponsive;
				} else {
						return $meta_reponsive [ $key ];
				}
		}

		function get_css_responsive () {
				return $this->_css_reponsive;
		}

		function get_js () {
				foreach ( $this->_js as $key => $js ) {
						$_js [] = $this->library_url ().$js;
				}
				return $_js;
		}

		function get_css () {
				foreach ( $this->_css as $key => $css ) {
						$_css [] = $this->library_url ().$css;
				}
				return $_css;
		}
}