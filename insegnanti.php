<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "Gli Insegnanti",
  ];
    
  $type = "subbanner";

  $sections = [ "insegnanti" ];

  include(template($type));
?>
