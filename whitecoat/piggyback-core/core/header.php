<?php

class piggyback_header extends piggyback_config {

		var $_meta_tag = array();
		var $_title = '';
		var $_js = array();
		var $_css = array();
		var $_jqueryload = false;

    function __construct() {
				parent::__construct();
    }

		function set_meta_tag ( $meta = array() ) {
				$this->_meta_tag[] = $meta;
		}

		function set_meta_responsive ( $data ) {
				if ( $data['css'] && $this->_config ['responsive'] == true ) {
						$this->_meta_tag[] = array(
								'name' => 'viewport',
								'content' => ( $data['content'] == "") ? 'width=device-width' : $data['content']
						);
						$this->set_css ( $data['css'] );
				}
		}

		function set_title ( $title ) {
				$this->_title = $title;
		}

		function set_jquery_dependency ( $jquery_dependency ) {
				if ( $this->_config['jquery'] == true || $jquery_dependency == true ) {
						if ( $this->_jqueryload == false ) {
								require_once ( PIGGYBACK_CORE.'/lib/jquery/init.php' );
								$library = "piggyback_jquery";
								$this->jquery = new $library ();
								$this->set_js ( $this->jquery->get_js() );
								$this->_jqueryload = true;
						}
				}
		}

		function set_js ( $js ) {
				if ( is_array ( $js ) ) {
						foreach ( $js as $val ) {
								$this->_js[] = $val;
						}
				} else {
						if ( $js ) {
								$this->_js[] = $js;
						}
				}
		}

		function set_css ( $css ) {
				if ( is_array ( $css ) ) {
						foreach ( $css as $val ) {
								$this->_css[] = $val;
						}
				} else {
						if ( $css ) {
								$this->_css[] = $css;
						}
				}
		}

		function show() {
				if ($this->_title){
						echo "\t<title>".$this->_title. "</title>\n";
				}
				if ($this->_meta_tag){
						foreach ($this->_meta_tag as $meta_tag){
								echo "\t<meta";
								foreach($meta_tag as $key => $val){
										echo " ".$key."=\"".$val."\"";
								}
								echo " />\n";
						}
				}
				if ( $this->_css ){
						foreach ($this->_css as $css){
								echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"".$css."\" />\n";
						}
				}
				if ( $this->_js ){
						foreach ($this->_js as $js){
								echo "\t<script type=\"text/javascript\" src=\"".$js."\"></script>\n";
						}
				}
		}

}