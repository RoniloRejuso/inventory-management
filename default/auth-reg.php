<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up</title>
  <link rel="shortcut icon" href="assets/img/badbunny.jpg">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script type="text/javascript">
    function disableBack() { window.history.forward(); }
    setTimeout("disableBack()", 0);
    window.onunload = function () { null };
  </script>
  <style>
      .container {
        display: flex;
        float: left;
        margin-top: 50px;
      }
      .card {
        height: 670px;
      }
      
    </style>

</head>
<body>
<div class="image-container">
    <img src="assets/img/badbunny-removebg-preview.png" alt="Pic" class="text-img">
  </div>
  <div class="row">
  <div class="title-header">
        <h5 style="color: #ffffff">SALES AND INVENTORY MANAGEMENT SYSTEM</h5>
      </div>
  </div>
  <div class="container mt-5 mb-5 pt-3 pb-3">
    <div class="row d-flex">
      <div class="col-12 align-self-center">
        <div class="card">
          <div class="card-body auth-header-box">
            <div class="text-center">
              <h3 style="font-family: Arial, Helvetica, sans-serif; color: #ffffff;">Let's Get Started</h3>
              <h4 class="text-muted">Sign up to create an account</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <form class="auth-form" action="auth_register.php" method="post">
                <div class="form-group">
                  <label for="fullname">Full Name</label>
                  <input type="text" maxlength="50" class="form-control" name="fullname" id="fullname" placeholder="Enter fullname">
                </div>

                <div class="form-group">
                  <label for="useremail">Email</label>
                  <input type="email" maxlength="60" class="form-control" name="email" id="email" placeholder="Enter email">
                </div> 

<!-- Password Field -->
<div class="form-group">
    <label for="userpassword">Password</label>
    <div class="input-group">
        <input type="password" maxlength="10" class="form-control" name="password" id="password" placeholder="Enter password">
        <div class="input-group-append">
            <span class="input-group-text" onclick="togglePasswordVisibility('password')">
                <i class="fas fa-eye" id="togglePassword"></i>
            </span>
        </div>
    </div>
</div>

<!-- Confirm Password Field -->
<div class="form-group">
    <label for="conf_password">Confirm Password</label>
    <div class="input-group">
        <input type="password" maxlength="10" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm password">
        <div class="input-group-append">
            <span class="input-group-text" onclick="togglePasswordVisibility('confirm_password')">
                <i class="fas fa-eye" id="toggleConfirmPassword"></i>
            </span>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility(fieldId) {
        var passwordField = document.getElementById(fieldId);
        var toggleIcon = document.getElementById(`toggle${fieldId.replace('_', '')}`);

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        }
    }
</script>

                <div class="signin-container">
                  <h5 class="text-muted">Already have an account? <a href="auth-login.php" class="text-primary">Log in</a></h5>
                  <button class="btn btn-primary btn-block btn-sm waves-effect waves-light" type="submit" name="register_btn">Register</button>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body bg-light-alt text-center">
            <h5 class="text-muted">Bad Bunny SIMS © 2023</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>function limitPhoneNumber(element, maxLength) {
    if (element.value.length > maxLength) {
        element.value = element.value.slice(0, maxLength);
    }
}
</script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>

</body>
</html>
