<?php
/** 囧
 * The template for displaying the footer.
 *
 * Contains the closing of the id=pagewrap div and all content after
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat Colombo
 */
?>
<?php
  $filter = $_REQUEST['docs'];
  /**
   * Do this only on Wideget Area Documentation Page
   */
  if($filter == 'sidebar' || $filter == 'mod'):
    //if(is_active_sidebar('sidebar-top')):
?>
  <div id="bottom">
    <div class="containerwrap">
      <div class="container-fluid">
        <div class="row-fluid">
          
          <div class="span3">
            <h3>BOTTOM</h3>
            <h2>This area can have up to 4 columns in a row.</h2>
          </div>
          
          <div class="span3">
            <h3>BOTTOM</h3>
            This area will only show when there is atleast ONE active widget.
            </ul>
          </div>
          
          <div class="span3">
            <h3>BOTTOM</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>
          
          <div class="span3">
            <h3>BOTTOM</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>
          
        </div><?php // END: .row-fluid ?>
      </div><?php // END: .container-fluid ?>
    </div><?php // END: .containerwrap ?>
  </div><?php // END: #top ?>
<?php endif; ?>

  

	<footer id="colophon" role="contentinfo">
		<div class="containerwrap">
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12">
						<?php
							/* A sidebar in the footer? Yep. You can can customize
							 * your footer with three columns of widgets.
							 */
							get_sidebar( 'footer' );
						?>
            
						<div id="site-generator">

							<?php do_action( 'twentyeleven_credits' ); ?>
							&copy; <?php echo date('Y') ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
              
						</div>
					</div>
				</div><?php // END: .row-fluid ?>
				
			</div><?php // END: .container-fluid ?>
		</div>
	</footer><?php // END: footer#colophon ?>
  
</div><?php // END: #pagewrap from [header.php] ?>

<?php wp_footer(); ?>
		
</body>
</html>