<?php
session_start();
include("header.php");
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
  <?php
  // header("location: login.php");
} else {
  $email = $_SESSION["user_email"];
  $query = "select * from users where email = '$email' ";
  $run_query = mysqli_query($con, $query);
  $fetch_data = mysqli_fetch_assoc($run_query);
  $first_name = $fetch_data["first_name"];

  $user_id = $fetch_data["user_id"];
  $role = $fetch_data["role"];
  if ($role == 1) {
  ?>
    <script>
      $(document).ready(function() {
        $("body").html(" ");
        Swal.fire({
          icon: 'warning',
          title: "You are not a Customer!",
          text: "Please login or register as customer",

        }).then(function() {
          window.open('index.php', '_self');
        });

      })
    </script>
<?php
  } 
}
?>
<h1 class="text-center">Available cars to rent</h1>
<div class="container" id="customer_dashboard">


</div>
<script>
  $(document).ready(function() {
    var user_id = <?php echo $user_id; ?>;
    var user_name = <?php echo $user_id; ?>;
    // alert(user_id);

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
    loadCustomerDashboard();



  });
</script>