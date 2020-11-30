  <!-- Footer -->
  <div class='page-footer-grid'>

<?php
  $uri = $_SERVER['REQUEST_URI'];
  if($uri = '/FIT-Web-Course/Project/Great-American-Shooting-Sports/Index.php'){
    echo("
      <button id='modal' class='btn btn-contact-us'>
        Contact Us
      </button>
  ");
  }

  $database = new Database();
  $db = $database->connect();

  $product = new Customer($db);

?>


<!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <!-- Field inputs -->
          <label for='firstName'>First Name:</label>
          <input type="text" id='firstName' placeholder='John'>

          <label for="lastName">Last Name</label>
          <input type="text" id='lastName' placeholder='Doe'>

          <label for="addressLine1">Address Line 1</label>
          <input type="text" id='addressLine1' placeholder='123 Cherry St. NE'>

          <label for="addressLine2">Address Line 2</label>
          <input type="text" id='addressLine2' placeholder='Apt. 1'>
          
          <label for="city">City</label>
          <input type="text" id='city' placeholder='New York'>

          <label for="state">State</label>
          <input type="text" id='state' placeholder='NY'>

          <label for="zipCode">Zip Code</label>
          <input type="number" id='zipCode' placeholder='55555'>

          <label for="phoneNumber">Phone Number</label>
          <input type="tel" id='phoneNumber' placeholder='420-555-6969'>

        <!-- Submit button -->
          <button class='btn btn-book' 
                  name='submitForm' 
                  style='margin-top: 20px; margin-left: 0px; width: 100%'
                  onclick="ajaxAddPerson(document.getElementById('firstName').value, 
                                         document.getElementById('lastName').value,  
                                         document.getElementById('addressLine1').value, 
                                         document.getElementById('addressLine2').value,
                                         document.getElementById('city').value, 
                                         document.getElementById('state').value, 
                                         document.getElementById('zipCode').value, 
                                         document.getElementById('phoneNumber').value)">
          Submit</button>
        
        <div id='message-return'></div>

      </div>

  </div>
<!-- Modal scripting -->
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("modal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</div>
</div>
</body>

</html>