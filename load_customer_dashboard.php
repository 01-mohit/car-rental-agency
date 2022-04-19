<?php
session_start();
include("conn.php");
$user_id = $_POST["user_id"];
$role = "select * from users where user_id = $user_id";
$run_role = mysqli_query($con, $role);
$user_role = mysqli_fetch_assoc($run_role);
$roleid = $user_role["role"];
$user_name = $user_role["first_name"] . " " . $user_role["last_name"];

?>

<div class="table-responsive">

  <table class="table text-center">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Vehicle model</th>
        <th scope="col">Vehicle number</th>
        <th scope="col">Seating capacity</th>
        <th scope="col">Rent per day</th>
        <?php if ($roleid == 0) { ?>
          <th scope="col">Days to rent</th>
          <th scope="col">Start Date</th>
          <th scope="col">Rent a Car</th>
        <?php } ?>


      </tr>
    </thead>
    <tbody>
      <?php

      $vehicle = "select * from vehicle_details where booking_status = '' order by vehicle_id DESC";
      $run_vehicle = mysqli_query($con, $vehicle);
      if ($run_vehicle) {


        if (mysqli_num_rows($run_vehicle) > 0) {
          $role = "select role from users where user_id = $user_id";
          $run_role = mysqli_query($con, $role);
          $user_role = mysqli_fetch_assoc($run_role);
          $roleid = $user_role["role"];
          while ($array = mysqli_fetch_assoc($run_vehicle)) {


      ?>
            <tr>
              <th scope="row"><?php echo $array["vehicle_id"] ?></th>
              <td><?php echo $array["vehicle_model"] ?></td>
              <td><?php echo $array["vehicle_number"] ?></td>
              <td><?php echo $array["seating_capacity"] ?></td>
              <td><?php echo $array["rent_per_day"] ?></td>
              <?php if ($roleid == 0) { ?>
                <td>
                  <select class="form-control" name="days" id="days">
                    <option selected>Choose...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </td>
                <td><input class="form-control" type="date" id="start_date"></td>
                <td><button name="" data-userid="<?php echo $array["users_id"]; ?>" data-vehicle="<?php echo $array["vehicle_id"]; ?>" class="btn btn-primary book_car">Rent</button></td>
              <?php } ?>
            </tr>

        <?php

          }
        }
      } else {
        ?> <p><?php echo mysqli_error($con) ?></p> <?php
                                                  }

                                                    ?>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    function loadCustomerDashboard() {
      $.ajax({
        type: "POST",
        url: "load_customer_dashboard.php",
        data: {
          user_id: user_id
        },
        success: function(data) {
          $("#customer_dashboard").html(data);
          // loadCustomerDashboard();
        }

      });

    }
    $(".book_car").click(function(e) {
      e.preventDefault();
      var days_to_rent = $("#days").val();
      var start_date = $("#start_date").val();


      // alert(start_date);
      var days_to_rent_status = 0;
      var start_date_status = 0;
      var user_id = <?php echo $user_id ?>;
      var user_name = "<?php echo $user_name ?>";
      var vehicle_id = $(this).data("vehicle");

      // alert(days_to_rent);

      if (days_to_rent == "Choose...") {
        Swal.fire({
          icon: 'warning',
          title: "Please select days to rent",

        }).then(function() {
          $(this).focus();
        });
      } else {
        days_to_rent_status = 1;
      }

      if (start_date == "") {
        Swal.fire({
          icon: 'warning',
          title: "Please select start date",

        }).then(function() {
          $(this).focus();
        });
      } else {
        start_date_status = 1;
      }

      if (start_date_status == 1 && days_to_rent_status == 1) {
        $(this).prop('disabled', 'disabled');
        $.ajax({
          type: "POST",
          url: "book_car.php",
          data: {
            user_id: user_id,
            start_date: start_date,
            days_to_rent: days_to_rent,
            vehicle_id: vehicle_id,
            user_name: user_name
          },
          success: function(data) {
            alert(data);
            location.reload();

          }

        });
      }


    });
  });