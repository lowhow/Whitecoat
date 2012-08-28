<?php
/**
 *  @todo 2012/08/06 - Cleanup comments.
 */

/**
 * INIT file for FlexSlider
 *
 * @version 2.0.0
 * @link http://www.woothemes.com/flexslider/
 * 
 * @package PIGGYBACK
 * @since version 0.1
 * 
 * @dependencies jQuery
 */

class piggyback_flexslider extends piggyback_lib_setting { 
  
    public $flexslider2HTML = ''; // Flexslider 
    public $flexslider2scriptHTML = ''; // Flexslider javascript for setup.

    function setting () {
				$this->_version = '2_0_0'; // library version
				$this->_location_folder = '2_0_0'; // library version
				$this->_library_name = 'flexslider'; // library name
				$this->_jquery_dependency = true; // jquery dependency, true or false
				$this->_js = array ( 'jquery.flexslider-min.js' ); // js path
				$this->_css = array ( 'flexslider.css' ); // css path
		}
    
    
		function get_flexslider($slideID = '', $slideitems = array(), $setup = array()){

      /** Build image list and container for FlexSlider */
      $this->flexslider2HTML = ''; // Reset
      $this->flexslider2HTML =
      '<div id="'.$slideID.'" class="flexslider">'."\n".
        ' <ul class="slides">'."\n";
      
      if(isset($slideitems)){                      
        foreach($slideitems as $slideitem){
          $this->flexslider2HTML .= '<li>'.$slideitem.'</li>';
        }
      }else{
        $this->flexslider2HTML .=
        '<li>'.'<img src="'.$this->library_url().'demo/images/kitchen_adventurer_caramel.jpg'.'" />'.'</li>'.
        '<li>'.'<img src="'.$this->library_url().'demo/images/kitchen_adventurer_donut.jpg'.'" />'.'</li>'.
        '<li>'.'<img src="'.$this->library_url().'demo/images/kitchen_adventurer_cheesecake_brownie.jpg'.'" />'.'</li>';  
      }
      
      $this->flexslider2HTML .=  ' </ul>'."\n".
                          '</div>';
                          
                          
      /**  */
      $this->flexslider2scriptHTML =''; // Reset
      $this->flexslider2scriptHTML .=
      '<script type="text/javascript" charset="utf-8">'."\n".
      ' jQuery(window).load(function() {'."\n".
      '   jQuery("#'.$slideID.'").flexslider({';
      
      if(isset($setup)){
        //point to end of the array
        end($setup);
        //fetch key of the last element of the array.
        $lastElementKey = key($setup);
    
        foreach($setup as $key => $value){
    
          if(is_string($value)) $value = '"'.$value.'"';
          if(is_bool($value)) {
            if($value) {
              $value = 'true';
            }else{
              $value = 'false';
            }
          }
          
          $this->flexslider2scriptHTML .= $key.': '.$value;
          
          if ($key !== $lastElementKey){
            $this->flexslider2scriptHTML .= ', ';  
          }
        }
      }else{
        $this->flexslider2scriptHTML .= 'animation: "slide"';                           
      }
      
      //echo '<pre>'.$flexslider2scriptHTML.'</pre>';
                                  
      $this->flexslider2scriptHTML .=
      '   });'."\n".
      ' });'."\n".
      '</script>' . "\n";
                                
      /**
       *  NOTE: this is removed. Cauases problem when comes to multiple slideshow
       */
      //if(!function_exists('flexslider_script_setup')){
      //  function flexslider_script_setup() {
      //    echo $this->flexslider2scriptHTML;
      //  }
      //}
      //add_action('wp_footer', 'flexslider_script_setup');
                          
      return $this->flexslider2HTML.$this->flexslider2scriptHTML;
    }
    
}



/** Instantiate FlexSlider class */
global $piggyback_flexslider;
$piggyback_flexslider = new piggyback_flexslider;