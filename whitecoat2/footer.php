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
 <?php get_sidebar('bottom'); ?> 

	<footer id="colophon" role="contentinfo">
		<div class="containerwrap">
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12">
            
						<div id="site-generator">

							<?php
              $options = get_option('twenty_eleven');
              $footer_text = $options['footer_text'];
              
              if($footer_text){
                echo $footer_text;
              }else{
                 do_action( 'twentyeleven_credits' );
                 echo '&copy; '. date('Y');
              ?>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
              <?php
              }
							?>
              
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