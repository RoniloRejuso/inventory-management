
<?php
if (isset($_POST['reset'])) {
    $email = $_POST['email'];
} else {
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                        // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'rejusocute101@gmail.com';              // SMTP username
    $mail->Password   = 'ecae dvfi mhpi aozw';               // SMTP password (Your Gmail App Password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    // Recipients
    $mail->setFrom('rejusocute101@gmail.com', 'Admin');
    $mail->addAddress($email);                                   // Add a recipient

    $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'), 0, 10);

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'To reset your password click <a href="http://localhost/inventory-management-admin-dashboard-template-main/default/change_password.php?code=' . $code . '">here </a>. </br>Reset your password in a day.';

    $con = new mysqli('localhost', 'root', '', 'badbunnydb');

    if ($con->connect_error) {
        die('Could not connect to the database.');
    }

    $verifyQuery = $con->query("SELECT * FROM users WHERE email = '$email'");

    if ($verifyQuery->num_rows) {
        $codeQuery = $con->query("UPDATE users SET code = '$code' WHERE email = '$email'");

        $mail->send();
        echo 'Message has been sent, check your email';
    }
    $con->close();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
