<?php
  require_once('_global.php');

  $status = [
    "cur_page" => "eventi"
  ];
    
  $type = "subbanner";

  $sections = [ "evento" ];

  $item_id = $_GET['id'] ?? 0;

  $item = read_news_item($item_id);

  if(!isset($item)) {
    header('Location: eventi.php'); die();
  }

  $status['cur_page_title'] = $item->title;
  
  include(template($type));
?>
