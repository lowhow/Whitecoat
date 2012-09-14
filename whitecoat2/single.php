<?php
/** 囧
 * The Template for displaying all single posts.
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat2
 */

get_header(); ?>

<div id="main">
	<div class="containerwrap">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span9">
					<div id="primary">
						<div id="content" role="main">

            <?php while ( have_posts() ) : the_post(); ?>
    
              <nav id="nav-single">
                <h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
                <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
                <span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
              </nav><!-- #nav-single -->
    
              <?php get_template_part( 'contents/content', 'single' ); ?>
    
              <?php comments_template( '', true ); ?>
    
            <?php endwhile; // end of the loop. ?>

						</div><?php // END: #content ?>
					</div><?php // END: #primary ?>
				
				</div>
				
				<div class="span3">
					<?php get_sidebar('right'); ?>
				</div>

			</div><?php // END: .row-fluid ?>
		</div><?php // END: .container-fluid ?>
	</div><?php // END: .containerwrap ?>
</div><?php // END: #main ?>
<?php get_footer(); ?>