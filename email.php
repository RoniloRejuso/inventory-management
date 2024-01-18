<?php
include 'mail/Exception.php';
include 'mail/PHPMailer.php';
include 'mail/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Initialize $success variable
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                    // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';               // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                           // Enable SMTP authentication
        $mail->Username   = 'rejusocute101@gmail.com';      // SMTP username
        $mail->Password   = 'ecae dvfi mhpi aozw';          // SMTP password (Your Gmail App Password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                            // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        // Recipients
        $mail->setFrom('rejusocute101@gmail.com', 'Admin');
        $mail->addAddress($email);                          // Add a recipient

        // Content
        $mail->isHTML(true);                                // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Send mail
        $mail->send();
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
        
?>

<!-- Your HTML form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mail Form</title>
    <?php include('includes/header.php')?>
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>

    

    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        form {
    width: 400px;
    background-color: #f8f8f8; /* Set an off-white background color */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 50px; /* Add margin-top to move the form down */
    border: 2px solid gold; /* Add a gold border */
}


        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="email"],
        input[type="text"],
        textarea {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
<?php include('includes/navbar.php')?>
<?php include('includes/sidebar.php')?>

<form id="emailForm" method="POST" action="">
    <!-- Form fields for composing email -->
    <h2>Compose Email</h2>
    <label for="to">To:</label>
    <input type="email" id="to" name="to" required maxlength="50"><br>
    
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required maxlength="50"><br>
    
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" required maxlength="400"></textarea><br>
    
    <input type="submit" id="email" value="Send">
</form>

<?php include('includes/footer.php')?>
<script src="sweetalert.min.js"></script>   

</body>
</html>
