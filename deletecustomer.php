<!DOCTYPE html>
<html>
<head>
    <title>Delete Customers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .delete-customers-container {
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
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
        a {
            display: block;
            text-align: center;
            text-decoration: none;
            color: #333;
            margin-bottom: 20px;
        }
    </style>
    <script src='sweetalert.min.js'></script>
    <script type="text/javascript">
        // JavaScript or script tags you want to include
        // ...
    </script>
</head>
<body>
    <div class="delete-customers-container">
        <h2>Customer Records</h2>
        <form method="post" action="deletecustomer.php">
            <table>
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Delete</th>
                </tr>
                <?php
                include 'dbcon.php'; // Include the database connection file

                // Fetch customer records from the database
                $sql = "SELECT * FROM customer";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['customer_name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td><input type='checkbox' name='customer_criteria[]' value='" . $row['customer_name'] . "'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No customer records found</td></tr>";
                }
                ?>
            </table>
            <label>Select action:</label>
            <select name="delete_option">
                <option value="delete_row">Delete Selected Rows</option>
                <option value="delete_all">Delete All</option>
            </select>
            <input type="submit" name="delete_customers_btn" value="Delete">
        </form>
        <a href="addcustomerlist.php" style="margin-bottom: 20px; display: block; text-align: center;">Go Back to Customer List</a>
    </div>
    <script src="sweetalert.min.js"></script>
    <script>
        // Any additional JavaScript you want to include
        // ...
    </script>
</body>
</html>
