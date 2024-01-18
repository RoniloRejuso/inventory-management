<?php
include 'dbcon.php'; // Include the database connection file

if(isset($_POST['update_sales_btn'])) {
    $id = $_POST['id'];
    $customer = $_POST['customer'];
    $product = $_POST['product'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $total = $_POST['total'];
    $amount = $_POST['amount'];
    $change = $_POST['change'];

    $sql = "UPDATE sales SET customer=?, product=?, qty=?, price=?, total=?, amount=?, `change`=? WHERE id=?";
$stmt = $con->prepare($sql);

// Rest of your code for binding parameters and executing the statement remains the same

    
    
    if (!$stmt) {
        die("Error in statement: " . $con->error); // Display any errors in the statement
    }
    
    $stmt->bind_param("ssssssss", $customer, $product, $qty, $price, $total, $amount, $change, $id);
    
    if ($stmt->execute()) {
        // If the update is successful, redirect back to a specific page or display a success message
        header("Location: addsaleslist.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error; // Display any errors in execution
    }
    
    // Close the statement
    $stmt->close();
    
}

?>
