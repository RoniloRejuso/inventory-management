<?php
include 'dbcon.php'; // Include the database connection file

if (isset($_POST['update_sales_btn'])) {
    $id = $_POST['id'];
    $customer = $_POST['customer'];
    $date = $_POST['date'];
    $product = $_POST['product'];

    $sql = "UPDATE sales SET customer=?, date=?, product=? WHERE id=?";
    $stmt = $con->prepare($sql);

    if (!$stmt) {
        die("Error in statement: " . $con->error); // Display any errors in the statement
    }

    $stmt->bind_param("sssi", $customer, $date, $product, $id);

    if ($stmt->execute()) {
        // If the update is successful, redirect back to a specific page or display a success message
        header("Location: addcustomerlist.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error; // Display any errors in execution
    }

    // Close the statement
    $stmt->close();
}


?>
