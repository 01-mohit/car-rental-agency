<?php
session_start();
include("conn.php");
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
        <th scope="col">Book Car</th>


      </tr>
    </thead>
    <tbody>
      <?php
      $vehicle = "select * from vehicle_details order by vehicle_id DESC";
      $run_vehicle = mysqli_query($con, $vehicle);
      if ($run_vehicle) {


        if (mysqli_num_rows($run_vehicle) > 0) {
          while ($array = mysqli_fetch_assoc($run_vehicle)) {


      ?>
            <tr>
              <th scope="row"><?php echo $array["vehicle_id"] ?></th>
              <td><?php echo $array["vehicle_model"] ?></td>
              <td><?php echo $array["vehicle_number"] ?></td>
              <td><?php echo $array["seating_capacity"] ?></td>
              <td><?php echo $array["rent_per_day"] ?></td>

              <td><button name="" data-userid="<?php echo $array["users_id"]; ?>" data-vehicle="<?php echo $array["vehicle_id"]; ?>" class="btn btn-primary rent_car">Rent</button></td>
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
  $(".rent_car").click(function(e) {
    e.preventDefault();
    Swal.fire({
      icon: 'info',
      title: "You are not logged in!",
      footer: '<a href="login.php">Login Now</a>'
    }).then(function() {
      window.open('login.php', '_self');

    });

  });
</script>