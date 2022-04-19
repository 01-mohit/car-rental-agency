<?php
session_start();
include("conn.php");
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
<?php } ?>

<div class="table-responsive">

  <table class="table text-center">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th>Customer Name</th>
        <th scope="col">Vehicle model</th>
        <th scope="col">Vehicle number</th>
        <th scope="col">Seating capacity</th>
        <th scope="col">Rent per day</th>



      </tr>
    </thead>
    <tbody>
      <?php
      $user_id = $_POST['user_id'];
      $vehicle = "select * from vehicle_details vd, car_booking cb where vd.booking_status = 'booked' and vd.users_id = $user_id and vd.users_id = cb.agency_id  order by vd.vehicle_id DESC;";
      $run_vehicle = mysqli_query($con, $vehicle);
      if ($run_vehicle) {


        if (mysqli_num_rows($run_vehicle) > 0) {
          while ($array = mysqli_fetch_assoc($run_vehicle)) {


      ?>
            <tr>
              <th scope="row"><?php echo $array["vehicle_id"] ?></th>
              <th><?php echo $array["user_name"] ?></th>
              <td><?php echo $array["vehicle_model"] ?></td>
              <td><?php echo $array["vehicle_number"] ?></td>
              <td><?php echo $array["seating_capacity"] ?></td>
              <td><?php echo $array["rent_per_day"] ?></td>
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