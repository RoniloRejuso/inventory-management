<!DOCTYPE html>
<html>
<head>
    <title>Edit Customers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .delete-sales-container {
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
        .delete-sales-container form {
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
        .go-back-btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .go-back-btn:hover {
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
    <div class="edit-products-container">
        <h2>Customer Records</h2>
        <table>
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Edit</th>
            </tr>
            <?php
            include 'dbcon.php'; // Include the database connection file

            $sql = "SELECT * FROM customer"; // SQL query to fetch customer data
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['customer_name'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td><img src="' . $row['image'] . '" alt="' . $row['customer_name'] . '" width="50"></td>';
                    echo '<td><a href="edit_customer.php?customer=' . urlencode($row['customer_name']) . '">Edit</a></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="5">No customer records found</td></tr>';
            }
            ?>
        </table>
    </div>
    <a href="addcustomerlist.php" style="margin-bottom: 20px; display: block; text-align: center;">Go Back to Customer List</a>


</body>
</html>
