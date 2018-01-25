<?php
setlocale(LC_ALL, 'it_IT');

# Configuration
$menu = [
        'Home' => ['index.php', null],
        'Chi Siamo' => ['chi-siamo.php', null],
        'La Scuola' => [null, [
            'La giornata tipo' => ['giornata-tipo.php', null],
            'La didattica' => ['didattica.php', null],
            'Gli insegnanti' => ['insegnanti.php', null]        
            ]
        ],
        'Il Metodo' => ['metodo.php',null],
        'Eventi' => ['eventi.php',null],
        'Galleria' => ['gallery.php',null],
        'Sostienici' => ['donazioni.php',null],
        'Info & Iscrizioni' => [null, [
          'Contatti' => ['contatti.php', null],
          'Come Iscriversi' => ['iscrizioni.php', null],
          'Documenti' => ['documenti.php', null]
          ]
        ]
        #'Contatti' => ['contatti.php',null]        
    ];

    function section($sec) {
      return "sections/" . $sec . ".php";
    }
    function template($tpl) {
      return "templates/" . $tpl . ".php";
    }    

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
            echo "<li class=\"$class\"><a href=\"" . $item[0] . "\">" . $label . "</a>";
            if($item[1] != null) {
                echo "<ul>";
                create_menu($item[1]);
                echo "</ul>";
            }        
            echo "</li>";
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
      return array_filter(read_gallery_images(), create_function('$value', 'return $value->summary;'));
    }
    function read_gallery_images() {
      return read_gallery()->images;
    }
?>
