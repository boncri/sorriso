<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "Sostienici",
    "cur_page_title" => "Donazioni"
  ];
    
  $type = "subbanner";

  $sections = [ "donazioni" ];
  
  include(template($type));
?>
