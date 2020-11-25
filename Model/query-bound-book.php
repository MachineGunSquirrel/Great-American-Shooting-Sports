<?php
class Gat {

  public function __construct($db){
    $this->conn = $db;
  }

  function pizzaRead(){
    //select all firearms from db
    $query = "SELECT * FROM firearms";
    //prepare query statement
    $stmt = $this->conn->prepare($query);
    //execute query
    $stmt->execute();
    //return values
    return $stmt;
  }
}

?>