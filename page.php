<?php
  $status = [
    "cur_page" => $_GET['name']
  ];
    
  $title = $_GET['title'];
  if(isset($title)) {
    $status['cur_page_title'] = $title;
  }  

  $type = $_GET['type'];

  $sections = [ $_GET['section'] ];
  
  include(template($type));
?>
