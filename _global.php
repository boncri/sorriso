<?php
setlocale(LC_ALL, 'it_IT');

# Configuration
$menu = [
        'Home' => ['index.php', null],
        'Chi Siamo' => ['chi.siamo.html', null],
        'La Scuola' => [null, [
            'La giornata tipo' => ['giornata-tipo.html', null],
            'La didattica' => ['materie.html', null],
            'Gli insegnanti' => ['insegnanti.html', null]        
            ]
        ],
        'Il Metodo' => ['metodo.html',null],
        'Eventi' => ['eventi.php',null],
        'Galleria' => ['gallery.html',null],
        'Sostienici' => ['donazioni.html',null],
        'Contatti' => ['contatti.html',null]        
    ];

    function format_date_medium($datetime) {
      return isset($datetime) ? strftime('%d %b %Y', $datetime->getTimestamp()) : '---';
    }
    function format_date_long($datetime) {
      return isset($datetime) ? strftime('%d %B %Y', $datetime->getTimestamp()) : '---';
    }
    function format_time($datetime) {
      return isset($datetime) ? strftime('%H.%M', $datetime->getTimestamp()) : '---';
    }
        
    function create_menu($start) {
        global $status;
        foreach($start as $label => $item) {
            $class = ($status['cur_page'] == $label) ? "active" : "";
            echo "<li class=\"$class\"><a href=\"" . $item[0] . "\">" . $label . "</a></li>";
            if($item[1] != null) {
                echo "<ul>";
                create_menu($item[1]);
                echo "</ul>";
            }        
        }
    }

    function sort_news($a, $b) {
      return $a->from < $b->from;
    }

    function read_news() {
      $news = json_decode(file_get_contents('news.json'));
      for($i=0; $i<count($news); $i++) {
        $news[$i]->from = DateTime::createFromFormat(DateTime::ATOM, $news[$i]->from);
        $news[$i]->to = DateTime::createFromFormat(DateTime::ATOM, $news[$i]->to);
        $news[$i]->id = $i+1;
      }
      usort($news, "sort_news");
      return $news;
    }
    function read_news_item($id) {
      $news = read_news();
      foreach($news as $item) {
        if($item->id == $id) {
          return $item;
        }
      }
      return null;
    }

    function link_news($item) {
      return "eventi-dettaglio.php?id=" . $item->id;
    }

    function read_gallery() {
      return json_decode(file_get_contents('gallery.json'));
    }
    function read_gallery_summary() {
      return array_filter(read_gallery(), create_function('$value', 'return $value->summary;'));
    }
?>
