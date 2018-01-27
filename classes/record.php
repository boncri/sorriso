<?php
class Record
{
  public static $pdo;
  
  public static function find($id) {
    $sql = 'SELECT * FROM ' . get_called_class()::$table . ' WHERE id=?';
    $q = self::$pdo->prepare($sql);
    $q->execute([$id]);
    return $q->fetchObject(get_called_class());
  }

  public static function all($options = []) {
    $sql = 'SELECT * FROM ' . get_called_class()::$table;

    if($options['where'])
      $sql = $sql . ' WHERE ' . $options['where'];
    if($options['order'])
      $sql = $sql . ' ORDER BY ' . $options['order'];

    $q = self::$pdo->prepare($sql);
    $q->execute();
    return $q->fetchAll(PDO::FETCH_CLASS, get_called_class());    
  }

  protected static function table($name) {
    $table = $name;
  }

  public function as_timestamp($field) {
    return strtotime($this->$field);
  }

  public function __set($name, $value) {
    if(strpos($name, 'dt_') === 0)    
      $this->$name = strtotime($value);
    else
      $this->$name = $value;      
  }
}
?>