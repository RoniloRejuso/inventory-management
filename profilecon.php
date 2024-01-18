<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile update</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
include 'dbcon.php'; // Include your database connection file

if (isset($_POST['register_btn'])) {
    // Collect form data
    $name = mysqli_real_escape_string($con, $_POST['fullname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if the email exists in the database
    $check_email_query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($result) == 0) {
        // Email not found in the database
        echo "<script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Do it Again',
                    icon: 'error',
                    confirmButtonColor: '#d33'
                }).then(() => {
                    window.location.href = 'profile.php';
                });
            </script>";
    } elseif (empty($name)) {
        // Name is empty
        echo "<script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Name cannot be empty',
                    icon: 'error',
                    confirmButtonColor: '#d33'
                }).then(() => {
                    window.location.href = 'profile.php';
                });
            </script>";
    } else {
        // Your SQL update query using prepared statements
        $update_query = "UPDATE users 
                        SET fullname = ?, password = ?
                        WHERE email = ?";

        $stmt = mysqli_prepare($con, $update_query);
        mysqli_stmt_bind_param($stmt, 'sss', $name, $password, $email);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>
                    Swal.fire({
                        title: 'Success!',
                        text: 'Record updated successfully',
                        icon: 'success',
                        confirmButtonColor: '#3085d6'
                    }).then(() => {
                        window.location.href = 'profile.php';
                    });
                </script>";
        } else {
            echo "<script>
                    Swal.fire({
                        title: 'Error!',
                        text: 'Error updating record: " . mysqli_error($con) . "',
                        icon: 'error',
                        confirmButtonColor: '#d33'
                    }).then(() => {
                        window.location.href = 'profile.php';
                    });
                </script>";
        }

        mysqli_stmt_close($stmt);
    }
}
?>

</body>
</html>
