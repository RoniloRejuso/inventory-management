<?php
include 'dbcon.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_product_btn'])) {

    // Assuming your form has an ID field sent via POST
    $id = $_POST['id']; // Ensure you have an ID to identify the product in the database

    // Retrieve other form data
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $flavor = $_POST['flavor'];
    $qty = $_POST['quantity'];
    $unit_price = $_POST['unit_price'];
    $selling_price = $_POST['selling_price'];

    $status = $_POST['status'];

    // SQL UPDATE operation
    $sql = "UPDATE products SET brand=?, model=?, flavor=?, quantity=?, unit_price=?, selling_price=?,  status=? WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssiidssi", $brand, $model, $flavor, $qty, $unit_price, $selling_price, $status, $id);

    if ($stmt->execute()) {
        // Success message or redirection upon successful update
        echo "Product updated successfully!";
        // Redirect to a confirmation page or another page as needed
         header("Location: addproductlist.php");
        // exit();
    } else {
        // Error message if the update fails
        echo "Failed to update product.";
    }
}
?>
