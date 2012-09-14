<?php
/** 囧
 * Whitecoat Colombo theme functions and definitions
 *  
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 * 
 */

/**
 * Initialize primary stylesheets and scripts for Theme.
 * 
 * @package PiggyBack
 * @subpackage Whitecoat 0.1
 * @since version 0.5
 * @version 1.0
 */
function wc_enqueue_style_script() {
  /** Register and enqueue Bootstrap from library.  */
  piggyback_register_bootstrap('bs','bs-responsive','bs-js');
  
  /** Override library Bootstrap main CSS with Theme's CSS. */ 
  //$styleUrl = get_bloginfo('stylesheet_directory').'/css/skin.css';
  //wp_deregister_style( 'bs' );
  //wp_register_style('bs', $styleUrl, array(), '2.1.0');
	
	/** Link Skin's Stylesheet */
	$styleUrl = get_bloginfo( 'stylesheet_directory' ) . '/css/skin.css';
	wp_register_style('main', $styleUrl);
	wp_enqueue_style( 'main');
	
	/** Link Skin's Stylesheet */
	$styleUrl = get_bloginfo( 'stylesheet_directory' ) . '/css/custom.css';
	wp_register_style('custom', $styleUrl);
	wp_enqueue_style( 'custom');
	
  /** Link Skin's Responsive Stylesheet */
	$styleUrl = get_bloginfo( 'stylesheet_directory' ) . '/css/skin-responsive.css';
	wp_register_style('main-responsive', $styleUrl);
	wp_enqueue_style( 'main-responsive');
  
  /** Adding Theme's script that dependant on Bootstrap JS and jQuery UI Core. */
	wp_register_script( 'application-js', get_bloginfo( 'stylesheet_directory' ) . '/js/application.js', array('jquery','bs-js','jquery-ui-accordion'),'',TRUE);
  wp_enqueue_script( 'application-js' );
  
}
add_action('wp_enqueue_scripts', 'wc_enqueue_style_script');




/**
 * Change CONTINUE READING to READ MORE
 *     
 * @package WPBS
 * @since WPBS version 1.1
 * @link http://www.fix-css.com/2012/04/change-continue-reading-%E2%86%92-of-twenty-eleven-wordpress-theme-in-its-child-theme/
 *
 * 
 */
function iggy_remove_excerpt_filter() {
  remove_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );
}
add_action( 'after_setup_theme', 'iggy_remove_excerpt_filter' );

/* Adds a pretty "READ MORE" link to custom post excerpts  */
function iggy_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
			$output .= iggy_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'iggy_custom_excerpt_more' );

/* Removes the excerpt_more filter */
function iggy_remove_auto_excerpt_filter() {
  remove_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' );
}
add_action( 'after_setup_theme', 'iggy_remove_auto_excerpt_filter' );

/* Adds a pretty "READ MORE" link to custom post excerpts. */
function iggy_auto_excerpt_more( $more ) {
  return '&#8230; ' . iggy_continue_reading_link();
}
add_filter( 'excerpt_more', 'iggy_auto_excerpt_more' );

/* Returns a "READ MORE" link */
function iggy_continue_reading_link() {
  return 	' <a class="iconbw-link pull-right" href="'. esc_url( get_permalink() ) .
					'">' . __( 'Read More <span class="meta-nav"></span>', 'twentyeleven' ) .
					'</a>';
}
 

/**
 * Function: Overwrite Parent Theme's function [twentyeleven_posted_on()]
 *
 * @package PiggyBack
 * @subpackage Whitecoat Colombo
 * 
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 */
function twentyeleven_posted_on() {
  printf( __( '<span class="entry-meta-date"><i class="icon-time"></i> <span class="entry-date" datetime="%3$s" pubdate>%4$s</span></span> ', 'twentyeleven' ),
    esc_url( get_permalink() ),
    esc_attr( get_the_time() ),
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );
}



/**
 * Custom Wordpress image sizes
 *
 * Define new image sizes for theme use.
 * 
 * Usage:
 * <code>
 *  add_image_size( $name, $width, $height, $crop );
 * </code>
 * 
 * Example:
 * <code>
 *   add_image_size( 'magthumb', 100, 144, TRUE );
 * </code>
 *
 * @link http://codex.wordpress.org/Function_Reference/add_image_size
 */    
//if ( function_exists( 'add_image_size' ) ) {
//	// Insert add_image_size() here...
//}









/**
 * Create Widget areas for this theme
 * 
 * Register sidebars by running blect_widgets_init() on the widgets_init hook.
 */
add_action( 'widgets_init', 'piggyback_widgets_init' );
function piggyback_widgets_init() {
  /**
   * Sidebar Top
   */
  register_sidebar( array(
      'name'            => 'Top 1',
      'id'              => 'sidebar-top1',
      'description'     => '',
      'class'           => 'mod-body',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  register_sidebar( array(
      'name'            => 'Top 2',
      'id'              => 'sidebar-top2',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  register_sidebar( array(
      'name'            => 'Top 3',
      'id'              => 'sidebar-top3',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  register_sidebar( array(
      'name'            => 'Top 4',
      'id'              => 'sidebar-top4',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  /**
   * Sidebar Right
   */
  register_sidebar( array(
      'name'            => 'Right',
      'id'              => 'sidebar-right',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  /**
   * Sidebar Left
   */
  register_sidebar( array(
      'name'            => 'Left',
      'id'              => 'sidebar-left',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  /**
   * Sidebar Bottom
   */
  register_sidebar( array(
      'name'            => 'Bottom 1',
      'id'              => 'sidebar-bottom1',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  register_sidebar( array(
      'name'            => 'Bottom2',
      'id'              => 'sidebar-bottom2',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  register_sidebar( array(
      'name'            => 'Bottom3',
      'id'              => 'sidebar-bottom3',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  register_sidebar( array(
      'name'            => 'Bottom4',
      'id'              => 'sidebar-bottom4',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  /**
   * Sidebar Content Top
   */
  register_sidebar( array(
      'name'            => 'Content Top',
      'id'              => 'sidebar-contenttop',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
  /**
   * Sidebar Content Bottom
   */
  register_sidebar( array(
      'name'            => 'Content Bottom',
      'id'              => 'sidebar-contentbottom',
      'description'     => '',
      'before_widget'   => '<div id="%1$s" class="widget-container %2$s mod mod-style-plain"><div class="mod-inner"><div class="mod-inner2">',
      'after_widget'    => '</div></div></div>',
      'before_title'    => '<div class="mod-header"><h3 class="widget-title mod-title">',
      'after_title'     => '</h3></div>',
  ) );
}








/**
 * Hacking widgets
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat Colombo
 */
// register widget callbacks and update functions

//Add input fields(priority 5, 3 parameters)
add_action('in_widget_form', 'kk_in_widget_form',5,3);
//Callback function for options update (priorität 5, 3 parameters)
add_filter('widget_update_callback', 'kk_in_widget_form_update',5,3);
//add class names (default priority, one parameter)
add_filter('dynamic_sidebar_params', 'kk_dynamic_sidebar_params');

function kk_in_widget_form($t,$return,$instance){
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '', 'pg_style' => '') );
    if ( !isset($instance['pg_style']) )
        $instance['pg_style'] = null;
    ?>
    <p>
        <label for="<?php echo $t->get_field_id('pg_style'); ?>">Style</label>
        <select id="<?php echo $t->get_field_id('pg_style'); ?>" name="<?php echo $t->get_field_name('pg_style'); ?>">
            <option <?php selected($instance['pg_style'], 'none');?> value="none">none</option>
            <option <?php selected($instance['pg_style'], 'mod-style-plain');?> value="mod-style-plain">Plain</option>
            <option <?php selected($instance['pg_style'], 'mod-style-box');?> value="mod-style-box">Box</option>
            <option <?php selected($instance['pg_style'], 'mod-style-darl');?> value="mod-style-dark">Dark</option>
        </select>
    </p>
    <?php
    $retrun = null;
    return array($t,$return,$instance);
}

function kk_in_widget_form_update($instance, $new_instance, $old_instance){
    //$instance['width'] = isset($new_instance['width']);
    $instance['pg_style'] = $new_instance['pg_style'];
    //$instance['texttest'] = strip_tags($new_instance['texttest']);
    return $instance;
}


function kk_dynamic_sidebar_params($params){
    global $wp_registered_widgets;
    $widget_id = $params[0]['widget_id'];
    $widget_obj = $wp_registered_widgets[$widget_id];
    $widget_opt = get_option($widget_obj['callback'][0]->option_name);
    $widget_num = $widget_obj['params'][0]['number'];
    //if (isset($widget_opt[$widget_num]['width'])){
            if(isset($widget_opt[$widget_num]['pg_style']) ){
              if($widget_opt[$widget_num]['pg_style'] == 'none'){
                $pg_style = '';
              }else{
                    $pg_style = $widget_opt[$widget_num]['pg_style'];
              }
            }
            else
              $pg_style = '';
                
            $params[0]['before_widget'] = preg_replace('/class="/', 'class="'.$pg_style.' ',  $params[0]['before_widget'], 1);
    //}
    return $params;
}