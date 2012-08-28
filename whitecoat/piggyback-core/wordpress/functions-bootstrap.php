<?php
/** 囧
 * Bootstrap related Functions and Classes for Wordpress
 *
 * @author HOW
 * @package PiggyBack
 * @since version 0.1
 * @version 1
 */

 /**
 * Use this function to register bootstrap.min.css, bootstrap-responsive.min.css & bootstrap.js
 *
 * @example
 * <code>
 *  piggyback_register_bootstrap('bs','bs-responsive','bs-js', FALSE);
 * </code>
 *
 * @param string $bsCss  Name of Bootstrap CSS Handle. MANDATORY! 
 * @param string $bsRespCss  Name of Bootstrap Responsive CSS Handle. Default is NULL.
 * Will not register when NULL. Dependant on bootstrap.min.css
 * @param string $bsJs Name of Bootstrap Javascript Handle Default is NULL.
 * Will not register when NULL. Dependant on bootstrap.min.css
 * @param boolean $enqueue To enqueue the registered style and script. TRUE by default and will enqueue. 
 * 
 * @package PiggyBack
 * @since version 0.5
 * @version 1.0
 *
 */
function piggyback_register_bootstrap( $bsCss, $bsRespCss = NULL, $bsJs = NULL, $enqueue = TRUE ){
  global $piggyback;

  $bootstrap_css_all = $piggyback->bootstrap->get_css();
  wp_register_style($bsCss, $bootstrap_css_all[0], array(),$piggyback->bootstrap->_version);
  if($enqueue) wp_enqueue_style($bsCss);
  
  if($bsRespCss){
    $styleUrl = $piggyback->bootstrap->library_url() . $piggyback->bootstrap->_meta_reponsive['css'];
    wp_register_style($bsRespCss, $styleUrl, array($bsCss),$piggyback->bootstrap->_version);
    if($enqueue) wp_enqueue_style($bsRespCss);
  }
  
  if($bsJs){
    $bootstrap_js_all = $piggyback->bootstrap->get_js();
    wp_register_script( $bsJs, $bootstrap_js_all[0], array('jquery'), $piggyback->bootstrap->_version,TRUE);
    if($enqueue) wp_enqueue_script($bsJs);
  } 
}


/**
 * Bootstrap Dropdown Menu Walker
 *
 * When this walker is included in wp_nav_menu, a Bootstrap Nav markup will be returned.
 * DOES NOT support 3rd level menu. It breaks Bootstrap Nav.
 *
 * @package PiggyBack
 * @since version 0.1
 * @version 1.0
 * @link http://goodandorgreat.wordpress.com/2012/02/17/update-4-using-twitter-bootstrap-2-0-dropdown-menus-with-wordpress/
 */
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth ) {
    $indent = str_repeat( "\t", $depth );
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    
    $li_attributes = '';
    $class_names = $value = '';
    
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = ($args->has_children) ? 'dropdown' : '';
    $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
    $classes[] = 'menu-item-' . $item->ID;

    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

    $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
    
    $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
    $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
    $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
    /** HOW: When u onlywant 1 level of dropdown*/
    //$attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
    $attributes .= (($args->has_children) && ($depth < 1)) 	    ? ' class="dropdown-toggle depth-'.$depth.'" data-toggle="dropdown"' : '';

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
  
    if ( !$element )
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



		