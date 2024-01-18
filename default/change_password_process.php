<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Password</title>
    <!-- Include SweetAlert in the head section -->
    <script src='sweetalert.min.js'></script>
</head>
<body>

<?php
include('dbcon.php'); // Assuming this file correctly creates $conn

if ($con->connect_error) {
    die('Could not connect to the database');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];

    // Update the password for the user matching the email
    $changeQuery = $con->prepare("UPDATE users SET password = ? WHERE email = ?");
    $changeQuery->bind_param('ss', $new_password, $email);
    $changeQuery->execute();

    if ($changeQuery->affected_rows > 0) {
        // Show SweetAlert and redirect on successful password change
        echo "<script>swal('Update password successful!', { button: 'Enter!' }).then(() => {
            window.location.href = 'auth-login.php';
        });</script>";
        echo "Password changed successfully!";
        // Additional actions after a successful password change
    } else {
        echo "Error updating password: " . $con->error; // Output the MySQL error for debugging
        // You might want to log or handle this error case differently
    }
}

$con->close();
?>

    
</body>
</html>