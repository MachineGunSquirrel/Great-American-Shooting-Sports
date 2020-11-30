<script>

  //ajax function to update cart modal info and cart qty indicator
  function ajaxAddPerson(firstName, lastName, addressLine1, addressLine2, city, state, zipCode, phoneNumber){
    document.getElementById('firstName').value = '';
    document.getElementById('lastName').value = '';
    document.getElementById('addressLine1').value = '';
    document.getElementById('addressLine2').value = '';
    document.getElementById('city').value = '';
    document.getElementById('state').value = '';
    document.getElementById('zipCode').value = '';
    document.getElementById('phoneNumber').value = '';

    //ajax function
    $.ajax({
      type: "POST",
      url: "./Controller/ajax-card.php",
      data:"firstName=" + firstName + "&lastName=" + lastName + "&addressLine1=" + addressLine1 + "&addressLine2=" + addressLine2
      + "&city=" + city + "&state=" + state + "&zipCode=" + zipCode + "&phoneNumber=" + phoneNumber,
      success: function(data){
        successmessage = 'Your information was successfully submitted.';
        $("#message-return").text(successmessage);
      },
      error: function(data){
        alert('An error occured.');
      },

    });
  }

</script>