<?php 
include 'dbcon.php'; // Include the database connection file

if (isset($_POST['add_sales_btn'])) {
    
    $customer = $_POST['customer'];
    $product = $_POST['product'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $id = $_POST['id']; // Assuming 'id' is part of your form

    // Calculate total, amount, and change
    $total = $qty * $price;
    $amount = floatval($_POST['amount']); // Assuming the amount paid is received through a form field named 'amount'

    if ($amount < $total) {
        echo "Error: Insufficient amount paid.";
        exit(); // Stop execution if the amount paid is less than the total
    }

    $change_amount = $amount - $total;

    // Insert data into the 'sales' table including the ID
    $sql = "INSERT INTO sales ( customer, product, qty, price,id, total, amount, `change`)
    VALUES ( '$customer', '$product', '$qty', '$price','$id', '$total', '$amount', '$change_amount')";

    if ($con->query($sql) === TRUE) {
        header("Location: addsaleslist.php");
        exit(); // Ensure that no further code is executed after the redirection
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
