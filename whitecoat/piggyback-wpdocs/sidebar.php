<?php get_template_part('piggyback-wpdocs/header'); ?>

<div id="main">
	<div class="containerwrap">
		<div class="container-fluid">
      
      <div class="row-fluid">
        <h1>Widget Areas</h1>
        <hr>
      </div>
      
			<div class="row-fluid">

				<div class="span3">
          <?php
            piggyback_get_mod('mod-style-line','Module Title','body content','Module Footer',TRUE);
          ?>
				</div>
				
			</div><?php // END: .row-fluid ?>
		</div><?php // END: .container-fluid ?>
	</div><?php // END: .containerwrap ?>
</div><?php // END: #main ?>

<?php get_template_part('piggyback-wpdocs/footer'); ?>