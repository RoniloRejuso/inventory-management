<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forgot Password</title>

    <link rel="shortcut icon" href="assets/img/badbunny.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
<style>
  .login-container{
    margin-top: 65px;
  }
</style>
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
                  <h3 class="mt-3 mb-5" style="font-family: Arial, Helvetica, sans-serif; color: #ffffff;">Forgot Password?</h3>
                  <h5 class="text-muted" style="line-height: 1;">Enter the email address <br> associated with your account</h5>
                </div>
              </div>
              <div class="card-body">
              <form class="form-horizontal auth-form my-4" action="recover_password.php" method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group mb-3">
                      <input type="email" maxlength="20" name="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="text-center">
                  <h5 class="text-muted" style="line-height: 1;">A verification code will be sent to<br> your email to login your account</h5>
                  </div>

                  <div class="login-container">
                      <h5 class="text-muted">Remember Password?<a href="auth-login.php" class="text-primary ml-1">Log in here</a></h5>
                      <button class="btn btn-primary btn-block btn-sm waves-effect waves-light" type="submit" id="sa-warning">
                        Send Code
                      </button>
                      
                  </div>
                </form>

              </div>
              <div class="card-body bg-light-alt text-center">
                <h5 class="text-muted d-none d-sm-inline-block">Bad Bunny SIMS © 2023</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="sweetalert.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
