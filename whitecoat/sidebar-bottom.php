<?php
/** 囧
 * The Sidebar containing the main widget area.
 *
 * @package PIGGYBACK
 * @subpackage Whitecoat_Colombo
 */
?>
<?php
$show_sidebar_bottom = FALSE;
$sidebarCount = 0;

for($i=1; $i <= 4; $i++){
  if(is_active_sidebar('sidebar-bottom'.$i)){
    $sidebarCount++;
  }
}

/**
 * Show only when there are active widgets in this area
 */
if($sidebarCount)  $show_sidebar_bottom = TRUE;

  
/**
 * Show only when there are active widgets in this area
 */
if($show_sidebar_bottom){
?>
  <div id="bottom">
    <div class="containerwrap">
      <div class="container-fluid">
        <div class="row-fluid">
          <?php
          $spanClass = 12 / $sidebarCount;
          
          for($i=1; $i <= $sidebarCount; $i++){
            echo '<div class="span'.$spanClass.'">';
            dynamic_sidebar('sidebar-top'.$i);
            echo '</div>';
          }
          ?>
        </div><?php // END: .row-fluid ?>
      </div><?php // END: .container-fluid ?>
    </div><?php // END: .containerwrap ?>
  </div><?php // END: #bottom ?>

<?php  
}
?>


