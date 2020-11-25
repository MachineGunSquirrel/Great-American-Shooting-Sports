<?php

//check to see if the customer creation from was just submitted
if (isset($_POST['submitForm'])) {
    require './Model/query-consumer.php';

  // Used to remove special encoded characters
  // https://www.w3schools.com/php/filter_sanitize_string.asp
  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  // Variables
    // Customer Contact Info
      // Trim removes spaces around data example: ' nameHere ' TO-> 'nameHere'
      // htmlentities changes special character like: 
        // '&' TO '&amp;'
        // '<' TO '&lt;'
        // '"' TO '&quot;'
      // and by adding single quotes around the entire string
      // which this helps protect against SQL injection attacks
      $personName = trim(htmlentities($POST['personName']));
      $slicesEaten = trim(htmlentities($POST['slicesEaten']));
      $personComments = trim(htmlentities($POST['personComments']));
    // Customer Contact Info
  // Variables
  
  // Customer array & db insert
    /* 
      Creates an array that stores gathered information from the form
      and send that array to the query-customer.php page to insert to db
    */
      $consumerData = [
        "personName" => $personName,
        "slicesEaten" => $slicesEaten,
        "personComments" => $personComments
      ];
    // Customer Info Array

    // Insert info to db
      $consumer = new Consumer($db);
      $customerPurchaseId = $consumer->addAttempt($consumerData);
    // Insert info to db
  // Customer array & db insert  

  //display an alert thanking the customer for their account creations
  echo "
  <script>   
    alert(\"Thank you {$personName} for submitting your attempt. Unfortunately it does not live up to the Revenant King's record, but it will be recorded as an embarassment anyway.\");
  </script>
      ";
 
}
?>