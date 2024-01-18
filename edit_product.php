<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
       
      
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .edit-product-container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    <div class="edit-product-container">
        <h2>Edit Product</h2>
        <?php
        include 'dbcon.php'; // Include the database connection file

        if (isset($_GET['product'])) {
            $product = $_GET['product'];

            $sql = "SELECT * FROM products WHERE product = '$product'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <form method="post" action="update_product.php" enctype="multipart/form-data">
                    <input type="hidden" id="productName" name="productName" value="<?php echo $row['product']; ?>">
                    <label for="productName">Product Name:</label>
                    <input type="text" id="productName" name="productName" value="<?php echo $row['product']; ?>"><br><br>
                    
                    <label for="category">Category:</label>
                    <input type="text" id="category" name="category" value="<?php echo $row['category']; ?>"><br><br>
                    
                    <label for="brand">Brand:</label>
                    <input type="text" id="brand" name="brand" value="<?php echo $row['brand']; ?>"><br><br>
                    
                    <label for="unit">Unit:</label>
                    <input type="text" id="unit" name="unit" value="<?php echo $row['unit']; ?>"><br><br>
                    
                    <label for="quantity">Quantity:</label>
                    <input type="text" id="quantity" name="quantity" value="<?php echo $row['quantity']; ?>"><br><br>
                    
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price" value="<?php echo $row['price']; ?>"><br><br>
                    
                    <label for="status">Status:</label>
                    <input type="text" id="status" name="status" value="<?php echo $row['status']; ?>"><br><br>
                    
                    <label for="image">Product Image:</label>
                    <input type="file" id="image" name="image" required><br><br>
                    
                    <input type="submit" name="update_product_btn" value="Update Product">
                </form>
                <?php
            } else {
                echo "Product not found";
            }
        } else {
            echo "Product name not provided";
        }
        ?>
    </div>


</body>
</html>
