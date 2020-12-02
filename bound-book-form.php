<?php

    include './View/header.php';
    include './View/navbar.php';
    include './Controller/db_conn.php';
    include './Model/query-bound-book.php';
    include './Model/query-customer.php';

?>

  <!-- Bound Book Input Form -->
      <!-- <form  class='form-bound-book' action="">

        <label>Manufacturer</label>
        <input type='text' 
               class='form-control' 
               placeholder="Glock, Aero Precision"
               list='Manufacturers'>
          <datalist id="Manufacturers">
            <option value="Glock">
            <option value="Sig Sauer">
            <option value="Smith & Wesson">
            <option value="FN">
            <option value="CZ-USA">
          </datalist>
        </input>

        <label>Importer</label><br>
        <input type='text' 
               class='form-control' 
               placeholder="Kalashnikov">
        </input>

        <label>Model</label><br>
        <input type='text' 
               class='form-control' 
               placeholder="(Glock) 19, MCX">
        </input>

        <label>Caliber</label><br>
        <input type='text' 
               class='form-control' 
               placeholder="Kalashnikov"
               list='Calibers'>
          <datalist id="Calibers">
            <option value="9mm Luger">
            <option value=".45">
            <option value=".40">
            <option value=".22 LR">
            <option value="9mm">
            <option value="5.56*45 NATO">
            <option value="7.62*51 NATO">
            <option value="7.62*39mm">
            <option value="12 Guage">
            <option value="Other">
          </datalist>
        </input>
   

        <label>Action</label><br>
          <input type='text' 
                class='form-control' 
                placeholder="Semi-Automatic, Bolt-Action"
                list='Actions'>
            <datalist id="Actions">
              <option value="Semi-Automatic">
              <option value="Pump-Action">
              <option value="Bolt-Action">
              <option value="Single-Action/Double-Action">
              <option value="Other">
            </datalist>
          </input>

        <label>Type</label><br>
          <input type='text' 
                class='form-control' 
                placeholder="Pistol, Rifle"
                list='Types'>
            <datalist id="Types">
              <option value="Pistol">
              <option value="Rifle">
              <option value="Shotgun">
              <option value="Other">
            </datalist>
          </input>
      

        <label>Serial Number</label><br>
        <input type='text' 
               class='form-control' 
               placeholder="SerNo"></input>

        <input type='submit' class='btn btn-submit' value="Submit">

      </form> -->
  <!-- Bound Book Input Form -->

  <!-- Test Table -->
    <div class="limiter">
      <div class="container-table100">
        <div class="wrap-table100">
          <div class="table100 ver3 m-b-110">
            <div class="table100-head">
              <table>
                <thead>
                  <tr class="row100 head">
                    <th class="cell100 column1">Manufacturer</th>
                    <th class="cell100 column2">Importer</th>
                    <th class="cell100 column3">Model</th>
                    <th class="cell100 column4">Caliber</th>
                    <th class="cell100 column5">Action</th>
                    <th class="cell100 column6">Type</th>
                    <th class="cell100 column7">SerialNumber</th>
                  </tr>
                </thead>
              </table>
            </div>

            <div class="table100-body js-pscroll">
              <table>
                <tbody>
                  <?php
                    $database = new Database();
                    $db = $database->connect();

                    $product = new Gat($db);
                    $productGet = $product->gatRead();
                    while($row = $productGet->fetch(PDO::FETCH_ASSOC)){
                      //variables
                          $Manufacturer = $row['Manufacturer'];
                          $Importer = $row['Importer'];
                          $Model = $row['Model'];
                          $Caliber = $row['Caliber'];
                          $Action = $row['Action'];
                          $Type = $row['Type'];
                          $SerialNumber = $row['SerialNumber'];
                      //variables 

                      makeRow($Manufacturer, $Importer, $Model, $Caliber, $Action, $Type, $SerialNumber);
                    }

                    //print each row in view
                    function makeRow($Manufacturer, $Importer, $Model, $Caliber, $Action, $Type, $SerialNumber){
                      echo "
                        <tr class='row100 body'>
                          <td class='cell100 column1'>{$Manufacturer}</td>
                          <td class='cell100 column2'>{$Importer}</td>
                          <td class='cell100 column3'>{$Model}</td>
                          <td class='cell100 column4'>{$Caliber}</td>
                          <td class='cell100 column5'>{$Action}</td>
                          <td class='cell100 column6'>{$Type}</td>
                          <td class='cell100 column7'>{$SerialNumber}</td>
                        </tr>
                      ";
                    }
                  
                  ?>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php

    include './View/footer.php';

?>
