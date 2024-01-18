<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <link rel="shortcut icon" href="assets/img/badbunny.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <style>
    .form-group {
      margin-bottom: 20px;
    }

  </style>
  <body>
    <div class="row">
      <div class="title-header">
        <h5 style="color: #ffffff">SALES AND INVENTORY MANAGEMENT SYSTEM</h5>
      </div>
    </div>
    <div class="image-container">
      <img src="assets/img/badbunny-removebg-preview.png" alt="Pic" class="text-img">
    </div>
    <div class="container">
      <div class="row d-flex">
        <div class="col-12 align-self-center">
          <div class="card">
            <div class="card-body p-4 auth-header-box">
              <div class="text-center p-3">
                <h3 style="font-family: Arial, Helvetica, sans-serif; color: #ffffff;">
                  Let's Get Started
                </h3>
                <h4 class="text-muted">Log in to continue</h4>
              </div>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                  <form class="auth-form">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                      <label for="userpassword">Password</label>
                      <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                    </div>
                    <div class="login-container">
                      <a href="auth-recover-pw.html" class="text-primary">Forgot Password?</a>
                      <button class="btn btn-primary btn-block" type="button">
                        Log In
                      </button>
                    </div>
                  </form>
                  <h5 class="text-muted"> Don't have an account?
                    <a href="auth-register.html" class="text-primary">Register here</a>
                  </h5>
                </div>
              </div>
            </div>
            <div class="card-body bg-light-alt text-center">
              <h5 class="text-muted">Bad Bunny SIMS © 2023</h5>
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
