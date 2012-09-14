<?php
/** 囧
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat2
 */

get_header(); ?>
<div id="main">
	<div class="containerwrap">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">

          <div id="primary">
            <div id="content" role="main">
      
              <?php while ( have_posts() ) : the_post(); ?>
      
                <?php get_template_part( 'contents/content', 'page' ); ?>
      
                <?php comments_template( '', true ); ?>
      
              <?php endwhile; // end of the loop. ?>
      
            </div><!-- #content -->
          </div><!-- #primary -->

				</div>
				

			</div><?php // END: .row-fluid ?>
		</div><?php // END: .container-fluid ?>
	</div><?php // END: .containerwrap ?>
</div><?php // END: #main ?>
<?php get_footer(); ?>