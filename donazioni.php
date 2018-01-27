<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "sostienici",    
  ];
    
  $type = "subbanner";

  $sections = [ "donazioni" ];
  
  include(template($type));
?>
