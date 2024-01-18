<?php
include 'dbcon.php'; // Include the database connection file

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the row data based on the ID
    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Assuming you expect only one row, fetch the data
    if ($row = $result->fetch_assoc()) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Edit Sales</title>
            <!-- Include SweetAlert in the head section -->
            <script src='sweetalert.min.js'></script>
            <?php include('includes/header.php'); ?>
            <style>
        /* Center the form */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding-top: 1px; /* Adjust the top padding to move the form lower */
        }
        /* Style the form */
        form {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-left: 20px; /* Adjust margin to move it slightly left */
        }
        /* Center form elements */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    </style>
        </head>
        <body>
            <?php include('includes/navbar.php'); ?>
            <?php include('includes/sidebar.php'); ?>
            <!-- Your form to edit the sales record -->
            <form method="POST" action="search_products.php" style="margin-top: 150px;">
        <!-- Include a hidden field to pass the product ID -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        Brand: <input type="text" name="brand" value="<?php echo $row['brand']; ?>" maxlength="50"><br>
        Model: <input type="text" name="model" value="<?php echo $row['model']; ?>" maxlength="50"><br>
        Flavor: <input type="text" name="flavor" value="<?php echo $row['flavor']; ?> " maxlength="50"><br>


        Quantity: <input type="text" name="quantity" id="quantity" value="<?php echo $row['quantity']; ?>" maxlength="9"><br>
Unit Price: <input type="text" name="unit_price" id="unit_price" value="<?php echo $row['unit_price']; ?>" maxlength="9"><br>
Selling Price: <input type="text" name="selling_price" id="selling_price" value="<?php echo $row['selling_price']; ?>" maxlength="9"><br>
Status: <input type="text" name="status" value="<?php echo $row['status']; ?>" maxlength="12"><br>


        
        <input type="submit" name="update_product_btn" value="Update">
    </form>

    <script>
document.addEventListener('DOMContentLoaded', function() {
  var quantityInput = document.getElementById('quantity');
  var unitPriceInput = document.getElementById('unit_price');
  var sellingPriceInput = document.getElementById('selling_price');

  quantityInput.addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  unitPriceInput.addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  sellingPriceInput.addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });
});
</script>

            <?php include('includes/footer.php'); ?>
        </body>
        </html>
        <?php
    } else {
        echo "No record found with that ID";
    }
} else {
    echo "No ID specified for editing";
}
?>
