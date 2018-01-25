<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "Galleria",
    "cur_page_title" => "Le Nostre Foto"
  ];
    
  $type = "subbanner";

  $sections = [ "gallery" ];

  include(template($type));
?>
