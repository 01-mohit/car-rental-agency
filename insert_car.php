<?php
include("conn.php");
if (isset($_POST["user_id"])) {
  $vehicle_model = $_POST["vehicle_model"];
  $vehicle_number = $_POST["vehicle_number"];
  $seating_capacity = $_POST["seating_capacity"];
  $rent_per_day = $_POST["rent_per_day"];
  $user_id = $_POST["user_id"];
  $data = "";

  $insert_car = "insert into vehicle_details(users_id,vehicle_model,vehicle_number,seating_capacity,rent_per_day) values('$user_id','$vehicle_model','$vehicle_number','$seating_capacity','$rent_per_day')";
  $run_insert_car = mysqli_query($con, $insert_car);
  if ($run_insert_car) {
    $data .= "Car added successfully";
  } else {
    $data .= mysqli_error($con);
  }
}
echo $data;
