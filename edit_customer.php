<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
    <style>
        .edit-customer-container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .edit-customer-container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: inline-block;
            width: 120px;
            text-align: right;
            margin-right: 10px;
        }
        .form-group input[type="text"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: calc(100% - 130px);
        }
        .form-group .customer-id {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .form-group input[type="submit"] {
            padding: 8px 16px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #d32f2f;
        }
        .customer-id {
            font-size: 18px;
            margin-bottom: 10px;
            /* Add more styles as needed */
        }
    </style>
    <script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
</head>
<body>
    <div class="edit-customer-container">
        <h2>Edit Customer</h2>
        <?php
        include 'dbcon.php'; // Include the database connection file

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['customer'])) {
            $customerId = $_GET['customer'];

            // Fetch customer details from the database based on the provided ID
            $sql = "SELECT * FROM customer WHERE id = '$customerId'";
            $result = $con->query($sql);

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
<form method="post">
        <!-- Display customer ID as non-editable text -->
        <div class="customer-id">
            Customer ID: <?php echo $row['id']; ?>
            <!-- Add a hidden input field to hold the customer ID -->
            <input type="hidden" name="customer_id" value="<?php echo $row['id']; ?>">
        </div>
                    
        <!-- Display fields for updating -->
        <div class="form-group">
            <label for="customer_name">Customer Name:</label>
            <input type="text" id="customer_name" name="customer_name" value="<?php echo $row['customer_name']; ?>">
        </div>

        <div class="form-group">
            <label for="product">Product:</label>
            <input type="text" id="product" name="product" value="<?php echo $row['product']; ?>">
        </div>

        <!-- Add more fields as needed -->

        <input type="submit" value="Update">
    </form>
        <?php
            } else {
                echo "Customer not found";
            }
        }  elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle form submission for updating customers
            $customerName = $_POST['customer_name'];
            $product = $_POST['product'];
            $customerId = $_POST['customer_id'];
    
            // Update customer details based on product and other criteria
            $sql = "UPDATE customer SET customer_name = '$customerName', product = '$product' WHERE id = '$customerId'";
            
            if ($con->query($sql) === TRUE) {
                // Redirect to addcustomerlist.php after successful update
                header("Location: addcustomerlist.php");
                exit();
            } else {
                echo "Error updating customer details: " . $con->error;
            }
        } else {
            echo "No customer ID provided";
        }
    ?>
    </div>
</body>
</html>
    
 