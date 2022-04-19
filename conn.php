<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_rental_agency";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
