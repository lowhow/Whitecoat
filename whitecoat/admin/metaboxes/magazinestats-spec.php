<?php

$full_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_wpa_meta_magazine',
	'title' => 'Magazine Statistics',
	'types' => array('page'), // added only for pages
  //'include_template' => 'page-tpl-mag.php', // added only for page template 
	'context' => 'normal', // same as above, defaults to "normal"
	'priority' => 'low', // same as above, defaults to "high"
  
	'template' => get_stylesheet_directory() . '/admin/metaboxes/magazinestats-meta.php'
));

/* eof */