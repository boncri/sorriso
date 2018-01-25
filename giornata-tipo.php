<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "La Giornata Tipo"
  ];
    
  $type = "subbanner";

  $sections = [ "giornatatipo" ];
  
  include(template($type));
?>
