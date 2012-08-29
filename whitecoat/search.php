<?php
/** 囧
 * The template for displaying Search Results pages.
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat_Colombo
 */

get_header(); ?>

<div id="main">
	<div class="containerwrap">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					
					<section id="primary">
						<div id="content" role="main">
			
						<?php if ( have_posts() ) : ?>
			
							<header class="entry-header">
								<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header>
			
							<?php //twentyeleven_content_nav( 'nav-above' ); ?>
			
							<?php /* Start the Loop */ ?>
							<?php while ( have_posts() ) : the_post(); ?>
			
								<?php
									/* Include the Post-Format-specific template for the content.
									 * If you want to overload this in a child theme then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'content', 'search');
								?>
			
							<?php endwhile; ?>
			
							<?php //twentyeleven_content_nav( 'nav-below' ); ?>
			
						<?php else : ?>
			
							<article id="post-0" class="post no-results not-found">
								<header class="entry-header">
									<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
								</header><!-- .entry-header -->
			
								<div class="entry-content">
									<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
									<?php get_search_form(); ?>
								</div><!-- .entry-content -->
							</article><!-- #post-0 -->
			
						<?php endif; ?>
              
            <?php if(is_plugin_active('wp-pagenavi/wp-pagenavi.php')): ?>
							<hr>
              <footer class="entry-footer">
                <?php wp_pagenavi(); ?>
              </footer>
            <?php endif; ?>
			
						</div><!-- #content -->
					</section><!-- #primary -->
		

				</div><?php // END: .span12 ?>
			</div><?php // END: .row-fluid ?>
		</div><?php // END: .container-fluid ?>
	</div><?php // END: .containerwrap ?>
</div><?php // END: #main ?>

<?php get_footer(); ?>