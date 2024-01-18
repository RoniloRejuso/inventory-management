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
    <div class="container">
      <div class="row d-flex">
        <div class="col-12 align-self-center">
            <div class="card">
              <div class="card-body auth-header-box">
                <div class="text-center">
                  <h3 style="font-family: Arial, Helvetica, sans-serif; color: #ffffff;">
                    Let's Get Started
                  </h3>
                  <h4 class="text-muted">Sign up to create an account</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content">
                    <form class="auth-form">
                      <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Enter fullname">
                      </div>
                      <div class="form-group">
                        <label for="useremail">Email</label>
                        <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                      </div> 
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                      </div>
                      <div class="form-group">
                        <label for="mo_number">Mobile Number</label>
                        <input type="text" class="form-control" id="mo_number" placeholder="Enter mobile number">
                      </div>
                      <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                      </div>
                      <div class="form-group">
                        <label for="conf_password">Confirm Password</label>
                        <input type="password" class="form-control" id="conf_password" placeholder="Confirm password">
                      </div>
                      <div class="signin-container">
                        <h5 class="text-muted">Already have an account? <a href="auth-login.html" class="text-primary">Log in</a></h5>
                        <button class="btn btn-primary btn-block btn-sm waves-effect waves-light" type="button" id="sa-warning">Register</button>
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
    </div>
  </div>
  
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>

</body>
</html>
