<?php 
include 'dbcon.php'; // Include the database connection file

if (isset($_POST['add_sales_btn'])) {
    $customer = $_POST['customer'];
    $date = $_POST['date'];
    $product = $_POST['product'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $total = $_POST['total'];
    $amountTendered = $_POST['amount_tendered'];
    $amountChange = $_POST['amount_change'];

    // File upload handling
    $targetDir = "uploads/"; // Directory where the files will be stored
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        // Insert data into the 'sales' table
        $sql = "INSERT INTO sales (customer, date, product, qty, price, total, amount_tendered, amount_change, image)
        VALUES ('$customer', '$date', '$product', '$qty', '$price', '$total', '$amountTendered', '$amountChange', '$targetFile')";

        if ($con->query($sql) === TRUE) {
            header("Location: addsaleslist.php");
            exit(); // Ensure that no further code is executed after the redirection
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "File upload failed";
    }
};
?>
