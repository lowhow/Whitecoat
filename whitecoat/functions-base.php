<?php
/** 囧
 * Standard theme functions and definitions
 *  
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 * 
 */
/**
 * Init Stuffs matching with SuperDuper Options
 *
 * @todo Create Options in SuperDuper Admin and decide the perform actions below 28-AUG-2012
 */


/** Add Favicon Link */
add_action('wp_head', 'favicon_link');

/** Remove Wordpress Generator */
remove_action('wp_head', 'wp_generator');

/** Add 'active' & 'current' class to current menu item. */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/** Remove Admin Bar in front-end */
add_filter( 'show_admin_bar' , 'remove_admin_bar' );

/** Remove Twenty Eleven Theme Options */
add_action( 'after_setup_theme', 'ask_twentyeleven_cleanup', 11 );

/** Remove TwentyEleven Header page and Background page in Admin */
add_action( 'after_setup_theme','remove_twentyeleven_options', 100 );

/** Remove all Twenty Eleven Default Widgets Area */
add_action( 'after_setup_theme','remove_twentyeleven_all_widgets', 100 );



/** Register and enqueue Flexslider from library */
function wc_register_flexslider(){
	piggyback_register_flexslider('flexslider','flexslider');
}
add_action('wp_enqueue_scripts', 'wc_register_flexslider');

/** Create Custom Post Type for Flex Slider */
function create_piggyback_flexslider_post_type() {
	/** Labels */
	$labels = array(
    'name' => 'Slides', // 'name' - general name for the post type, usually plural. The same as, and overridden by $post_type_object->label 
    'singular_name' => 'Slide item', // 'singular_name' - name for one object of this post type. Defaults to value of name 
    'add_new' => 'Add New', // 'add_new' - the add new text. The default is Add New for both hierarchical and non-hierarchical types. When internationalizing this string, please use a gettext context matching your post type. Example: _x('Add New', 'product');
    'add_new_item' => 'Add New Slide', // 'add_new_item' - the add new item text. Default is Add New Post/Add New Page 
    'edit_item' => 'Edit Slide', // 'edit_item' - the edit item text. Default is Edit Post/Edit Page 
    'new_item' => 'New Slide', // 'new_item' - the new item text. Default is New Post/New Page 
    'view_item' => 'View Slide', // 'view_item' - the view item text. Default is View Post/View Page 
    'search_items' => 'Search Slides', // 'search_items' - the search items text. Default is Search Posts/Search Pages 
    'not_found' => 'No slide found.', // 'not_found' - the not found text. Default is No posts found/No pages found 
    'not_found_in_trash' => 'No slide found in Trash.',	// 'not_found_in_trash' - the not found in trash text. Default is No posts found in Trash/No pages found in Trash
    'menu' => 'Slideshow' // 'menu_name' - the menu name text. This string is the name to give menu items. Defaults to value of name
	);

	/** Register the post type. */
	register_post_type( 'piggybackflexslider',	array(
      'labels' => $labels,
      'public' => true,
      'hierarchical' => false,
      'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
      'exclude_from_search' => TRUE,
      'has_archive' => true
		)
	);
}
add_action( 'init', 'create_piggyback_flexslider_post_type' ); 




/** Register and enqueue PrettyPhoto from library */
function wc_register_prettyphoto(){
	piggyback_register_prettyphoto('prettyphoto','prettyphoto');
}
add_action('wp_enqueue_scripts', 'wc_register_prettyphoto');

/** Init PrettyPhoto in Document Ready */
function prettyphoto_jsinit() {
  echo  '<script type="text/javascript" charset="utf-8">'.
        ' jQuery(document).ready(function(){'.
        '   jQuery("a[rel^=\'prettyPhoto\']").prettyPhoto();'.
          '});'.
        '</script>' . "\n";
}
add_action('wp_head', 'prettyphoto_jsinit');

/** Hook into 'image_send_to_editor' and place rel="prettyPhoto" */
function fancy_capable($html, $id, $alt, $title, $align, $url, $size ) {
  global $post;

  $options = get_option('twenty_eleven');
  $hook = $options['pp_hook'];
  $hook = "rel";
  $selector = 'prettyPhoto';
  
  if ( ! $permalink )
    $html = preg_match( '/' . $hook . '="/', $html ) ? str_replace( $hook . '="', $hook . '="' . $selector. '" ' , $html ) : str_replace( '<a ', '<a ' . $hook . '="' . $selector . '" ', $html );
  return $html;
}
add_filter( 'image_send_to_editor', 'fancy_capable', 10, 7);

/** Hook into 'wp_get_attachment_link' and place rel="prettyPhoto" */
function pb_prettyphoto_get_attachment_link($html, $id, $size, $permalink) {
	global $post;

	$pid = $post -> ID;

  $options = get_option('twenty_eleven');
  $hook = $options['pp_hook'];
    $hook = "rel";
  $selector = 'prettyPhoto';

	if ( ! $permalink )
		$html = preg_match( '/' . $hook . '="/', $html ) ? str_replace( $hook . '="', $hook . '="' . $selector . '[gallery-' . $pid . '] ', $html ) : str_replace( '<a ', '<a ' . $hook . '="' . $selector . '[gallery-' . $pid . ']" ', $html );
	return $html;
}
add_filter( 'wp_get_attachment_link', 'pb_prettyphoto_get_attachment_link', 10, 4 );





/** Styling for the piggybackflexslider post type icon */
function piggyback_flexslider_icons() {
?>
  <style type="text/css" media="screen">
    #menu-posts-piggybackflexslider .wp-menu-image {
      background: url(<?php bloginfo('stylesheet_directory') ?>/piggyback-core/media/cpt-icons/slides.png) no-repeat 6px -16px !important;
    }
  #menu-posts-piggybackflexslider:hover .wp-menu-image,
  #menu-posts-piggybackflexslider.wp-has-current-submenu .wp-menu-image {
      background-position:6px 8px !important;
    }
  #icon-edit.icon32-posts-piggybackflexslider {background: url(<?php bloginfo('stylesheet_directory') ?>/piggyback-core/media/cpt-icons/icons-32/image.png) no-repeat;}
  </style>
<?php
}
add_action( 'admin_head', 'piggyback_flexslider_icons' );
 
 
 
 
 
 
 
// add_filter( 'image_send_to_editor', 'fancy_capable', 10, 7);
//function fancy_capable($html, $id, $alt, $title, $align, $url, $size ) {
//    //$url = wp_get_attachment_url($id); // Grab the current image URL
//    
//    global $post;
//
//	//$hook = prettyphoto_get_option( 'hook' );
//  //$hook = 'rel';
//  $options = get_option('twenty_eleven');
//  $hook = $options['pp_hook'];
//  //print_r($options);
//  //exit;
//	//$selector = prettyphoto_get_option( 'ppselector' );
//  $selector = 'prettyPhoto';
//  
//  //echo '<pre>'.$html.'</pre>'; exit;
//
//	//if ( ! $permalink )
//		//$html = preg_match( '/' . $hook . '="/', $html ) ? str_replace( $hook . '="', $hook . '="' . $selector. '" ' , $html ) : str_replace( '<a ', '<a ' . $hook . '="' . $selector . '" ', $html );
//    
//  //echo '<pre>'.$html.'</pre>'; exit;
//  return $html;
//  
//  
//}
//
//add_filter( 'wp_get_attachment_link', 'pb_prettyphoto_get_attachment_link', 10, 4 );
//function pb_prettyphoto_get_attachment_link($html, $id, $size, $permalink) {
//	global $post;
//
//	$pid = $post -> ID;
//	//$hook = prettyphoto_get_option( 'hook' );
//  //$hook = 'rel';
//  $options = get_option('twenty_eleven');
//  $hook = $options['pp_hook'];
//  //print_r($options);
//  //exit;
//	//$selector = prettyphoto_get_option( 'ppselector' );
//  $selector = 'prettyPhoto';
//
//	if ( ! $permalink )
//		$html = preg_match( '/' . $hook . '="/', $html ) ? str_replace( $hook . '="', $hook . '="' . $selector . '[gallery-' . $pid . '] ', $html ) : str_replace( '<a ', '<a ' . $hook . '="' . $selector . '[gallery-' . $pid . ']" ', $html );
//
//	return $html;
//}

 
 
 
 
 
 
 
/**
 * Maintenance Mode
 * 
 * @package WPBS
 * @since WPBS version 1.1
 *
 *
 * Switch off Wordpress front-end.
 * Uncomment add_action to activate Maintenance Mode. When activated, only
 * administrator role can view site.
 */
function maintenace_mode() {
  if ( !current_user_can( 'administrator' ) ) {
    $options = get_option('piggyback');
    if($options['maintenance_mode'])
      wp_die('Maintenance.');
  }
}
add_action('get_header', 'maintenace_mode');




/**
 * Add Excerpt to page
 *
 * @todo use NHP Option setting. 28-AUG-2012
 */
/***************************************************
 * Remove comment below to activate.
 ***************************************************/
//add_action( 'init', 'wc_add_excerpts_to_pages' );
function wc_add_excerpts_to_pages() {
  add_post_type_support( 'page', 'excerpt' );
}






/**
 * Overwrite Editor Style to MCE Editor
 *
 * @package WPBS
 * @since WPBS version 1.1
 * 
 * Add mce editor CSS. Define new location for editor css.
 * 
 */
function plugin_mce_css($mce_css) {
  if (! empty($mce_css)) $mce_css .= ',';
  $mce_css .= get_stylesheet_directory_uri() . '/css/editor-style.css';
  return $mce_css;
}
add_filter('mce_css', 'plugin_mce_css');





/** 
 * Filter TinyMCE Buttons
 *
 * Here we are filtering the TinyMCE buttons and adding a button
 * to it. In this case, we are looking to add a style select 
 * box (button) which is referenced as "styleselect". In this 
 * example we are looking to add the select box to the second
 * row of the visual editor, as defined by the number 2 in the
 * mce_buttons_2 hook.
 */
function themeit_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter( 'mce_buttons_2', 'themeit_mce_buttons_2' );

/**
 * Add Style Options
 *
 * First we provide available formats for the style format drop down.
 * This should contain a comma separated list of formats that 
 * will be available in the format drop down list.
 *
 * Next, we provide our style options by adding them to an array.
 * Each option requires at least a "title" value. If only a "title"
 * is provided, that title will be used as a divider heading in the
 * styles drop down. This is useful for creating "groups" of options.
 *
 * After the title, we set what type of element it is and how it should
 * be displayed. We can then provide class and style attributes for that
 * element. The example below shows a variety of options.
 *
 * Lastly, we encode the array for use by TinyMCE editor
 *
 * {@link http://tinymce.moxiecode.com/examples/example_24.php }
 */
function themeit_tiny_mce_before_init( $settings ) {
  $settings['theme_advanced_blockformats'] = 'p,div,h1,h2,h3,h4,h5,h6,address';

  $style_formats = array(
      array( 'title' => 'Button',         'inline' => 'span',  'classes' => 'button' ),
      array( 'title' => 'Green Button',   'inline' => 'span',  'classes' => 'button button-green' ),
      array( 'title' => 'Rounded Button', 'inline' => 'span',  'classes' => 'button button-rounded' ),
      
      array( 'title' => 'Other Options' ),
      array( 'title' => '&frac12; Col.',      'block'    => 'div',  'classes' => 'one-half' ),
      array( 'title' => '&frac12; Col. Last', 'block'    => 'div',  'classes' => 'one-half last' ),
      array( 'title' => 'Callout Box',        'block'    => 'div',  'classes' => 'callout-box' ),
      array( 'title' => 'Highlight',          'inline'   => 'span', 'classes' => 'highlight' )
  );

  $settings['style_formats'] = json_encode( $style_formats );
  return $settings;
}
add_filter( 'tiny_mce_before_init', 'themeit_tiny_mce_before_init' );





/**
 * Add Quick tags to admin HTML editor.
 *
 * @package WPBS
 * @since WPBS version 1.2
 *
 * Added tags: "sup", "label", "address"
 */
function wpbs_custom_quicktags() {
	wp_enqueue_script(
		'wpbs_custom_quicktags',
		get_bloginfo( 'stylesheet_directory' ) . '/js/quicktags.js',
		array( 'quicktags' )
	);
}
add_action( 'admin_print_scripts', 'wpbs_custom_quicktags' );






/**
 * Custom Nav Menu Walker - Display submenu in accordian style
 * 
 * Show children menu items of current top level. Show's Top level ancestor as a header.
 * Accordian uses jQuery UI.
 *
 * @package PiggyBack
 */

class HOW_Walker_SubNav_Menu extends Walker_Nav_Menu {
	

			function start_lvl( &$output, $depth ) {
				if( 0 == $depth )  
					return;
				
				$indent = str_repeat( "\t", $depth );
				$output .= "\n$indent<ul class=\"acccontent\">\n";
			}
	
			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				//echo '<pre>'; print_r($item); echo '</pre>';
				
				// If first level and not ancestor, skip it
				if( 0 == $depth && ( !$item->current_item_ancestor && !$item->current ))  
			    return;  
				
				$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
				
				$li_attributes = '';
				$class_names = $value = '';
				
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = ($args->has_children) ? 'has_children' : '';
				// Don't put active in root ancestor.
				if($depth != 0){
					$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
				}
				$classes[] = 'menu-item-' . $item->ID;
				$classes[] = 'depth-' . $depth;
	
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				$class_names = ' class="' . esc_attr( $class_names ) . '"';
	
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
				
				$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

				
				$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
				$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
				$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
				$attributes .= ($args->has_children) ? ' class="accheader" ' : '';
	
				$item_output = $args->before;
				// If is first level and is ancestor, change to header
				if(0 == $depth && ( $item->current_item_ancestor || $item->current )){
					$item_output .= '<h3 class="secondarymenu-header">';
					$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
					$item_output .= '</h3>';
				}else{
					$item_output .= '<a'. $attributes .'>';
					$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
					$item_output .= ($args->has_children) ? ' <span class="sidemenu-caret"></span></a>' : '</a>';
				}
				$item_output .= $args->after;
	
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
			
			
			function end_el(&$output, $item, $depth=0, $args=array()) {
				// If first level and not ancestor, skip it
        if( 0 == $depth &&  !$item->current_item_ancestor  )  
            return;  
        parent::end_el(&$output, $item, $depth, $args);  
			} 
			
			
			// Don't end the top level  
			function end_lvl(&$output, $depth=0, $args=array()) {  
					if( 0 == $depth )  
							return;  
					parent::end_lvl(&$output, $depth,$args);  
			}  
			
	
			function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
			
				if ( !$element )
					return;
				
				// Check if element as a 'current element' class  
				$current_element_markers = array( 'current-menu-item', 'current-menu-parent', 'current-menu-ancestor' );  
				$current_class = array_intersect( $current_element_markers, $element->classes );  
			
				// If element has a 'current' class, it is an ancestor of the current element  
				$ancestor_of_current = !empty($current_class);
			
				// If this is a top-level link and not the current, or ancestor of the current menu item - stop here.  
				if ( 0 == $depth && !$ancestor_of_current)  
						return;  

				
					$id_field = $this->db_fields['id'];
				
					//display this element
					if ( is_array( $args[0] ) )
					$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
					else if ( is_object( $args[0] ) )
					$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
					$cb_args = array_merge( array(&$output, $element, $depth), $args);
					call_user_func_array(array(&$this, 'start_el'), $cb_args);
					
					$id = $element->$id_field;
					
					// descend only when the depth is right and there are childrens for this element
					if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
					
					foreach( $children_elements[ $id ] as $child ){
					
						if ( !isset($newlevel) ) {
						$newlevel = true;
						//start the child delimiter
						$cb_args = array_merge( array(&$output, $depth), $args);
						call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
						}
						$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
						}
						unset( $children_elements[ $id ] );
						}
						
						if ( isset($newlevel) && $newlevel ){
						//end the child delimiter
						$cb_args = array_merge( array(&$output, $depth), $args);
						call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
						}
						
						//end this element
						$cb_args = array_merge( array(&$output, $element, $depth), $args);
						call_user_func_array(array(&$this, 'end_el'), $cb_args);
					}

		}




/**
 *  Some functions to put items into rows.
 */
function put_items_in_rows($items, $rowlimit = -1, $rowheader = '', $rowfooter = '' ){
  if (!isset($items)) return false;
  
  $rowcounter = 0;
  $output = ''; // Contains final string to be display.
  $itemcounter = 0; // Counts how many items have been looped.
  
  foreach($items as $item){
    
    $strHTML = '';
    
    // Beginning of a row.
    if($rowcounter == 0){
      $strHTML .= $rowheader;
    }
    
    $strHTML .=   $item;
    
    $itemcounter++;
    $rowcounter++;
    // End of the row when matches limit.
    if(($rowcounter == $rowlimit) || ($itemcounter == count($items)) ){
      $strHTML .= $rowfooter;
      $rowcounter = 0;
    }
    $output .=  $strHTML;
  }
  
  /** Final output */
  return $output;
  
}



/**
 *  Get Current Page URL as of address bar using PHP
 *
 *  @link http://webcheatsheet.com/php/get_current_page_url.php
 */
function curPageURL() {
  $pageURL = 'http';
  if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
  $pageURL .= "://";
  if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
  } else {
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  }
  return $pageURL;
}
 
function curPageURLwtParam() {
  $pageURL = 'http';
  if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
  $pageURL .= "://";
  if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
  } else {
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  }
  
  $tmp = explode('?',$pageURL);
  $pageURL = $tmp[0];
  return $pageURL;
}




/**
 *  Create some demo page for PiggyBack functions-theme.php
 */
add_action( 'init', 'create_piggyback_post_type' ); 
function create_piggyback_post_type() {
  $options = get_option('twenty_eleven');
  
	$labels = array(
				'name' => 'PiggyBack Docs', 
				'singular_name' => 'PiggyBack documentation', 
				'add_new' => 'Add New', 
				'add_new_item' => 'Add New PiggyBack Docs', 
				'edit_item' => 'Edit Details', 
				'new_item' => 'New Details', 
				'view_item' => 'View PiggyBack Docs', 
				'search_items' => 'Search PiggyBack Docs', 
				'not_found' => 'No PiggyBack Docs found.', 
				'not_found_in_trash' => 'No PiggyBack Docs found in Trash.'	
	);
	
	register_post_type( 'piggyback',	array(
				'labels'              => $labels,
				'public'              => TRUE,
        'exclude_from_search' => TRUE,
				'rewrite'             => array( 'slug' => 'piggyback', 'with_front' => FALSE ),
        'show_ui'             => FALSE,
				'hierarchical'        => FALSE,
        'has_archive'         => TRUE
		)
	);
}



/**
 * The Modules generator function
 *
 * @param string $modstyle Add classes to module wrapper.
 * @param string $modtitle Title to the module wraped in <h3>.
 * @param string $modbody HTML content in the module.
 * @param string $modfoot HTML footer content at the bottom.
 * @param boolean $echo To echo or not. Default to FALSE.
 */
function piggyback_get_mod($modstyle = '', $modtitle = '', $modbody = '', $modfoot = '', $echo = FALSE){
  $modHTML = '';
  
  if($modbody || $modbody || $modfoot){
    $modHTML  .=  '<div class="mod '.$modstyle.'">'.
                  ' <div class="mod-inner">'.
                  '   <div class="mod-inner2">';
    $modHTML  .=  ($modtitle == '' ? '' : '<div class="mod-header">'.'<h3 class="mod-title">'.$modtitle.'</h3>'.'</div>');
    $modHTML  .=  ($modbody == '' ? '' : '<div class="mod-body">'.$modbody.'</div>');
    $modHTML  .=  ($modfoot == '' ? '' : '<div class="mod-footer">'.$modfoot.'</div>');
    $modHTML  .=  '   </div>'.
                  ' </div>'.
                  '</div>';
  }
  
  if($echo){
    echo $modHTML;
  }else{
    return $modHTML;
  }
}



/**
 *
 */
function piggyback_place_responsive_meta(){
  
}


/**
 * Test if a post is in a descendant category
 *
 * @package PAGGYBACK
 * @since version 0.1
 */

if ( ! function_exists( 'post_is_in_descendant_category' ) ) {        
     function post_is_in_descendant_category( $cats, $_post = null ) {                
          foreach ( (array) $cats as $cat ) {                        
               // get_term_children() accepts integer ID only                        
               $descendants = get_term_children( (int) $cat, 'category' );                        

               if ( $descendants && in_category( $descendants, $_post ) )                                
                    return true;                
          }                
          return false;        
     }
}