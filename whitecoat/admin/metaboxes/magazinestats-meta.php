<div class="my_meta_control">
  <?php
  /**
  * Publication Details
  *
  * @package Evergreen
  */
  ?>
  <div class="container_12">  
    <fieldset>
      <legend>Publication Details</legend>
      <!--<div class="grid_12">-->
      <!--  <p class="fade">Items display will follow the order as below.</p>-->
      <!--</div>-->
      
      <div class="grid_5">
        <h3><label>Label</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <h3><label>Data</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      <?php while($mb->have_fields_and_multi('publicationdetails')): ?>
      <?php $mb->the_group_open(); ?>
        
      
      <div class="grid_5">
        <?php $mb->the_field('label'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_4 ?>
      
      <div class="grid_5">
        <?php $mb->the_field('data'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_1">
      </div><?php // END:.grid_1 ?> 
      
      <div class="grid_1">
        
        <a href="#" class="dodelete btn-icon btn-icon-delete" title="remove this item">
          <!--<img src="<?php bloginfo('stylesheet_directory') ?>/piggyback-core/media/cpt-icons/icons-24/minus-circle.png" />-->
        </a>
        
      </div><?php // END:.grid_1 ?>
      <div class="clear"></div>
      
          
      <?php $mb->the_group_close(); ?>
      <?php endwhile; ?>
      
      <div class="grid_12">
        <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-publicationdetails button btn btn-icon-add">Add Item for Publication Details</a></p>
      </div><?php // END:.grid_12 ?>
      <div class="clear"></div>
    </fieldset>
	
  </div><?php // END:.container_12 ?>
  
  <br>
  
  <?php
  /**
  * Readership Profile 
  *
  * @package Evergreen
  */
  ?>
  <div class="container_12">  
    <fieldset>
      <legend>Readership Profile</legend>
      
      <?php
      /**
      * Gender
      */
      ?>
      <div class="grid_12">
        <h2>Gender</h2>
      </div><?php // END:.grid_12 ?>
      
      <div class="grid_5">
        <h3><label>Male %</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <h3><label>Female %</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      <div class="grid_5">
        <?php $mb->the_field('male'); ?>
      <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <?php $mb->the_field('female'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      <br>
      <hr>
      
      <?php
      /**
      * Race
      */
      ?>
      <div class="grid_12">
        <h2>Race</h2>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_5">
        <h3><label>Race group</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <h3><label>Percentage %</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      
      <?php while($mb->have_fields_and_multi('readershipprofile_race')): ?>
      <?php $mb->the_group_open(); ?>
        
      <div class="grid_5">
        <?php $mb->the_field('race'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>

      <div class="grid_5">
        <?php $mb->the_field('data'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_1">
      </div><?php // END:.grid_1 ?> 
      
      <div class="grid_1">
        <a href="#" class="dodelete btn-icon btn-icon-delete" title="remove this item"></a>
      </div><?php // END:.grid_1 ?>
      <div class="clear"></div>
      
          
      <?php $mb->the_group_close(); ?>
      <?php endwhile; ?>
     
      <div class="grid_12">
        <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-readershipprofile_race button btn btn-icon-add">Add Item for Race</a></p>
      </div><?php // END:.grid_12 ?>
      <div class="clear"></div>
      
      <br>
      <hr>
      
      <?php
      /**
      * Age
      */
      ?>
      <div class="grid_12">
        <h2>Age</h2>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_5">
        <h3><label>Age group</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <h3><label>Percentage %</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      
      <?php while($mb->have_fields_and_multi('readershipprofile_age')): ?>
      <?php $mb->the_group_open(); ?>
        
      <div class="grid_5">
        <?php $mb->the_field('age'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>

      <div class="grid_5">
        <?php $mb->the_field('data'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_1">
      </div><?php // END:.grid_1 ?> 
      
      <div class="grid_1">
        <a href="#" class="dodelete btn-icon btn-icon-delete" title="remove this item"></a>
      </div><?php // END:.grid_1 ?>
      <div class="clear"></div>
      
          
      <?php $mb->the_group_close(); ?>
      <?php endwhile; ?>
     
      <div class="grid_12">
        <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-readershipprofile_age button btn btn-icon-add">Add Item for Age</a></p>
      </div><?php // END:.grid_12 ?>
      <div class="clear"></div>
    </fieldset>
	
  </div><?php // END:.container_12 ?>
  
  <br>
  
  <?php
  /**
  * Distribution Breakdown
  *
  * @package Evergreen
  */
  ?>
  <div class="container_12">  
    <fieldset>
      <legend>Distribution Breakdown</legend>
      
      <?php
      /**
      * Region
      */
      ?>
      <div class="grid_12">
        <h2>Region</h2>
      </div><?php // END:.grid_12 ?>
      
      <div class="grid_5">
        <h3><label>Region</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <h3><label>Percentage %</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      
      <?php while($mb->have_fields_and_multi('distributionbreakdown_region')): ?>
      <?php $mb->the_group_open(); ?>
        
      <div class="grid_5">
        <?php $mb->the_field('region'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>

      <div class="grid_5">
        <?php $mb->the_field('data'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_1">
      </div><?php // END:.grid_1 ?> 
      
      <div class="grid_1">
        <a href="#" class="dodelete btn-icon btn-icon-delete" title="remove this item"></a>
      </div><?php // END:.grid_1 ?>
      <div class="clear"></div>
      
          
      <?php $mb->the_group_close(); ?>
      <?php endwhile; ?>
     
      <div class="grid_12">
        <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-distributionbreakdown_region button btn btn-icon-add">Add Item for Age</a></p>
      </div><?php // END:.grid_12 ?>
      <div class="clear"></div>
    </fieldset>
	
  </div><?php // END:.container_12 ?>
  
  <br>
  
  <?php
  /**
  * Advertising Rates
  *
  * @package Evergreen
  */
  ?>
  <div class="container_12">  
    <fieldset>
      <legend>Advertising Rates</legend>
      
      <div class="grid_5">
        <h3><label>Position</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <h3><label>Full Color</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      
      <?php while($mb->have_fields_and_multi('advertisingrates_position')): ?>
      <?php $mb->the_group_open(); ?>
        
      <div class="grid_5">
        <?php $mb->the_field('position'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>

      <div class="grid_5">
        <?php $mb->the_field('rate'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_1">
      </div><?php // END:.grid_1 ?> 
      
      <div class="grid_1">
        <a href="#" class="dodelete btn-icon btn-icon-delete" title="remove this item"></a>
      </div><?php // END:.grid_1 ?>
      <div class="clear"></div>
      
      <?php $mb->the_group_close(); ?>
      <?php endwhile; ?>
      
     
      <div class="grid_12">
        <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-advertisingrates_position button btn btn-icon-add">Add Item for Position rates</a></p>
      </div><?php // END:.grid_12 ?>
      <div class="clear"></div>
      
      <div class="grid_10">
        <?php $mb->the_field('advertisingrates_position_remarks'); ?>
        <label>Remarks</label>
        <textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
      </div>
      <div class="clear"></div>
      
      <br>
      <hr>
      
      <?php
      /**
      * Deadlines
      */
      ?>
      <div class="grid_12">
        <h2>Deadlines</h2>
      </div><?php // END:.grid_12 ?>
      
      <div class="grid_10">
        <?php $mb->the_field('advertisingrates_deadlines'); ?>
        <textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
      </div>
      <div class="clear"></div>
      
      <br>
      <hr>
      
      <?php
      /**
      * 5th COLOUR / SPOT / PANTONE COLOUR CHARGES
      */
      ?>
      <div class="grid_12">
        <h2>5th Colour / Spot / Pantone Colour Charges</h2>
      </div><?php // END:.grid_12 ?>
      
      <div class="grid_5">
        <h3><label>Colour Type</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <h3><label>Rate</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      <?php while($mb->have_fields_and_multi('advertisingrates_colourcharges')): ?>
      <?php $mb->the_group_open(); ?>
        
      <div class="grid_5">
        <?php $mb->the_field('colourtype'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>

      <div class="grid_5">
        <?php $mb->the_field('rate'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_1">
      </div><?php // END:.grid_1 ?> 
      
      <div class="grid_1">
        <a href="#" class="dodelete btn-icon btn-icon-delete" title="remove this item"></a>
      </div><?php // END:.grid_1 ?>
      <div class="clear"></div>
      
      <?php $mb->the_group_close(); ?>
      <?php endwhile; ?>
      
      <div class="grid_12">
        <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-advertisingrates_colourcharges button btn btn-icon-add">Add Item for Position rates</a></p>
      </div><?php // END:.grid_12 ?>
      <div class="clear"></div>
      
      <br>
      <hr>
      
      <?php
      /**
      * SERIES DISCOUNT
      */
      ?>
      <div class="grid_12">
        <h2>Series Discount</h2>
      </div><?php // END:.grid_12 ?>
      
      <div class="grid_5">
        <h3><label>No. of Insertions</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="grid_5">
        <h3><label>Discount Rate</label></h3>
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      <?php while($mb->have_fields_and_multi('advertisingrates_seriesdiscount')): ?>
      <?php $mb->the_group_open(); ?>
        
      <div class="grid_5">
        <?php $mb->the_field('insertions'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>

      <div class="grid_5">
        <?php $mb->the_field('rate'); ?>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_1">
      </div><?php // END:.grid_1 ?> 
      
      <div class="grid_1">
        <a href="#" class="dodelete btn-icon btn-icon-delete" title="remove this item"></a>
      </div><?php // END:.grid_1 ?>
      <div class="clear"></div>
      
      <?php $mb->the_group_close(); ?>
      <?php endwhile; ?>
      
      <div class="grid_12">
        <p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-advertisingrates_seriesdiscount button btn btn-icon-add">Add Item for Series Discount</a></p>
      </div><?php // END:.grid_12 ?>
      <div class="clear"></div>
      
      <br>
      <hr>
      
      <?php
      /**
      * Specific Position
      */
      ?>
      <div class="grid_12">
        <h2>Specific Position</h2>
      </div><?php // END:.grid_12 ?>
      
      <div class="grid_10">
        <?php $mb->the_field('advertisingrates_specificposition'); ?>
        <textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
      </div>
      <div class="clear"></div>
      
      <br>
      <hr>
      
      <?php
      /**
      * Artwork & Production
      */
      ?>
      <div class="grid_12">
        <h2>Artwork &amp; Production</h2>
      </div><?php // END:.grid_12 ?>
      
      <div class="grid_10">
        <?php $mb->the_field('advertisingrates_artworkproduction'); ?>
        <textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
      </div>
      <div class="clear"></div>
      
      <br>
      <hr>
      
      <?php
      /**
      * Advertising Agency Commission
      */
      ?>
      <div class="grid_12">
        <h2>Advertising Agency Commission</h2>
      </div><?php // END:.grid_12 ?>
      
      <div class="grid_10">
        <?php $mb->the_field('advertisingrates_commission'); ?>
        <textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
      </div>
      <div class="clear"></div>
      
    </fieldset>
	
  </div><?php // END:.container_12 ?>
  
  <br>
  
  <?php
  /**
  * Technical Information
  *
  * @package Evergreen
  */
  ?>
  <div class="container_12">  
    <fieldset>
      <legend>Technical Information</legend>
      
      <?php
      /**
      * Size & Dimensions
      */
      ?>
      <div class="grid_12">
        <h2>Size & Dimensions</h2>
      </div><?php // END:.grid_12 ?>
      
      <?php
      /** Full Page (V) */
      ?>
      <div class="grid_10">
        <h3><label>Full Page (V)</label></h3>
      </div><?php // END:.grid_10 ?>
      <div class="clear"></div>
      
      <div class="grid_5">
        <div style=" background:#fafafa; margin:5px auto; border:5px solid #ccc; width:80px; height:120px;"></div>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_5">
        <?php $mb->the_field('fullpagev_bleedsize'); ?>
        <label>Bleed Size</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
        <?php $mb->the_field('fullpagev_trimsize'); ?>
        <label>Bleed Size</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
        <?php $mb->the_field('fullpagev_typearea'); ?>
        <label>Type Area</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      <br>
      
      <?php
      /** Half Page (V) */
      ?>
      <div class="grid_10">
        <h3><label>Half Page (V)</label></h3>
      </div><?php // END:.grid_10 ?>
      <div class="clear"></div>
      
      <div class="grid_5">
        <div style=" background:#fafafa; margin:5px auto; border:5px solid #ccc; border-left-width:45px; width:40px; height:120px;"></div>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_5">
        <?php $mb->the_field('halfpagev_bleedsize'); ?>
        <label>Bleed Size</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
        <?php $mb->the_field('halfpagev_trimsize'); ?>
        <label>Bleed Size</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
        <?php $mb->the_field('halfpagev_typearea'); ?>
        <label>Type Area</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      <br>
      
      <?php
      /** Half Page (H) */
      ?>
      <div class="grid_10">
        <h3><label>Half Page (H)</label></h3>
      </div><?php // END:.grid_10 ?>
      <div class="clear"></div>
      
      <div class="grid_5">
        <div style=" background:#fafafa; margin:5px auto; border:5px solid #ccc; border-top-width:65px; width:80px; height:60px;"></div>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_5">
        <?php $mb->the_field('halfpageh_bleedsize'); ?>
        <label>Bleed Size</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
        <?php $mb->the_field('halfpageh_trimsize'); ?>
        <label>Bleed Size</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
        <?php $mb->the_field('halfpageh_typearea'); ?>
        <label>Type Area</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
      
      <br>
      
      <?php
      /** Double Page Spread */
      ?>
      <div class="grid_10">
        <h3><label>Double Page Spread</label></h3>
      </div><?php // END:.grid_10 ?>
      <div class="clear"></div>
      
      <div class="grid_5">
        <div style=" background:#fafafa; margin:5px auto; border:5px solid #ccc; width:170px; height:120px;">
          <div style=" border-right:5px solid #ccc; width:80px; height:120px;"></div>
        </div>
      </div><?php // END:.grid_5 ?>
      
      <div class="grid_5">
        <?php $mb->the_field('doublepagespread_bleedsize'); ?>
        <label>Bleed Size</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
        <?php $mb->the_field('doublepagespread_trimsize'); ?>
        <label>Bleed Size</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
        <?php $mb->the_field('doublepagespread_typearea'); ?>
        <label>Type Area</label>
        <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
        
      </div><?php // END:.grid_5 ?>
      <div class="clear"></div>
     

    </fieldset>
	
  </div><?php // END:.container_12 ?>
  
</div>