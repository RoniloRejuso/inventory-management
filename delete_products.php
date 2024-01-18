<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Products</title>
    <!-- Include SweetAlert in the head section -->
    <script src='sweetalert.min.js'></script>
</head>
<body>
    <?php
    include 'dbcon.php';

    if (isset($_POST['delete_products_btn'])) {
        $deleteOption = $_POST['delete_option'];

        if ($deleteOption === 'delete_row') {
            if (isset($_POST['delete_criteria']) && is_array($_POST['delete_criteria'])) {
                foreach ($_POST['delete_criteria'] as $productName) {
                    // You might need additional criteria here to uniquely identify the product for deletion
                    // Construct and execute the delete query based on your database structure
                    $sql = "DELETE FROM products WHERE product = '$productName'";
                    if (!$con->query($sql)) {
                        echo "Error deleting row:  " . $con->error;
                    }
                }
                // Successful deletion message with SweetAlert
                echo "<script>
                        swal('Deletion Successful', 'Selected rows deleted successfully!', 'success')
                        .then(() => {
                            window.location.href = 'deleteproduct.php'; // Redirect to delete_products.php
                        });
                    </script>";
                exit(); // Exit to prevent further execution after displaying the SweetAlert
            } else {
                echo "No rows selected for deletion.";
            }
        } elseif ($deleteOption === 'delete_all') {
            // Code to delete all products
            $sql = "DELETE FROM products";
            if (!$con->query($sql)) {
                echo "Error deleting all rows: " . $con->error;
            } else {
                // Successful deletion message with SweetAlert
                echo "<script>
                        swal('Deletion Successful', 'All product records deleted successfully!', 'success')
                        .then(() => {
                            window.location.href = 'deleteproduct.php'; // Redirect to delete_products.php
                        });
                    </script>";
                exit(); // Exit to prevent further execution after displaying the SweetAlert
            }
        }

        
        // Redirect after processing if no SweetAlert is displayed
        header("Location: deleteproduct.php");
        exit();
    }
    ?>
</body>
</html>
