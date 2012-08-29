<?php
$filter = $_REQUEST['docs'];

if($filter){
  get_template_part('piggyback-wpdocs/'.$filter );
}else{
  get_template_part('piggyback-wpdocs/home' );
}
