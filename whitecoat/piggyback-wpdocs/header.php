<?php
/** 囧
 * The Header for our theme.
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat Colombo
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
    <?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php bloginfo('stylesheet_directory') ?>/js/html5.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/css/ie.css" media="screen" />
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

</head>

<body <?php body_class(); ?>>
<div id="pagewrap" class="hfeed" style="padding-top: 20px;">

  
  <nav id="access" role="Navigation">
    <div class="containerwrap">
      <div class="subnav">
        <div class="navbar">
          <div class="navbar-inner">
						
						<div class="container">
              <?php
              /**
               * DOC NAV
               */
              ?>
              <div class="menu-main-menu-container">
                <ul class="nav" id="menu-main-menu">
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-7">
                    <a href="<?php bloginfo('url') ?>/piggyback/">Docs</a>
                  </li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8">
                    <a href="<?php bloginfo('url') ?>/piggyback/?docs=mod">Modules</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9">
                    <a href="<?php bloginfo('url') ?>/piggyback/?docs=sidebar">Widget Areas</a>
                  </li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9">
                    <a href="<?php bloginfo('url') ?>/piggyback/?docs=typo">Typography</a>
                  </li>
                </ul>
              </div>
						
						</div>
						
          </div><?php // END: .navbar-inner ?>
        </div><?php // END: .navbar ?>
      </div><?php // END: .subnav ?>
    </div><?php // END: .containerwrap ?>
	</nav><?php // END: nav#access ?>
  
<?php
  $filter = $_REQUEST['docs'];
  /**
   * Do this only on Wideget Area Documentation Page
   */
  if($filter == 'sidebar' || $filter == 'mod'):
    //if(is_active_sidebar('sidebar-top')):
?>
  <div id="top">
    <div class="containerwrap">
      <div class="container-fluid">
        <div class="row-fluid">
          
          <div class="span3">
            <h3>TOP</h3>
            <pre>This area can have up to 4 columns in a row.</pre>
          </div>
          
          <div class="span3">
            <h3>TOP</h3>
            This area will only show when there is atleast ONE active widget.
            </ul>
          </div>
          
          <div class="span3">
            <h3>TOP</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>
          
          <div class="span3">
            <h3>TOP</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          </div>
          
        </div><?php // END: .row-fluid ?>
      </div><?php // END: .container-fluid ?>
    </div><?php // END: .containerwrap ?>
  </div><?php // END: #top ?>

<?php endif; ?>
  