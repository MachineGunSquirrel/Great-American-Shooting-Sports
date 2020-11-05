<?php

  //setting the column variable as first column is 2
  $colNum = 2;

  //print each coupon in array
  for($index = 0; $index < count($trendingInfo); $index++){
    echo "
      <div class='product-card-grid' style='grid-column: {$colNum};>
        <h3 class='product-header-text'>
          {$trendingInfo[$index][0]}
        </h3>

        <img src='./View/Public/Images/Products/{$trendingInfo[$index][1]}.jpg'>
        
        <p class='product-description-text'>
          {$trendingInfo[$index][2]}
        </p>

        <button class='btn btn-success'>
          Add To Cart | <span>\${$trendingInfo[$index][3]}</span>
        </button>

      </div>
    ";
    //increment column num
    $colNum++;
  }

?>