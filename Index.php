<?php

    session_start();
    // if(!isset($_SESSION['sessionValid'])){
    //     echo"
    //     <script>alert('session failed');</script>";
    //     header('Location: ./index.php');
    // }

    include './View/header.php';
    include './View/navbar.php';
    include './Controller/db_conn.php';
    include './Controller/ajax-calls.php';
    include './Model/query-customer.php';

    $database = new Database();
    $db = $database->connect();

    $product = new Customer($db);

?>



  <!-- Welcome Message -->
    <div class='info-grid'>

      <p>Welcome to Great American Shooting Sports! 
        Here you can buy gats and edit the Bound Book.
      </p>

    </div>

  <!-- Products -->
    <div class='trending-container-grid'>
      <button class='btn btn-primary'>Shop All</button>
        <!-- Card Container -->

          <?php
                  
                  //create array for coupon loop
                  $trendingInfo = array ( 

                      array("AR(Assault Rifle)-15", "AR15", "For lumber work and target practice.", 694.99),
                      array("Gat 1", "gat", "Small and concealable for a pleasant range experience.", 214.99),
                      array("Flintlock Pistol", "gat2", "Just as the Founding Fathers intended.", 1119.99),
                  );

                  include './Controller/trending-cards.php';
              
              ?>            

        
    </div>

  <!-- Product Type List -->
    <div class='product-type-list'>

      <!-- Product Type Card -->
      <div class='product-type-card' style="grid-row: 1;
                                              background-image: url('./View/Public/Images/product-types/rifle-glamor.jpg'); 
                                              background-size: cover">
        <h2>Rifles</h2>
      </div>
      <div class='product-type-card' style="grid-row: 2;
                                            background-image: url('./View/Public/Images/product-types/handgun-glamor.jpg'); 
                                            background-size: cover">
        <h2>Handguns</h2>
      </div>
      <div class='product-type-card' style="grid-row: 3;
                                            background-image: url('./View/Public/Images/product-types/plate-carrier-glamor.jpg'); 
                                            background-size: cover">
        <h2>Plate Carriers</h2>
      </div>


    </div>

<?php

    include './View/footer.php';

?>

