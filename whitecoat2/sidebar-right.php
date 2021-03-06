<?php
/** 囧
 * The Sidebar containing the main widget area.
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat2
 */

?>
<div id="secondary" class="widget-area" role="complementary">
  <?php if ( ! dynamic_sidebar( 'sidebar-right' ) ) : ?>

    <aside id="archives" class="widget">
      <h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
      <ul>
        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </aside>

    <aside id="meta" class="widget">
      <h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </aside>

  <?php endif; // end sidebar widget area ?>
</div><?php // END: #secondary ?>


