<?php get_template_part('piggyback-wpdocs/header'); ?>

<div id="main">
	<div class="containerwrap">
		<div class="container-fluid">
      
			<div class="row-fluid">
        
        <div class="span3">
          <?php get_template_part('piggyback-wpdocs/sidebar-left'); ?>
        </div>

				<div class="span6">
          <div id="primary">
            <h1>Modules</h1>
            <hr>
          <?php
            piggyback_get_mod('mod-style-line','Content','lorem ipsum blablabla...','Module Footer',TRUE);
          ?>
          </div>
				</div>
        
        <div class="span3">
          <?php get_template_part('piggyback-wpdocs/sidebar-right'); ?>
        </div>
				
			</div><?php // END: .row-fluid ?>
		</div><?php // END: .container-fluid ?>
	</div><?php // END: .containerwrap ?>
</div><?php // END: #main ?>

<?php get_template_part('piggyback-wpdocs/footer'); ?>