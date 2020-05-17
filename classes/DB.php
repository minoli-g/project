<?php

/**
 * Database Class
 */
class DB {

  private static $_instance = null;

  private $_pdo,
          $_query,
          $_error = false,
          $_results,
          $_count = 0;


  private function __construct()
  {
    try {
      $this->_pdo = new PDO('mysql:host='. Config::get('mysql/host') .';dbname='. Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
      //echo "conectado!";
    } catch (PDOException $e) {
      die($e->getMessage());
    }


  }

  public static function getInstance()
  {

    if(!isset(self::$_instance)) {
      self::$_instance = new DB();
    }

    return self::$_instance;
  }

  public function query($sql, $params = array())
  {
    $this->_error = false;
    if($this->_query = $this->_pdo->prepare($sql)) {
      //echo "Sucesso!";
      // echo $sql;
      // print_r($params);
      $x = 1;
      if(count($params)) {
        // echo 'kkkkkkkkkkkkkkkkkkkkkkkkkkk';
        foreach($params as $param) {
          // echo $param;
          $this->_query->bindValue($x, $param);
          $x++;
        }
      }
      // echo 'ddddddddddddddddddd';

      if($this->_query->execute()) {
        // echo "Sucesso execute()!";
        $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
        // print_r($this->_results);
        $this->_count = $this->_query->rowCount();
      } else {
        $this->_error = true;
      }
    }
    return $this;
  }

  public function action($action, $table, $where = array())
  {
    $operators = array('=','>','<','>=', '<=');
    if (count($where) === 3) {
      

      $field    = $where[0];
      $operator = $where[1];
      $value    = $where[2];


    if (in_array($operator, $operators)) {
      $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";

      if (!$this->query($sql, array($value))->error()) {
        return $this;
      }
    }
  }
    if (count($where) === 6) {

  if (in_array($where[1], $operators)) {
    $sql = "{$action} FROM {$table} WHERE {$where[0]} {$where[1]} ? AND {$where[3]} {$where[4]} ?";
    if (!$this->query($sql, array( $where[2],$where[5]))->error()) {
      return $this;
      }
    }
  }
    return false;
  }

  public function get($table, $where)
  {
    return $this->action('SELECT *', $table, $where);
  }

  public function delete($table, $where)
  {
    return $this->action('DELETE', $table, $where);
  }

  public function insert($table, $fields = array())
  {
    //if(count($fields)) {
      $keys = array_keys($fields);
      $values = null;
      $x = 1;
      foreach($fields as $field) {
        $values .= '?';
        if($x < count($fields)) {
          $values .= ', ';
        }
        $x++;
      }

      //die($values);

      $sql = "INSERT INTO {$table} (`" . implode('`,`' , $keys) . "`) VALUES ({$values})";
      //echo $sql;

      if(!$this->query($sql, $fields)->error()) {
        return true;
      }
    //}
    return false;
  }

  public function update($table, $id, $fields)
  {
    $set = '';
    $x = 1;

    foreach($fields as $name => $value) {
      $set .= "{$name} = ?";
      if($x < count($fields)) {
        $set .= ', ';
      }
      $x++;
    }
    //die($set);

    $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";

    //echo $sql;

    if (!$this->query($sql, $fields)->error()) {
      return true;
    }
    return false;

  }

  public function results()
  {
    return $this->_results;
  }

  public function first()
  {
    return $this->results()[0];
  }

  public function error()
  {
    return $this->_error;
  }

  public function count()
  {
    return $this->_count;
  }

} // fim class