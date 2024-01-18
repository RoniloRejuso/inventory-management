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
        .custom-date-input {
    width: 200px; /* Adjust the width to your preference */
}

    </style>
        </head>
        <body>
            
            <?php include('includes/navbar.php'); ?>
            <?php include('includes/sidebar.php'); ?>
            <!-- Your form to edit the sales record -->

            <form method="POST" action="sales_customer.php" style="margin-top: 10px;">
    <!-- Hidden field to pass ID for updating -->
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Customer: <input type="text" name="customer" value="<?php echo $row['customer']; ?>" maxlength="50"><br>
    
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="form-group">
            <label style="color: orange;">Date</label>
            <input type="date" id="date" name="date" class="form-control custom-date-input" required>
        </div>
    </div>
    
    Product: <input type="text" name="product" value="<?php echo $row['product']; ?>" maxlength="50"><br>
    <input type="submit" name="update_sales_btn" value="Update">
</form>



            <?php include('includes/footer.php'); ?>

        <?php
        /**<th>Customer Name</th>
                <th>Date</th>
                <th>Product</th> */
    } else {
        echo "No record found with that ID";
    }
} else {
    echo "No ID specified for editing";
}
?>


        </body>
        </html>