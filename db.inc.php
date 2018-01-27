<?php
  require_once('config.inc.php');

  Record::$pdo = new PDO($db['cnn'], $db['username'], $db['password']);  

  function db_fetch_all($table, $order_by = null) {
    global $pdo;

    $sql = 'SELECT * FROM ' . $table;
    if($order_by)
      $sql = $sql . ' ORDER BY ' . $order_by;
      
    $q = $pdo->prepare($sql);
    $q->execute();
    return $q->fetchAll(PDO::FETCH_OBJ);
  }

  function db_fetch($table, $id) {
    global $pdo;

    $sql = 'SELECT * FROM ' . $table . ' WHERE id=?';

    $q = $pdo->prepare($sql);    
    $q->execute([$id]);
    return $q->fetch(PDO::FETCH_OBJ);
  }
?>