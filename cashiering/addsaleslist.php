<!DOCTYPE html>
<html>
<head>
    <title>Sales List</title>
    <?php include('includes/header.php') ?>
    <style>
        /* Your CSS styles for the table */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 80px; /* Increased margin to push table further down */
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: black; /* Change the background color of the table headers to black */
            color: white; /* Set the font color of the table headers to white */
        }
        .edit-btn, .delete-btn {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 3px;
            display: inline-block;
            margin-right: 5px;
        }
        .delete-btn {
            background-color: #dc3545;
        }
        /* Container for the grid layout */
        .grid-container {
            display: grid;
            grid-template-columns: 250px auto;
            grid-gap: 20px;
            margin-top: 80px; /* Increased margin to push table further down */
        }
        .table-container {
            overflow-x: auto;
            grid-column: 2 / span 1;
            padding-top: 80px; /* Increased padding to lower table */
            margin-left: 10px; /* Adjusted margin-left to shift the table slightly to the left */
        }
    </style>
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
</head>
<body>
    <?php include('includes/navbar.php') ?>
    <div class="grid-container">
        <div class="sidebar">
            <?php include('includes/sidebar.php') ?>
        </div>
        <div class="table-container">
            <?php
            // Include the database connection
            include 'dbcon.php';

            // Query to retrieve data from the 'sales' table
            $sql = "SELECT customer, date, product, qty, price, image FROM sales";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // Outputting table headers
                echo "<table><tr><th>Customer</th><th>Date</th><th>Product</th><th>Quantity</th><th>Price</th><th>Image</th></tr>";

                // Outputting data from each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td style='background-color: white;'>".$row["customer"]."</td>";
                    echo "<td style='background-color: white;'>".$row["date"]."</td>";
                    echo "<td style='background-color: white;'>".$row["product"]."</td>";
                    echo "<td style='background-color: white;'>".$row["qty"]."</td>";
                    echo "<td style='background-color: white; color: black;'>".$row["price"]."</td>"; // Setting font color to black for better visibility
                    echo "<td style='background-color: white;'><img src='".$row["image"]."' width='100' height='100'></td>";
                    echo "<td>";
                    // Edit link as a button
                    
                    echo "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close the connection
            $con->close();
            ?>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
