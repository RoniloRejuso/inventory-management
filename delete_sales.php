<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Sales</title>
    <!-- Include SweetAlert in the head section -->
    <script src='sweetalert.min.js'></script>
</head>
<body>
    <?php
    include 'dbcon.php';

    if (isset($_POST['delete_sales_btn'])) {
        $deleteOption = $_POST['delete_option'];

        if ($deleteOption === 'delete_row') {
            if (isset($_POST['sales_criteria']) && is_array($_POST['sales_criteria'])) {
                foreach ($_POST['sales_criteria'] as $criteria) {
                    $values = explode(',', $criteria);
                    $customer = $values[0];
                    $date = $values[1];
                    $product = $values[2];

                    // Construct and execute the delete query
                    $sql = "DELETE FROM sales WHERE customer = '$customer' AND date = '$date' AND product = '$product'";
                    if (!$con->query($sql)) {
                        echo "Error deleting row: " . $con->error;
                    }
                }
                // Successful deletion message with SweetAlert
                echo "<script>
                        swal('Deletion Successful', 'Selected rows deleted successfully!', 'success')
                        .then(() => {
                            window.location.href = 'deletesales.php'; // Redirect to addsaleslist.php
                        });
                    </script>";
                exit(); // Exit to prevent further execution after displaying the SweetAlert
            } else {
                echo "No rows selected for deletion.";
            }
        } elseif ($deleteOption === 'delete_all') {
            // Code to delete all sales
            $sql = "DELETE FROM sales";
            if (!$con->query($sql)) {
                echo "Error deleting all rows: " . $con->error;
            } else {
                // Successful deletion message with SweetAlert
                echo "<script>
                        swal('Deletion Successful', 'All sales records deleted successfully!', 'success')
                        .then(() => {
                            window.location.href = 'deletesales.php'; // Redirect to addsaleslist.php
                        });
                    </script>";
                exit(); // Exit to prevent further execution after displaying the SweetAlert
            }
        }

        // Redirect after processing if no SweetAlert is displayed
        header("Location: deletesales.php");
        exit();
    }
    ?>
</body>
</html>
