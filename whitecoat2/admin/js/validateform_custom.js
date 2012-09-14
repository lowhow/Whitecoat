/**
 * This script is to validate forms
 *
 * @package What A Luck
 * @subpackage WhatALuck plugin
 */
jQuery(function() {
  
  
	jQuery('#post').validate({
			invalidHandler: function(){
				jQuery('#publish').removeClass('button-primary-disabled');
				jQuery('#ajax-loading').css('visibility', 'hidden');
			}
      
		});
  
  
});