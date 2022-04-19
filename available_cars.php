<?php 
session_start(); 
include("header.php");
?>
<h1 class="text-center">Available cars to rent</h1>
<div class="container" id="available_cars">

</div>
<script>
  $(document).ready(function() {
    function loadAvailableCars() {
      $.ajax({
        type: "POST",
        url: "load_available_cars.php",
        success: function(data) {
          $("#available_cars").html(data);
        }

      });

    }
    loadAvailableCars();

  });
</script>