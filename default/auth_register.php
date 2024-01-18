<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Registers</title>
    <!-- Include SweetAlert in the head section -->
    <script src='sweetalert.min.js'></script>
</head>
<body>

<?php

include('dbcon.php');
$successMessage = ''; // Define and initialize $successMessage
$message = ''; // Initialize $message variable

if (isset($_POST['register_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['fullname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['confirm_password']);

    // Check if email already exists in the database
    $check_email_query = "SELECT * FROM users WHERE email = '$email'";
    $check_email_result = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_result) > 0) {
        // Email already exists
        $_SESSION['message'] = "Email already exists";
        echo "<script>swal('Email already exists!', { button: 'Enter!' }).then(() => {
            window.location.href = 'auth-reg.php';
        });</script>";
        exit();
    }

    // Proceed with registration if email is not found in the database
    if ($password == $cpassword) {
        $insert_data = "INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($con, $insert_data);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);
            $insert_data_run = mysqli_stmt_execute($stmt);

            if ($insert_data_run) {
                $_SESSION['message'] = "Registered";
                echo "<script>swal('Register Successful!', { button: 'Enter!' }).then(() => {
                    window.location.href = 'auth-login.php';
                });</script>";
                exit();
            } else {
                $_SESSION['message'] = "Registration failed: " . mysqli_error($con);
                echo "<script>swal('Register again!', { button: 'Enter!' }).then(() => {
                    window.location.href = 'auth-reg.php';
                });</script>";
                exit();
            }
        } else {
            $_SESSION['message'] = "Prepared statement error: " . mysqli_error($con);
            echo "<script>swal('Register again!', { button: 'Enter!' }).then(() => {
                window.location.href = 'auth-reg.php';
            });</script>";
            exit();
        }
    } else {
        // Passwords don't match
        $_SESSION['message'] = "Passwords don't match";
        echo "<script>swal('Register again!', { button: 'Enter!' }).then(() => {
            window.location.href = 'auth-reg.php';
        });</script>";
        exit();
    }
} 

// Rest of your login logic...


if (isset($_POST['login_btn'])) {
    $login_email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_data = "SELECT * FROM users WHERE email = '$login_email'";
    $login_data_run = mysqli_query($con, $login_data);

    if ($login_data_run && mysqli_num_rows($login_data_run) > 0) {
        $userdata = mysqli_fetch_array($login_data_run);
        $user_email = $userdata['email'];
        $user_password = $userdata['password']; // Assuming password is stored as plaintext
        $role_as = $userdata['role_as']; // Assuming 'role_as' contains '1' for admin or '0' for staff

        if ($password === $user_password) {
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = [
                'email' => $user_email
            ];
            $_SESSION['role_as'] = $role_as;

            if ($role_as === '1') {
                // Redirect admin to dashboard
                $_SESSION['message'] = "Welcome to Dashboard";
                header('Location: ../index.php');
                exit();
            } else {
                // Redirect staff to their page
                $_SESSION['message'] = "Logged in successfully";
                header('Location: ../pos.php');
                exit();
            }
        } else {
            $_SESSION['message'] = "Incorrect password";
            header('Location: auth-login.php');
            exit();
        }
    } else {
        $_SESSION['message'] = "Invalid credentials";
        header('Location: ../index.php');
        exit();
    }
}

?>
</body>
</html>
