<script>

  //ajax function to update cart modal info and cart qty indicator
  function ajaxAddPerson($firstName, $lastName, $addressLine1, $addressLine2, $city, $state, $zipCode, $phoneNumber){
    //ajax function
    $.ajax({
      type: "POST",
      url: "./Controller/ajax-card.php",
      data:"firstName=" + firstName + "&lastName=" + lastName + "&addressLine1=" + addressLine1 + "&addressLine2=" + addressLine2
      + "&city=" + city + "&state=" + state + "&zipCode=" + zipCode + "&phoneNumber=" + phoneNumber,
      success: function(data){
        $("#message-return").html(data);
      },
      error: function(data){
        alert('An error occured while trying to add this pitiful attempt.');
      },

    });
  }

</script>