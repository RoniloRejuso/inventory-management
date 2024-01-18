<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
include('includes/header.php');
?>
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
</head>
<body>
<?php
include('includes/navbar.php');
include('includes/sidebar.php');

include 'dbcon.php'; // Include the database connection file

// Check if there are parameters to update a sale
if (isset($_GET['customer']) && isset($_GET['date']) && isset($_GET['product'])) {
    $customer = $_GET['customer'];
    $date = $_GET['date'];
    $product = $_GET['product'];

    // Fetch the specific sales record from the database using $customer, $date, and $product
    $sql = "SELECT * FROM sales WHERE customer = '$customer' AND date = '$date' AND product = '$product'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Retrieve the data and populate the form fields
        $row = $result->fetch_assoc();
        $quantity = $row['qty'];
        $price = $row['price'];

        // Display a form pre-filled with the retrieved data for editing
        ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Edit Sale</h4>
                        <h6>Edit your sale details</h6>
                    </div>
                </div>
                <form action='update_sales.php' method='POST'>
                    <input type='hidden' name='customer' value='<?php echo $customer; ?>'>
                    <input type='hidden' name='date' value='<?php echo $date; ?>'>
                    <input type='hidden' name='product' value='<?php echo $product; ?>'>
                    <!-- Input fields with fetched data for editing (quantity, price, etc.) -->
                    <label for="customerName">Customer Name:</label>
                    <input type="text" id="customer" name="customer" class="form-control" value="<?php echo $customer; ?>" required><br><br>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" class="form-control" value="<?php echo $date; ?>" required><br><br>
                    <label for="productName">Product Name:</label>
                    <input type="text" id="productName" name="product" class="form-control" value="<?php echo $product; ?>" required><br><br>
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="qty" name="qty" class="form-control" value="<?php echo $quantity; ?>" required><br><br>
                    <label for="price">Price:</label>
                    <input type="number" id="price" name="price" step="0.01" class="form-control" value="<?php echo $price; ?>" required><br><br>
                    <input type='submit' class='btn btn-primary' name='update_sales_btn' value='Update'>
                </form>
            </div>
        </div>
        <?php
    } else {
        echo "No sales record found with the provided details.";
    }
} else {
    // Form for adding new sales
    ?>
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Sale</h4>
                    <h6>Add your new sale</h6>
                </div>
            </div>
            <form action="addsales.php" method="POST" enctype="multipart/form-data">
                <!-- Input fields for adding new sales -->
                <label for="customerName">Customer Name:</label>
                <input type="text" id="customer" name="customer" class="form-control" required><br><br>
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" class="form-control" required><br><br>
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="product" class="form-control" required><br><br>
                <label for="quantity">Quantity:</label>
                <input type="number" id="qty" name="qty" class="form-control" required><br><br>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" class="form-control" required><br><br>
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" class="form-control" required><br><br>
                <input type="submit" class="btn btn-primary" name="add_sales_btn" value="Submit">
            </form>
        </div>
    </div>
    <?php
}

include('includes/footer.php');
?>

</body>
</html>
