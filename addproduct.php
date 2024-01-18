
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <!-- Include SweetAlert in the head section -->
    <script src='sweetalert.min.js'></script>
</head>
<body>
<?php 
include 'dbcon.php'; // Include the database connection file

if (isset($_POST['add_product_btn'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $flavor = $_POST['flavor'];
    $quantity = $_POST['quantity'];
    $unit_price = $_POST['unit_price'];
    $selling_price = $_POST['selling_price'];
    $status = $_POST['status'];

    $day = $_POST['date']; // Day input
    $month = $_POST['month']; // Month input
    $year = $_POST['year']; // Year input

    // Check if all the date components are provided
    if (!empty($day) && !empty($month) && !empty($year)) {
        // Combine the inputs to form a date string
        $entry_date = $year . '-' . $month . '-' . $day;

        // Validate the combined date string
        $dateObj = DateTime::createFromFormat('Y-m-d', $entry_date);
        if ($dateObj !== false && $dateObj->format('Y-m-d') === $entry_date) {
            // Insert data into the 'products' table
            $sql = "INSERT INTO products (brand, model, flavor, quantity, unit_price, selling_price, status, `date`)
            VALUES ('$brand', '$model', '$flavor', '$quantity', '$unit_price', '$selling_price', '$status', '$entry_date')";

            if ($con->query($sql) === TRUE) {
                // Product added successfully
                echo "<script>
                    swal('Added new Product!', 'New record created successfully', 'success')
                    .then(() => {
                        window.location.href = 'add-product.php'; // Redirect to add-product.php
                    });
                </script>";
            } else {
                // Error in SQL query
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        } else {
            // Invalid date format
            echo "Invalid date format";
        }
    } else {
        // Date components are missing
        echo "Please provide all date components (day, month, year)";
    }
}
?>



</body>
</html>
