<?php
session_start();
include("conn.php");
$data = "";
if (isset($_POST["email"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $query = "select * from users where email = '$email' ";
  $run_query = mysqli_query($con, $query);
  if (mysqli_num_rows($run_query) == 1) {
    $fetch_data = mysqli_fetch_assoc($run_query);
    $db_pass = $fetch_data["password"];
    $role = $fetch_data["role"];
    $pass = password_verify($password, $db_pass);
    $_SESSION["user_email"] = $email;
    if ($pass) {
      $data .= $role;
    } else {
      $data .= "You have entered incorrect password";
    }
  } else {
    $data .= "Email does not exist";
  }
}
echo $data;
