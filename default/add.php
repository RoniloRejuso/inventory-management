<?php
include('dbcon.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $role_as = $_POST['role_as'];
    $code = $_POST['code'];
    $updated_time = date("Y-m-d H:i:s");

    // Insert data into the database
    $stmt = $db->prepare("INSERT INTO users (fullname, username, email, phone_number, password, cpassword, role_as, code, updated_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$fullname, $username, $email, $phone_number, $password, $cpassword, $role_as, $code, $updated_time]);

    // Redirect to a success page or display a success message
    header("Location: success.php");
    exit;
}
?>
