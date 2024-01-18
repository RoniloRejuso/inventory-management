<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Customers</title>
    <!-- Include SweetAlert in the head section -->
    <script src='sweetalert.min.js'></script>
</head>
<body>
    <?php
    include 'dbcon.php';

    if (isset($_POST['delete_customers_btn'])) {
        $deleteOption = $_POST['delete_option'];

        if ($deleteOption === 'delete_row') {
            if (isset($_POST['customer_criteria']) && is_array($_POST['customer_criteria'])) {
                foreach ($_POST['customer_criteria'] as $customerName) {
                    $sql = "DELETE FROM customer WHERE customer_name = '$customerName'";
                    if (!$con->query($sql)) {
                        echo "Error deleting row: " . $con->error;
                    }
                }
                // Successful deletion message with SweetAlert
                echo "<script>
                        swal('Deletion Successful', 'Selected rows deleted successfully!', 'success')
                        .then(() => {
                            window.location.href = 'deletecustomer.php'; // Redirect to deletecustomer.php
                        });
                    </script>";
                exit(); // Exit to prevent further execution after displaying the SweetAlert
            } else {
                echo "No rows selected for deletion.";
            }
        } elseif ($deleteOption === 'delete_all') {
            // Code to delete all customers
            $sql = "DELETE FROM customer";
            if (!$con->query($sql)) {
                echo "Error deleting all rows: " . $con->error;
            } else {
                // Successful deletion message with SweetAlert
                echo "<script>
                        swal('Deletion Successful', 'All customer records deleted successfully!', 'success')
                        .then(() => {
                            window.location.href = 'deletecustomer.php'; // Redirect to deletecustomer.php
                        });
                    </script>";
                exit(); // Exit to prevent further execution after displaying the SweetAlert
            }
        }

        // Redirect after processing if no SweetAlert is displayed
        header("Location: deletecustomer.php");
        exit();
    }
    ?>
</body>
</html>
