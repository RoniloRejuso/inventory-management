<?php 
include 'dbcon.php'; // Include the database connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Sales</title>
    <!-- Include SweetAlert in the head section -->
    <script src='sweetalert.min.js'></script>
</head>
<body>
<?php
if (isset($_POST['add_sales_btn'])) {
    $customer = $_POST['customer'];
    $date = $_POST['date'];
    $product = $_POST['product'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];

    // File upload handling
    $targetDir = "uploads/"; // Directory where the files will be stored
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        // Insert data into the 'sales' table
        $sql = "INSERT INTO sales (customer, date, product, qty, price, image)
        VALUES ('$customer', '$date', '$product', '$qty', '$price', '$targetFile')";

        if ($con->query($sql) === TRUE) {
            // Sale added successfully
            echo "<script>
                swal('Add New Sale', 'Sale added successfully!', 'success')
                .then(() => {
                    window.location.href = 'add-sales.php'; // Redirect to add-sales.php
                });
            </script>";
        } else {
            // Error in SQL query
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        // File upload failed
        echo "File upload failed";
    }
}
?>
</body>
</html>
