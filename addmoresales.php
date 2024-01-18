<?php
include 'dbcon.php';

if (isset($_POST['add_sales_btn'])) {
    $customer = $_POST['customer'] ?? '';
    $date = $_POST['date'] ?? '';
    $product = $_POST['product'] ?? '';
    $qty = $_POST['qty'] ?? '';
    $price = $_POST['price'] ?? '';

    // File upload handling
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    if (isset($_FILES['image'])) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    
        // Check for file upload errors
        if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
            echo "File upload failed with error code: " . $_FILES["image"]["error"];
        } else {
            // Proceed with moving the uploaded file
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                // File uploaded successfully
                // Handle database operations or further processing here
            } else {
                echo "Error moving uploaded file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
    
}
?>
