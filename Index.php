<?php

    include './View/header.php';
    include './View/navbar.php';

?>



  <!-- Welcome Message -->
    <div class='info-grid'>

      <p>Welcome to Great American Shooting Sports! 
        Here you can buy gats and edit the Bound Book.
      </p>

    </div>

  <!-- Products -->
    <div class='trending-container-grid'>
      <h2>Trending Products</h2>
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

<?php

    include './View/footer.php';
    include './Controller/form-submit.php'

?>

