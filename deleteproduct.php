<!DOCTYPE html>
<html>
<head>
    <title>Delete Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .delete-products-container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-products-container form {
            text-align: center;
            margin-top: 20px;
        }
        select, input[type="submit"] {
            padding: 8px 16px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        select {
            margin-right: 10px;
        }
        input[type="submit"]:hover {
            background-color: #d32f2f;
        }
</style>
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
</head>
<body>
    <div class="delete-products-container">
        <h2>Product Records</h2>
        <form method="post" action="delete_products.php">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Unit</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Delete</th>
                </tr>
                <?php
                include 'dbcon.php'; // Include the database connection file

                // Fetch product records from the database
                $sql = "SELECT * FROM products";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['product'] . "</td>";
                        echo "<td>" . $row['category'] . "</td>";
                        echo "<td>" . $row['brand'] . "</td>";
                        echo "<td>" . $row['unit'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        echo "<td><input type='checkbox' name='delete_criteria[]' value='" . $row['product'] . "'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No product records found</td></tr>";
                }
                ?>
            </table>
            <label>Select action:</label>
            <select name="delete_option">
                <option value="delete_row">Delete Selected Rows</option>
                <option value="delete_all">Delete All</option>
            </select>
            <input type="submit" name="delete_products_btn" value="Delete">
        </form>
        <a href="addproductlist.php" style="margin-bottom: 20px; display: block; text-align: center;">Go Back to Products List</a>
    </div>

</body>
</html>