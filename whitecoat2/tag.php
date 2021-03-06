<?php
/** 囧
 * The template used to display Tag Archive pages
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

          <section id="primary">
            <div id="content" role="main">
      
            <?php if ( have_posts() ) : ?>
      
              <header class="page-header">
                <h1 class="page-title"><?php
                  printf( __( 'Tag Archives: %s', 'twentyeleven' ), '<span>' . single_tag_title( '', false ) . '</span>' );
                ?></h1>
      
                <?php
                  $tag_description = tag_description();
                  if ( ! empty( $tag_description ) )
                    echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
                ?>
              </header>
      
              <?php twentyeleven_content_nav( 'nav-above' ); ?>
      
              <?php /* Start the Loop */ ?>
              <?php while ( have_posts() ) : the_post(); ?>
      
                <?php
                  /* Include the Post-Format-specific template for the content.
                   * If you want to overload this in a child theme then include a file
                   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                   */
                  get_template_part( 'contents/content', get_post_format() );
                ?>
      
              <?php endwhile; ?>
      
              <?php twentyeleven_content_nav( 'nav-below' ); ?>
      
            <?php else : ?>
      
              <article id="post-0" class="post no-results not-found">
                <header class="entry-header">
                  <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                </header><!-- .entry-header -->
      
                <div class="entry-content">
                  <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
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

				</div>
			
				
				<div class="span3">
					<?php get_sidebar(); ?>
				</div>

			</div><?php // END: .row-fluid ?>
		</div><?php // END: .container-fluid ?>
	</div><?php // END: .containerwrap ?>
</div><?php // END: #main ?>
<?php get_footer(); ?>
