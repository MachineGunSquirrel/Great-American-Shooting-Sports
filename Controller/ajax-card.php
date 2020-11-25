<?php

  include './db_conn.php';

  //print the new information to cart modal
  include '../Model/query-customer.php';
             
  $database = new Database();
  $db = $database->connect();

  $data = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  $product = new Customer($db);
  $product->addContact($data);



?>