<?php include("conn.php") ?>
<?php
if (isset($_POST["email"])) {
  $data = "";

  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  $role = $_POST["role"];
  if (isset($_POST["agency"])) {
    $agency = $_POST["agency"];
  } else {
    $agency = "";
  }


  $pass = password_hash($password, PASSWORD_DEFAULT);
  $token = bin2hex(random_bytes(16));

  $check_email = "select * from users where email = '$email' ";

  $run_check_email = mysqli_query($con, $check_email);
  if ($run_check_email) {
    if (mysqli_num_rows($run_check_email) > 0) {
      $data .= "Email alredy exist";
    } else {
      $insert_user = "insert into users(first_name,last_name,email,phone,password,role,signup_date,token,agency_name) values('$first_name','$last_name','$email','$phone','$pass','$role',NOW(),'$token','$agency')";

      $run_insert_user = mysqli_query($con, $insert_user);
      if ($run_insert_user) {
        $data .= "Well done" . " " . $first_name . ", " . "account created successfully!";
      } else {
        $data .= (mysqli_error($con));
      }
    }
  } else {
    $data .=  (mysqli_error($con));
  }
}

echo $data;
