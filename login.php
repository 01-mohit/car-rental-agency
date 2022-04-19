<?php
include("header.php");
?>
<div class="container login_form" style="margin-top: 8rem;">
  <h2 class="text-center mb-4">Login to your account</h2>
  <form method="POST">
    <div class="form-group">
      <label>Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
        </div>
        <input required name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <small class="text-danger" id="email_error"></small>
    </div>
    <div class="form-group">
      <label>Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
        </div>
        <input required type="password" class="form-control" id="password" placeholder="Enetr your password">
        <div class="input-group-append">
          <div class="input-group-text"><a style="color: black;" type="button" class="show_password_s"><i class="fa-solid fa-eye"></i></a></div>
        </div>
      </div>
      <small class="text-danger" id="password_error"></small>
    </div>
    <span><button type="submit" name="login" id="login" class="btn btn-primary">Log In</button> <a style="float: right;" href="register.php">New user? Register</a></span>

  </form>
</div>
<div class="move_footer" style="margin-bottom: 190px;">

</div>
<?php
include("footer.php");
?>
<script>
  $(document).ready(function() {
    $(".show_password_s").click(function(e) {
      var pass = $("#password").val();
      e.preventDefault();
      if (pass == "") {
        alert("Enter Password");
      } else {
        alert(pass);
      }

    })
    var email_status = 0;
    var password_status = 0;
    $("#email_error").html("");
    $("#password_error").html("");
    $("#login").click(function(e) {
      e.preventDefault();
      var email = $("#email").val();
      var password = $("#password").val();


      if (email == "") {
        $("#email_error").html("Please enter email address");
        $("#email").focus();
      } else {
        $("#email_error").html("");
        email_status = 1;
      }
      if (password == "") {
        $("#password_error").html("Please enter your password");
        $("#password").focus();
      } else {
        $("#password_error").html("");
        password_status = 1;
      }

      if (password_status == 1 && email_status == 1) {

        $.ajax({
          type: "POST",
          url: "signin.php",
          data: {
            email: email,
            password: password
          },
          success: function(data) {

            if (data == "Email does not exist") {
              Swal.fire({
                icon: 'info',
                title: data,
                footer: '<a href="register.php">Register Now</a>'
              });
            } else if (data == "You have entered incorrect password") {
              Swal.fire({
                icon: 'error',
                title: data,
                // footer: '<a href="login.php">Login Now</a>'
              });
            } else {
              Swal.fire({
                icon: 'success',
                title: "Login Successfull!",
                timer: 1000,
                showConfirmButton: false
              }).then(function() {
                // alert(data);
                if (data == 1) {
                  // alert(data);
                  window.open('agency_dashboard.php', '_self');
                } else {
                  // alert(data);
                  window.open('customer_dashboard.php', '_self');
                }

              });

            }
          }

        });
      }


    })


  });
</script>