!function ($) {

  $(function(){

    // make code pretty
    window.prettyPrint && prettyPrint()
    
    // fix sub nav on scroll
    var $win = $(window)
      , $nav = $('.subnav')
      , navTop = $('.subnav').length && $('.subnav').offset().top - 0
      , isFixed = 0
      , $stotop = $('.scrolltotop')
      , $mainpane = $('#main')

    processScroll()

    $win.on('scroll', processScroll)
    
    $win.ready(function(){
      processScroll()
    })

    function processScroll() {
      
      var i, scrollTop = $win.scrollTop()
      if (scrollTop >= navTop && !isFixed) {
        isFixed = 1
        $nav.addClass('subnav-fixed')
        $stotop.fadeIn('fast')
        //$mainpane.css('padding-top','60px');
      } else if (scrollTop <= navTop && isFixed) {
        isFixed = 0
        $nav.removeClass('subnav-fixed')
        $stotop.fadeOut('fast')

        //$mainpane.css('padding-top','0px');
        
      } else if (scrollTop <= navTop) {

      }
    }
    
    // Window Resize
    $win.resize(function(){
      //windowresize()
    })
    
    function windowresize() {
      var windowwidth = $win.width()
      var containerwidth = windowwidth - 40
      
      if ($win.width() > 1750){
        //$('#site-title').html(windowwidth)
        isotopeContainer.width($win.width() - 70)
      }else if ($win.width() < 1750 && $win.width() >= 1690){
        isotopeContainer.width(1445)
      }
      
      $('#site-title').html(windowwidth)
    }

  })



}(window.jQuery)



/**
 * Jquery Document ready
 *
 * Put your scripts here for Document Ready.
 */
jQuery(document).ready(function($) {

  /**
   * Scroll to Top animation script
   */
	$('.scroll').click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 300);
	});
  
  
  /**
   * wp-pagenavi plugin styling script for Boostrap
   *
   * Modify the default wp-pagenavi markups to suit Bootstrap Pagination styling
   */ 
  $wp_pagenavi = jQuery('.wp-pagenavi');
  $wp_pagenavi.addClass('pagination').wrapInner('<ul />').find('span').wrap('<a />');
  $wp_pagenavi.find('a').wrap('<li />');
  $wp_pagenavi.find('span.current').parents('li').addClass('active');
  
  
  $("a[rel^='prettyPhoto']").prettyPhoto();
  
});



/**
 * Bootstrap Dropdown Menu
 */
jQuery('.dropdown-toggle').dropdown();


/**
 * Bootstrap Collapse
 */
//jQuery('.accordion').on('hide', function () {
//  jQuery(this).find('.accordion-heading .accordion-toggle').toggleClass('myicon-expanded');
//})
//jQuery('.accordion').on('show', function () {
//  jQuery(this).find('.accordion-heading .accordion-toggle').toggleClass('myicon-expanded');
//})
