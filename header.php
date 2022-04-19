<?php
include("conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="images/rent-a-car.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="script.js"></script>

  <title>Rent a Car</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light mb-5">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img id="logo" src="images/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span id="nav_toggler" class=""><i style="display: block;" class="fa-solid fa-bars"></i><i style="display: none;" class="fa-solid fa-xmark"></i></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <?php if (!(isset($_SESSION["user_email"]))) { ?>
            <li class="nav-item">
              <a class="nav-link" href="available_cars.php">Rent A Car</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="register.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          <?php } else {

          ?>
            <li class="nav-item">
              <a class="nav-link" href="customer_dashboard.php">Rent A Car</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agency_dashboard.php">Agency Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="clearfix"></div>