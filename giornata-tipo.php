<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "giornata-tipo"
  ];
    
  $type = "subbanner";

  $sections = [ "giornatatipo" ];
  
  include(template($type));
?>
