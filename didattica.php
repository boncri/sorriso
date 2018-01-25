<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "La Didattica"
  ];
    
  $type = "subbanner";

  $sections = [ "didattica" ];
  
  include(template($type));
?>
