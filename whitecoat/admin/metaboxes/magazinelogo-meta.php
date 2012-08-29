<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control metabox">
  
  <div class="container_12">
    <?php $mb->the_field('logo_imgurl'); ?>
    <?php $wpalchemy_media_access->setGroupName('nn')->setInsertButtonLabel('Set as Logo')->setTab('type'); ?>    
    <div class="grid_12">
      <?php
        if($mb->get_the_value()){
          echo '<img class="responsive" src="'.$mb->get_the_value().'" />';
        }
      ?>
      
      <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
      <hr>
    </div><?php // END:.grid_12 ?>
    <div class="clear"></div>
    
    <div class="grid_12">
      <p style="margin-bottom:15px; padding-top:5px;">
      <?php echo $wpalchemy_media_access->getButton(array('label' => 'Set Logo')); ?>
      </p>
      Changes made to this field will only take effect after you <strong>Save</strong> or <strong>Update</strong>.
    </div>
    <div class="clear"></div>
  </div><?php // END: .container_12 ?>    
 
</div>