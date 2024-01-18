<?php
include 'dbcon.php'; // Include the database connection file

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the row data based on the ID
    $sql = "SELECT * FROM sales WHERE id = ?";
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
            <form method="POST" action="sales_process.php" style="margin-top: 1px;">
    <!-- Hidden field to pass ID for updating -->
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Product: <input type="text" name="product" value="<?php echo $row['product']; ?>" maxlength="50"><br>
    Quantity: <input type="number" id="qty" name="qty" value="<?php echo $row['qty']; ?> " maxlength="9"><br>
    Price: <input type="text" id="price" name="price" value="<?php echo $row['price']; ?>" maxlength="9"><br>
    Total: <input type="text" id="total" name="total" value="<?php echo $row['total']; ?>" maxlength="9"><br>
    Amount: <input type="text" id="amount" name="amount" value="<?php echo $row['amount']; ?>" maxlength="9"><br>
    Change: <input type="text" id="change" name="change" value="<?php echo $row['change']; ?>" maxlength="9"><br>
    <input type="submit" name="update_sales_btn" value="Update">
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var qtyInput = document.getElementById('qty');
  var priceInput = document.getElementById('price');
  var totalInput = document.getElementById('total');
  var amountInput = document.getElementById('amount');
  var changeInput = document.getElementById('change');

  qtyInput.addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  priceInput.addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  totalInput.addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  amountInput.addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  changeInput.addEventListener('input', function(event) {
    this.value = this.value.replace(/[^0-9]/g, '');
  });
});
</script>
                    <?php
    } else {
        echo "No record found with that ID";
    }
} else {
    echo "No ID specified for editing";
}
?>
<?php include('includes/footer.php'); ?>
        </body>
        </html>
