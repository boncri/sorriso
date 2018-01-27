<?php
  setlocale(LC_ALL, 'it_IT');

  spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
  });

  require_once('config.inc.php');
  require_once('db.inc.php');

  function section($sec) {
    return "sections/" . $sec . ".php";
  }
  function template($tpl) {
    return "templates/" . $tpl . ".php";
  }    

  function format_date_medium($datetime) {
    return isset($datetime) ? strftime('%d %b %Y', $datetime) : '---';
  }
  function format_date_long($datetime) {
    return isset($datetime) ? strftime('%d %B %Y', $datetime) : '---';
  }
  function format_time($datetime) {
    return isset($datetime) ? strftime('%H.%M', $datetime) : '---';
  }

  function is_active_menu($item) {
    global $status;

    return $status['cur_page'] == $item->name;
  }
      
  function find_active_menus($menu) {
    $active = [];

    foreach($menu as $item) {
      if(is_active_menu($item))
        array_push($active, $item->name);
      if($item->children) {
        $c_active = find_active_menus($item->children);
        array_merge($active, $c_active);              
        if(count($c_active) > 0)
          array_push($active, $item->name);
      }
    }

    return $active;
  }

  function create_menu($start = null) {    
      global $status;

      if($start == null)
        $start = json_decode(file_get_contents('menu.json'));
      
      $active = find_active_menus($start);

      foreach($start as $item) {
        $name = $item->name;
        $label = $item->title;
        $link = $item->link;

        if(in_array($name, $active))
        {
          $class = 'active';  
          if(!$status['cur_page_title'])            
            $status['cur_page_title'] = $item->page_title ?? $label;
        } else
          $class = '';
        echo "<li class=\"$class\"><a href=\"$link\">$label</a>";
        if($item->children) {
            echo "<ul>";
            create_menu($item->children);
            echo "</ul>";
        }        
        echo "</li>";
      }
  }

  function read_news() {
    return News::all(['order' => 'dt_from DESC']);
  }
  function read_news_item($id) {
    return News::find($id);      
  }

  function link_news($item) {
    return "eventi-dettaglio.php?id=" . $item->id;
  }

  function read_gallery() {
    return json_decode(file_get_contents('gallery.json'));
  }
  function read_gallery_summary() {
    return array_filter(read_gallery_images(), create_function('$value', 'return $value->summary;'));
  }
  function read_gallery_images() {
    return read_gallery()->images;
  }
?>
