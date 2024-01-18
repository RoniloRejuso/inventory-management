<?php
session_start();

// Check if the form is submitted
if (isset($_POST["reset"])) {
    $_SESSION['email'] = $_POST["email"];

    // Check if the email is set in the session
    if (isset($_SESSION['email'])) {
        // Email is set, perform necessary actions and redirect
        header("Location: change_pass.php");
        exit();
    } else {
        // Email is not set in the session
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
                Swal.fire({
                    title: 'Error',
                    text: 'Email is not set in the session!',
                    icon: 'error',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'change_pass.php';
                });
            </script>";
        exit(); // Terminate further execution
    }
} else {
   
}
?>
