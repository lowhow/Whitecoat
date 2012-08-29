<?php
/** 囧
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat_Colombo
 */
get_header(); ?>

<div id="main">
	<div class="containerwrap">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span9">
					<div id="primary">
						<div id="content" role="main">
	
						<?php if ( have_posts() ) : ?>
	
							<?php //twentyeleven_content_nav( 'nav-above' ); ?>
	
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
	
									<?php get_template_part( 'contents/content', get_post_format() ); ?>
	
							<?php endwhile; ?>
	
							<?php // twentyeleven_content_nav( 'nav-below' ); ?>
	
						<?php else : ?>
	
							<article id="post-0" class="post no-results not-found">
								<header class="entry-header">
									<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
								</header><?php // END: header ?>
	
								<div class="entry-content">
									<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
									<?php get_search_form(); ?>
								</div><?php // END: .entry-content ?>
							</article><?php // END: #post-0 ?>
	
						<?php endif; ?>
	
						</div><?php // END: #content ?>
					</div><?php // END: #primary ?>
				
				</div>
			
				
				<div class="span3">
					<?php get_sidebar(); ?>
				</div>

			</div><?php // END: .row-fluid ?>
		</div><?php // END: .container-fluid ?>
	</div><?php // END: .containerwrap ?>
</div><?php // END: #main ?>
<?php get_footer(); ?>