<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "badbunnydb";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['reset'])) {
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        $stmt = $pdo->prepare("SELECT verification_code FROM users WHERE email = ?");
        $stmt->execute([$email]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $verificationCode = $result['verification_code'];
            echo "Verification code for email $email is: $verificationCode";
            // Proceed with the verification process or further actions
        } else {
            echo "No verification code found for email: $email";
            // Handle the case where no verification code is found
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
