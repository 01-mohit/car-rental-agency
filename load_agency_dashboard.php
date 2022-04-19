<?php
session_start();
include("conn.php");
if (!isset($_SESSION['user_email'])) {
?>

<?php
  // header("location: login.php");
} else {
  $email = $_SESSION["user_email"];
  $query = "select * from users where email = '$email' ";
  $run_query = mysqli_query($con, $query);
  $fetch_data = mysqli_fetch_assoc($run_query);
  $first_name = $fetch_data["first_name"];
  $user_id = $fetch_data["user_id"];
}
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
        <!-- <th scope="col">Edit Info</th> -->


      </tr>
    </thead>
    <tbody>
      <?php
      $vehicle = "select * from vehicle_details where users_id = '$user_id' order by vehicle_id DESC";
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

              <!-- <td><button name="" data-userid="<?php echo $array["users_id"]; ?>" data-vehicle="<?php echo $array["vehicle_id"]; ?>" class="btn btn-primary" id="edit_item">Edit</button></td> -->
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