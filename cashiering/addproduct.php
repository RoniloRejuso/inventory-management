<?php 
include 'dbcon.php'; // Include the database connection file

if (isset($_POST['add_product_btn'])) {
    $product = $_POST['product'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $unit = $_POST['unit'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    

    // File upload handling
    $targetDir = "uploads/"; // Directory where the files will be stored
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        // Insert data into the 'sales' table
        $sql = "INSERT INTO products (product, category, brand, unit, quantity, price, status, image)
        VALUES ('$product', '$category', '$brand', '$unit', '$qty', '$price', '$status', '$targetFile')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "File upload failed";
    }
};

?>