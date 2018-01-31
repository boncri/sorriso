<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "faq",    
  ];
    
  $type = "subbanner";

  $sections = [ "faq" ];
  
  include(template($type));
?>
