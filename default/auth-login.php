


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/img/badbunny.jpg">
    <!-- Include CSS links -->
    <link rel="shortcut icon" href="assets/img/badbunny.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Additional Styles */
        .divider {
            border-top: 1px solid #ccc; /* Change color as needed */
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .login-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .login-button {
            width: 50%; /* Adjust the width as needed */
        }
        .btn-primary.active {
        background-color: blue; /* Change to the desired active color */
        color: white; /* Change text color if needed */
    }
    /* Style to position the eye icon */
.password-toggle {
    position: relative;
}

.toggle-icon {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
}
h5{
    color: white;
}

    </style>
    <script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
</head>

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
        <div class="login-buttons">
    <button class="btn btn-primary login-button staff-btn" value="Staff">
        Staff Login
    </button>
    <button class="btn btn-primary login-button admin-btn" value="Admin">
        Admin Login
    </button>
</div>
<hr class="divider" id="login-divider" style="border: 2px solid #ccc;"> <!-- Divider line -->

<form class="auth-form" action="auth_register.php" method="post">
    <div class="form-group">
        <label for="email" style="color: white;">Email</label>
        <input type="text" class="form-control" id="email" name="email" maxlength="60" placeholder="Enter email">
    </div>
    <div class="form-group">
    <label for="password" style="color: white;">Password</label>
    <div class="password-toggle">
        <input type="password" class="form-control" id="password" name="password" maxlength="15" placeholder="Enter password">
        <div class="toggle-icon" onclick="togglePassword()">
            <i class="fas fa-eye"></i>
        </div>
    </div>
</div>

    <div class="login-container">
        <button class="btn btn-primary btn-block" type="submit" name="login_btn">
            Log In
        </button>
    </div>
</form>
<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.querySelector('.toggle-icon i');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }
</script>


                                <div class="forgot-password-link">
                    <a href="change_pass.php" class="text-primary">Forgot Password?</a>
                </div>
                                
                                <h5 class="text-muted"> Don't have an account?
                                    <a href="auth-reg.php" class="text-primary">Register here</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-light-alt text-center">
                        <h5 class="text-muted" style="color: white;">Bad Bunny SIMS © 2023</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
   
    <script>
    // Add click event listeners to the buttons
    document.querySelector('.staff-btn').addEventListener('click', function() {
        document.querySelector('.staff-btn').style.backgroundColor = 'blue'; // Change to staff color
        document.querySelector('.admin-btn').style.backgroundColor = ''; // Reset admin color
        document.querySelector('#login-divider').style.borderColor = 'blue'; // Change divider color
    });

    document.querySelector('.admin-btn').addEventListener('click', function() {
        document.querySelector('.admin-btn').style.backgroundColor = 'red'; // Change to admin color
        document.querySelector('.staff-btn').style.backgroundColor = ''; // Reset staff color
        document.querySelector('#login-divider').style.borderColor = 'red'; // Change divider color
    });
</script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>
   
    
    <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="sweetalert.min.js"></script>
  
</body>
</html>
