<!DOCTYPE html>
<html>
<head>
    <title>Products Table</title>
    <style>
        /* Your CSS styles for the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            color: white; /* Set font color to white */
        }
        th {
            background-color: black;
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
        }
    </style>
    <script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
    <?php include('includes/header.php') ?>
</head>
<body>
    <?php include('includes/navbar.php') ?>
    <?php include('includes/sidebar.php') ?>
    <div class="table-container">
        <?php
        // Include the database connection
        include 'dbcon.php';

        // Query to retrieve data from the 'products' table
        $sql = "SELECT product, category, brand, unit, quantity, price, status, image FROM products";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Outputting table headers
            echo "<table><tr><th>Product</th><th>Category</th><th>Brand</th><th>Unit</th><th>Quantity</th><th>Price</th><th>Status</th><th>Image</th></tr>";

            // Outputting data from each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["product"]."</td>";
                echo "<td>".$row["category"]."</td>";
                echo "<td>".$row["brand"]."</td>";
                echo "<td>".$row["unit"]."</td>";
                echo "<td>".$row["quantity"]."</td>";
                echo "<td>".$row["price"]."</td>";
                echo "<td>".$row["status"]."</td>";
                echo "<td><img src='".$row["image"]."' width='100' height='100'></td>";
                echo "<td>";
                // Edit link
                
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
