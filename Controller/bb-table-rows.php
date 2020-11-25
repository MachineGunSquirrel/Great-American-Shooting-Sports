<?php
  //print each coupon in array
  function makeRow($name, $slices, $comment, $colNum){
    echo "
      <div class='pizza-time-person border-shadow'>
        <div class='pizza-time-name'>
          <h2>
            {$name}
          </h2>
          <p>{$comment}</p>
        </div>
        <h2 class='pizza-time-slices-eaten'>
          Slices Eaten: 
          <br>{$slices}
        </h2>
      </div>
    ";
  }

?>