<?php 
include("conn.php");
if (isset($_POST["user_id"])) {
  $days_to_rent = $_POST["days_to_rent"];
  $start_date = $_POST["start_date"];
  $date_insert = $start_date;
  $user_id = $_POST["user_id"];
  $vehicle_id = $_POST["vehicle_id"];
  $user_name = $_POST["user_name"];
  $data = "";
  $data_1 = "";

  $query = "select * from vehicle_details where vehicle_id = $vehicle_id ";
  $run_query = mysqli_query($con, $query);
  $fetch_q = mysqli_fetch_assoc($run_query);
  $agency_id = $fetch_q["users_id"];

  $book_car = "INSERT INTO `car_booking`( `user_id`,`user_name`, `vehicle_id`,`agency_id`, `start_date`, `days_to_rent`) VALUES ('$user_id','$user_name','$vehicle_id','$agency_id','$date_insert','$days_to_rent')";
  $run_book_car = mysqli_query($con, $book_car);
  if ($run_book_car) {
    $data .= "Car booked successfully";
    $update_vehicle = "update vehicle_details set booking_status = 'booked' where vehicle_id =  $vehicle_id";
    $run_update = mysqli_query($con, $update_vehicle);
  } else {
    $data .= mysqli_error($con);
  }
}
echo $data;
echo $data_1;
