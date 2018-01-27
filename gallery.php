<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "galleria",
  ];
    
  $type = "subbanner";

  $sections = [ "gallery" ];

  include(template($type));
?>
