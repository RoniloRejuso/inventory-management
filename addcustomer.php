<?php 
include 'dbcon.php'; // Include the database connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Customer</title>
    <!-- Include SweetAlert in the head section -->
    <script src='sweetalert.min.js'></script>
</head>
<body>
<?php
if (isset($_POST['add_customer_btn'])) {
    $id = $_POST['id'];
    $customer = $_POST['customer_name'];
    $date = $_POST['date'];
    $product = $_POST['product'];



    // Validate and format the date
$timestamp = strtotime($date);
if ($timestamp !== false) {
    $formattedDate = date('Y-m-d', $timestamp);

    // Insert data into the 'customer' table with the formatted date
    $sql = "INSERT INTO customer (id, customer_name, date, product)
    VALUES ('$id', '$customer', '$formattedDate', '$product')";

        if ($con->query($sql) === TRUE) {
            // Customer added successfully
            echo "<script>
                swal('Added new Customer!', 'New record created successfully', 'success')
                .then(() => {
                    window.location.href = 'add-customer.php'; // Redirect to add-customer.php
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
