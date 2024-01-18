<?php
include('dbcon.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete user by ID
    $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);

    // Redirect to a success page or display a success message
    header("Location: ../index.php");
    exit;
}
?>
