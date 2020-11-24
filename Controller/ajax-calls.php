<script>

  //ajax function to update cart modal info and cart qty indicator
  function ajaxAddPerson(personName, slicesEaten, personComments){
    //ajax function
    $.ajax({
      type: "POST",
      url: "./Controller/ajax-card.php",
      data:"personName=" + personName + "&slicesEaten=" + slicesEaten + "&personComments=" + personComments,
      success: function(data){
        $("#pizza-time").html(data);
      },
      error: function(data){
        alert('An error occured while trying to add this pitiful attempt.');
      },

    });
  }

</script>