<?php
session_start();
include("header.php");
?>
<div class="container mb-5">
  <div class="row">
    <div class="col-md-4 m-auto">
      <h1 class="">Car Rental Service</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <a href="#customer_form" class="btn btn-lg btn-primary">Join Now</a>

    </div>
    <div class="col-md-8">
      <img class="img-fluid" src="images/3339154.jpg" alt="hero">

    </div>
  </div>

  <hr class="mt-5 mb-5">
</div>

<style>
  .top-area {
    list-style: none;
    padding: 0;

  }

  .top-area li a {
    display: block;
    text-decoration: none;
    padding: 10px;
    background: rgb(233 236 239);
    color: #a0b3b0;
    font-size: 20px;
    float: left;
    width: 50%;
    text-align: center;
    cursor: pointer;
    transition: .5s ease;
    margin-bottom: 1rem;
    color: black;
  }

  .top-area li a:hover {
    background: #1da1f296;
    color: #ffffff;
  }

  .top-area .active_signup a {
    background: #1da1f2;
    color: #ffffff;
  }
</style>
<script>
  $(document).ready(function() {
    $("#agency_form").hide();
  })


  function tab1() {
    // alert("1");
    $(".agency").addClass("active_signup");
    $("#agency_form").show();
    $("#customer_form").hide();
    $(".customer").removeClass("active_signup");
  }

  function tab2() {
    // alert("2");
    $(".customer").addClass("active_signup");
    $("#agency_form").hide();
    $("#customer_form").show();
    $(".agency").removeClass("active_signup");
  }
</script>
<?php if (!isset($_SESSION['user_email'])) {

?>
  <div class="container register_form mb-5">
    <h3 class="text-center">Register as:</h3>
    <ul class="top-area">
      <li id="customer" class="tab customer active_signup" onclick="tab2()"><a id="a_customer">Customer</a></li>
      <li id="agency" class="tab agency" onclick="tab1()"><a id="a_agency">Agency</a></li>
    </ul>
    <form id="customer_form">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="first_name">First Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
            </div>

            <input required type="text" class="form-control" id="first_name" placeholder="Enter your First Name">


            <input type="hidden" id="role0" value="0" name="role" class="role">

          </div>
          <small class="text-danger" id="fname_error"></small>
        </div>
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="last_name">Last Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
            </div>

            <input required type="text" class="form-control" id="last_name" placeholder="Enter your Last Name">
          </div>

          <small class="text-danger" id="lname_error"></small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="email">Email Address</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
            </div>

            <input required type="email" class="form-control" id="email" placeholder="yourname@xyz.com">
          </div>

          <small class="text-danger" id="email_error"></small>
        </div>
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="phone">Phone Number</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-mobile"></i></div>
            </div>

            <input required type="number" class="form-control" id="phone" placeholder="Enter your phone number">
          </div>

          <small class="text-danger" id="phone_error"></small>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="password">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
            </div>

            <input required type="password" class="form-control" id="password" placeholder="Enter a password">
            <div class="input-group-append">

              <div class="input-group-text"><a style="color: black;" type="button" class="show_password_s"><i class="fa-solid fa-eye"></i></a></div>
            </div>
          </div>
          <small class="text-danger" id="password_error"></small>

        </div>
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="confirm_password">Confirm Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
            </div>

            <input required type="password" class="form-control" id="confirm_password" placeholder="Confirm password">
            <div class="input-group-append">

              <div class="input-group-text"><a style="color: black;" type="button" class="show_password_s"><i class="fa-solid fa-eye"></i></a></div>
            </div>
          </div>
          <small class="text-danger" id="cnf_password_error"></small>
        </div>

      </div>
      <button type="submit" style="width: 100%;" class="btn btn-primary" id="customer_form_submit">Create Account</button>
      <a style="float: right;" href="login.php">Registerd user? Login</a>
    </form>
    <form id="agency_form">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="first_name">First Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
            </div>

            <input required type="text" class="form-control" id="agency_first_name" placeholder="Enter your First Name">


            <input type="hidden" id="agency_role1" value="1" name="role" class="role">

          </div>
          <small class="text-danger" id="agency_fname_error"></small>
        </div>
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="last_name">Last Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
            </div>

            <input required type="text" class="form-control" id="agency_last_name" placeholder="Enter your Last Name">
          </div>

          <small class="text-danger" id="agency_lname_error"></small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="email">Email Address</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
            </div>

            <input required type="email" class="form-control" id="agency_email" placeholder="yourname@xyz.com">
          </div>

          <small class="text-danger" id="agency_email_error"></small>
        </div>
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="phone">Phone Number</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-mobile"></i></div>
            </div>

            <input required type="number" class="form-control" id="agency_phone" placeholder="Enter your phone number">
          </div>

          <small class="text-danger" id="agency_phone_error"></small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label class="register_form_lable" for="agency">Agency Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-building"></i></div>
            </div>

            <input required type="text" class="form-control" id="agency_agency" placeholder="Enter your agency name">
          </div>

          <small class="text-danger" id="agency_agency_error"></small>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="password">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
            </div>

            <input required type="password" class="form-control" id="agency_password" placeholder="Enter a password">
            <div class="input-group-append">

              <div class="input-group-text"><a style="color: black;" type="button" class="show_password_s"><i class="fa-solid fa-eye"></i></a></div>
            </div>
          </div>
          <small class="text-danger" id="agency_password_error"></small>

        </div>
        <div class="form-group col-md-6">
          <label class="register_form_lable" for="confirm_password">Confirm Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
            </div>

            <input required type="password" class="form-control" id="agency_confirm_password" placeholder="Confirm password">
            <div class="input-group-append">

              <div class="input-group-text"><a style="color: black;" type="button" class="show_password_s"><i class="fa-solid fa-eye"></i></a></div>
            </div>
          </div>
          <small class="text-danger" id="agency_cnf_password_error"></small>
        </div>

      </div>


      <button type="submit" style="width: 100%;" class="btn btn-primary" id="agency_form_submit">Create Account</button>
      <a style="float: right;" href="login.php">Registerd user? Login</a>
    </form>

  </div>
<?php } ?>
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
    $("#customer_form_submit").click(function(e) {
      e.preventDefault();
      // alert("1");
      $("#fname_error").html("");
      $("#lname_error").html("");
      $("#email_error").html("");
      $("#phone_error").html("");
      $("#password_error").html("");
      $("#cnf_password_error").html("");

      var first_name = $("#first_name").val();
      var last_name = $("#last_name").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var password = $("#password").val();
      var role = $("#role0").val();
      var confirm_password = $("#confirm_password").val();

      var first_name_status = 0;
      var last_name_status = 0;
      var email_status = 0;
      var phone_status = 0;
      var password_status = 0;
      var confirm_password_status = 0;


      if (first_name.match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$")) {
        first_name_status = 1;
        $("#fname_error").html("");

      } else {
        $("#fname_error").html("Only alphabets are allowed");
        $("#first_name").focus();

      }
      if (last_name.match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$")) {
        last_name_status = 1;
        $("#lname_error").html("");

      } else {
        $("#lname_error").html("Only alphabets are allowed");
        $("#last_name").focus();

      }
      if (email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        email_status = 1;
        $("#email_error").html("");

      } else {
        $("#email_error").html("Please enter valid email address");
        $("#email").focus();

      }
      if (phone.match(/^\d{10}$/)) {
        phone_status = 1;
        $("#phone_error").html("");

      } else {
        $("#phone_error").html("Please enter 10 digit number");
        $("#phone").focus();

      }
      if (password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/)) {
        password_status = 1;
        $("#password_error").html("");

      } else {
        $("#password_error").html("6 to 20 characters, at least 1 numeric digit, 1 uppercase and 1 lowercase letter");
        $("#password").focus();

      }
      if (confirm_password.match(password)) {
        confirm_password_status = 1;
        $("#cnf_password_error").html("");

      } else {
        $("#cnf_password_error").html("Enter same password");
        $("#confirm_password").focus();

      }

      if (confirm_password_status == 1 && password_status == 1 && phone_status == 1 && email_status == 1 && first_name_status == 1 && last_name_status == 1) {
        // alert(1);

        $.ajax({
          type: "POST",
          url: "signup.php",
          data: {
            role: role,
            password: password,
            phone: phone,
            email: email,
            last_name: last_name,
            first_name: first_name
          },
          success: function(data) {
            if (data == "Well done" + " " + first_name + ", " + "account created successfully!") {
              Swal.fire({
                icon: 'success',
                title: data,
                footer: '<a href="login.php">Login Now</a>'
              })
            } else {
              Swal.fire({
                icon: 'info',
                title: data,
                footer: '<a href="login.php">Login Now</a>'
              })
            }

          }

        });


      } else {
        // alert(2);
      }
    })

    $("#agency_form_submit").click(function(e) {
      e.preventDefault();
      // alert("1");
      $("#agency_fname_error").html("");
      $("#agency_lname_error").html("");
      $("#agency_email_error").html("");
      $("#agency_phone_error").html("");
      $("#agency_password_error").html("");
      $("#agency_cnf_password_error").html("");
      $("#agency_agency_error").html("");

      var first_name = $("#agency_first_name").val();
      var last_name = $("#agency_last_name").val();
      var email = $("#agency_email").val();
      var phone = $("#agency_phone").val();
      var password = $("#agency_password").val();
      var role = $("#agency_role1").val();
      var confirm_password = $("#agency_confirm_password").val();
      var agency = $("#agency_agency").val();

      var first_name_status = 0;
      var last_name_status = 0;
      var email_status = 0;
      var phone_status = 0;
      var password_status = 0;
      var confirm_password_status = 0;
      var agency_status = 0;


      if (first_name.match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$")) {
        first_name_status = 1;
        $("#agency_fname_error").html("");

      } else {
        $("#agency_fname_error").html("Only alphabets are allowed");
        $("#agency_first_name").focus();

      }
      if (last_name.match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$")) {
        last_name_status = 1;
        $("#agency_lname_error").html("");

      } else {
        $("#agency_lname_error").html("Only alphabets are allowed");
        $("#agency_last_name").focus();

      }
      if (email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        email_status = 1;
        $("#agency_email_error").html("");

      } else {
        $("#agency_email_error").html("Please enter valid email address");
        $("#agency_email").focus();

      }
      if (phone.match(/^\d{10}$/)) {
        phone_status = 1;
        $("#agency_phone_error").html("");

      } else {
        $("#agency_phone_error").html("Please enter 10 digit number");
        $("#agency_phone").focus();

      }
      if (password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/)) {
        password_status = 1;
        $("#agency_password_error").html("");

      } else {
        $("#agency_password_error").html("6 to 20 characters, at least 1 numeric digit, 1 uppercase and 1 lowercase letter");
        $("#agency_password").focus();

      }
      if (confirm_password.match(password)) {
        confirm_password_status = 1;
        $("#agency_cnf_password_error").html("");

      } else {
        $("#agency_cnf_password_error").html("Enter same password");
        $("#agency_confirm_password").focus();

      }
      if (agency.match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$")) {
        agency_status = 1;
        $("#agency_agency_error").html("");

      } else {
        $("#agency_agency_error").html("Only alphabets are allowed");
        $("#agency_agency").focus();

      }

      if (confirm_password_status == 1 && password_status == 1 && phone_status == 1 && email_status == 1 && first_name_status == 1 && last_name_status == 1 && agency_status == 1) {
        // alert(1);

        $.ajax({
          type: "POST",
          url: "signup.php",
          data: {
            role: role,
            password: password,
            phone: phone,
            email: email,
            last_name: last_name,
            first_name: first_name,
            agency: agency
          },
          success: function(data) {
            if (data == "Well done" + " " + first_name + ", " + "account created successfully!") {
              Swal.fire({
                icon: 'success',
                title: data,
                footer: '<a href="login.php">Login Now</a>'
              })
            } else {
              Swal.fire({
                icon: 'info',
                title: data,
                footer: '<a href="login.php">Login Now</a>'
              })
            }

          }

        });


      } else {
        // alert(2);
      }
    })


  });
</script>