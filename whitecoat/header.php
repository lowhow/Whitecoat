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
<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); // used to check if plugin is active. In this case used for wp_pagenavi ?>

</head>

<body <?php body_class(); ?>>
<div id="pagewrap" class="hfeed">
	
	
  <header id="branding" role="banner">
    <div class="containerwrap">
			<div class="container-fluid">
        <div class="row-fluid">
          
          <div class="span9">
            <hgroup>
              <h1 id="site-title">
                <span>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
                  </a>
                </span>
              </h1>
            </hgroup>
          </div><?php // END: .span9 ?>

				</div><?php // END: .row-fluid ?>
			</div><?php // END: .container-fluid ?>
		</div><?php // END: .containerwrap ?>
	</header><?php // END: #branding ?>
  
  <nav id="access" role="Navigation">
    <div class="containerwrap">
      <div class="mainnav">
        <div class="navbar">
          <div class="navbar-inner">
						
						<div class="container">							
						<?php
            /**
             * Our Main Nav menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.
             * The menu assiged to the primary position is the one used.
             * If none is assigned, the menu with the lowest ID is used.
             */
						$mainmenu =	wp_nav_menu( array(
												'menu'            => 'Main',
												'container'       => 'div',
												'container_class' => '',
												'menu_class'      => 'nav',
                        'depth'           => 2,
												'walker'	        => new Bootstrap_Walker_Nav_Menu(),
												'echo'            => FALSE
																 ));
						?>
						<?php echo $mainmenu; ?>
						
								<div class="pull-right" style="width:120px;">
									<form class="navbar-form " method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
										<input type="text" class="field " style="width:100px!important;" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
									</form>
								</div>
						</div>
						
          </div><?php // END: .navbar-inner ?>
        </div><?php // END: .navbar ?>
      </div><?php // END: .subnav ?>
    </div><?php // END: .containerwrap ?>
	</nav><?php // END: nav#access ?>
 
<?php get_sidebar('top'); ?>
hello
<?php
//global $piggyback_prettyphoto;
//print_r( $piggyback_prettyphoto->get_js());
?>
