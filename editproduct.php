<!DOCTYPE html>
<html>
<head>
    <title>Edit Products</title>
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
  
  </style>
  <script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
    
</head>
<body>
    <div class="edit-products-container">
        <h2>Product Records</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Unit</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Image</th>
                <th>Edit</th>
            </tr>
            <?php
            include 'dbcon.php'; // Include the database connection file

            $sql = "SELECT * FROM products"; // SQL query to fetch product data
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['product'] . '</td>';
                    echo '<td>' . $row['category'] . '</td>';
                    echo '<td>' . $row['brand'] . '</td>';
                    echo '<td>' . $row['unit'] . '</td>';
                    echo '<td>' . $row['quantity'] . '</td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '<td>' . $row['status'] . '</td>';
                    echo '<td><img src="' . $row['image'] . '" alt="' . $row['product'] . '" width="50"></td>';
                    echo '<td><a href="edit_product.php?product=' . urlencode($row['product']) . '">Edit</a></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="9">No product records found</td></tr>';
            }
            ?>
        </table>
        <a href="addproductlist.php" style="margin-bottom: 20px; display: block; text-align: center;">Go Back to Product List</a>
    </div>

</body>
</html>
