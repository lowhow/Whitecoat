<?php
$custom_mb = new WPAlchemy_MetaBox(array
(
    'id' => '_wpa_meta_magazinelogo',
    'title' => 'Magazine logo',
   	'types' => array('page'), // added only for pages
    //'include_template' => 'page-tpl-mag.php', // added only for page template 
    'context' => 'side',
    'priority' => 'low',
    'template' => get_stylesheet_directory() . '/admin/metaboxes/magazinelogo-meta.php',
));
