<?php
/** 囧
 * The Module for Slideshow in Home page.
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat2
 */
?>
<?php
global $piggyback;
global $post;

/**
 *  Query [piggybackflexslider] and put them into $slides array.
 */
$slides = array(); // Place all slide items as html string in array.
$slides_setup = ''; //
 
$args = array(
                'post_type'       => 'piggybackflexslider',
                'posts_per_page'  => -1,
                'orderby'         => 'menu_order',
                'order'           => 'ASC'
            );
$the_slideshow_query = new WP_Query($args);

if ($the_slideshow_query->have_posts()) : 
  while ($the_slideshow_query->have_posts()) : $the_slideshow_query->the_post();
  
    //$featimage_id = get_post_thumbnail_id();
    //$featimage_url = wp_get_attachment_image_src($featimage_id,'full');
    //$featimage_url = $featimage_url[0];
    //
    //$titleitems = explode('|',$post->post_title);

    $content =  '<div class="pb-flexslider-itemwrap">'.
                  get_the_content().
                '</div>';
    
    $slides[] = $content;
    

  endwhile;
endif;
wp_reset_postdata();


$flexslider_setup = array(
                      'animation' => 'slide',
                      'direction' => 'horizontal',
                      'animationSpeed' => 600,
                      'slideshow' => false
                    );


?>


<div id="showcase">
	<div class="containerwrap">
    
    <?php echo $piggyback->flexslider->get_flexslider('homepageslider',$slides, $flexslider_setup);?>
    
	</div><?php // END: .containerwrap ?>
</div><?php // END: #main ?>
