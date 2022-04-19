<?php
session_start();
include("header.php");
if (!isset($_SESSION['user_email'])) {
?>
  <script>
    $(document).ready(function() {
      $("body").html(" ");
      Swal.fire({
        icon: 'warning',
        title: "You are not logged in!",
        text: "Please login to your account or register",

      }).then(function() {
        window.open('login.php', '_self');
      });

    })
  </script>
  <?php
  // header("location: login.php");
} else {
  $email = $_SESSION["user_email"];
  $query = "select * from users where email = '$email' ";
  $run_query = mysqli_query($con, $query);
  $fetch_data = mysqli_fetch_assoc($run_query);
  $first_name = $fetch_data["first_name"];
  $user_id = $fetch_data["user_id"];
  $role = $fetch_data["role"];
  if ($role == 0) {
  ?>
    <script>
      $(document).ready(function() {
        $("body").html(" ");
        Swal.fire({
          icon: 'warning',
          title: "You are not agency!",
          text: "Please login or register as agency",

        }).then(function() {
          window.open('index.php', '_self');
        });

      })
    </script>
<?php

  }
}
?>
<div class="container mt-5">
  <h1 class="text-center">Agency Dashboard</h1>
  <br>
  <h2 style="text-decoration: underline;" class="text-center"></h2>
  <button class="btn btn-lg btn-info" data-toggle="modal" data-target="#addCar_Modal" id="add_car">Add New Car</button>
  <button class="btn btn-lg btn-success" id="view_booked_cars">View Booked Cars</button>
  <button class="btn btn-lg btn-info" id="back">Go Back</button>
  <!-- <a href="agency_dashboard.php" class="btn btn-lg btn-info" id="back">Go Back</a> -->
  <br><br>
  <div id="agency_dashboard">

  </div>

</div>
<style>
  .modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 99999;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
  }

  .modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: .3rem;
    outline: 0;
    margin-top: 10rem;
  }

  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: scroll;
  }
</style>
<!-- Modal -->
<div class="modal fade" id="addCar_Modal" tabindex="-1" aria-labelledby="addCar_ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCar_ModalLabel">Add a New Car</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="add_new_car">
          <input type="hidden" id="user_id" value="<?php echo $user_id; ?>">
          <label class="" for="vehicle-model">Vehicle model</label>
          <input required value="" type="text" class="form-control" id="vehicle-model">
          <small id="vehicle-model-error" class="text-danger"></small><br>
          <label class="" for="vehicle-number">Vehicle number</label>
          <input required value="" type="text" class="form-control" id="vehicle-number">
          <small id="vehicle-number-error" class="text-danger"></small><br>
          <label class="" for="seating-capacity">Seating capacity</label>
          <input required value="" type="number" class="form-control" id="seating-capacity">
          <small id="seating-capacity-error" class="text-danger"></small><br>
          <label class="" for="rent-per-day">Rent per day</label>
          <input required value="" type="number" class="form-control" id="rent-per-day">
          <small id="rent-per-day-error" class="text-danger"></small><br>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="add-car" class="btn btn-primary">Add Car</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {

    $("h2").html("");
    $("#back").hide();

    function loadDashboard() {
      $.ajax({
        type: "POST",
        url: "load_agency_dashboard.php",
        success: function(data) {
          $("#agency_dashboard").html(data);
        }

      });

    }
    loadDashboard();
    $("#view_booked_cars").click(function() {
      var user_id = <?php echo $user_id ?>;
      $.ajax({
        type: "POST",
        url: "view_booked_cars.php",
        data: {
          user_id: user_id
        },
        success: function(data) {
          $("#agency_dashboard").html(data);
          $("h2").html("Showing booked cars");
          $("#back").show();
          $("#view_booked_cars").hide();
          $("#add_car").hide();

        }

      })

    });
    $("#back").click(function() {
      $.ajax({
        type: "POST",
        url: "agency_dashboard.php",
        success: function(data) {
          loadDashboard();
          $("h2").html("");
          $("#back").hide();
          $("#view_booked_cars").show();
          $("#add_car").show();
        }
      })
    })

    $("#add-car").click(function(e) {
      e.preventDefault();
      // alert("1");

      var vehicle_model = $("#vehicle-model").val();
      var vehicle_number = $("#vehicle-number").val();
      var seating_capacity = $("#seating-capacity").val();
      var rent_per_day = $("#rent-per-day").val();
      var user_id = <?php echo $user_id ?>;

      $("#rent-per-day-error").html("");
      $("#seating-capacity-error").html("");
      $("#vehicle-number-error").html("");
      $("#vehicle-model-error").html("");

      var vehicle_model_status = 0;
      var vehicle_number_status = 0;
      var seating_capacity_status = 0;
      var rent_per_day_status = 0;

      if (vehicle_model == "") {
        $("#vehicle-model-error").html("Please enter Vehicle model");
        $("#vehicle-model").focus();
      } else {
        $("#vehicle-model-error").html("");
        vehicle_model_status = 1;
      }
      if (vehicle_number == "") {
        $("#vehicle-number-error").html("Please enter Vehicle number");
        $("#vehicle-number").focus();
      } else {
        $("#vehicle-number").html("");
        vehicle_number_status = 1;
      }
      if (seating_capacity == "") {
        $("#seating-capacity-error").html("Please enter Seating capacity");
        $("#seating-capacity").focus();
      } else {
        $("#seating-capacity").html("");
        seating_capacity_status = 1;
      }
      if (rent_per_day == "") {
        $("#rent-per-day-error").html("Please enter Rent per day");
        $("#rent-per-day").focus();
      } else {
        $("#rent-per-day-error").html("");
        rent_per_day_status = 1;
      }

      if (rent_per_day_status == 1 && seating_capacity_status == 1 && vehicle_number_status == 1 && vehicle_model_status == 1) {
        // alert("1");
        $.ajax({
          type: "POST",
          url: "insert_car.php",
          data: {
            vehicle_model: vehicle_model,
            vehicle_number: vehicle_number,
            seating_capacity: seating_capacity,
            rent_per_day: rent_per_day,
            user_id: user_id
          },
          success: function(data) {
            $("#add_new_car")[0].reset();
            alert(data);
            loadDashboard();

          }

        });
      }



    })

  })
</script>