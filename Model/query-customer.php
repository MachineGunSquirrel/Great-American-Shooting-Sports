<?php
  class Customer{
    public function __construct($db){
      $this->conn = $db;
    }

    public function addContact($data){
      
      //variables
        $firstName = trim(htmlentities($data['firstName']));
        $lastName = trim(htmlentities($data['lastName']));
        $addressLine1 = trim(htmlentities($data['addressLine1']));
        $addressLine2 = trim(htmlentities($data['addressLine2']));
        $city = trim(htmlentities($data['city']));
        $state = trim(htmlentities($data['state']));
        $zipCode = trim(htmlentities($data['zipCode']));
        $phoneNumber = trim(htmlentities($data['phoneNumber']));
      //variables

      $query = "INSERT INTO BusinessEntities
                (FirstName, LastName, AddressLine1, AddressLine2, City, State, ZipCode, Phone)
         VALUES ('$firstName', '$lastName', '$addressLine1', '$addressLine2', '$city', '$state', '$zipCode', '$phoneNumber');
      ";

      //prepares query statement
      $results = $this->conn->prepare($query);

      //execute statement
      $results->execute();

      echo("
        <p>Thank you for your submission.</p>
      ");
    }
  }

?>