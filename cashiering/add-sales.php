<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
include('includes/header.php')
?>
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
</head>
<body>
<?php
    include('includes/navbar.php')
    ?>

<?php
    include('includes/sidebar.php')
    ?>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Add Sale</h4>
<h6>Add your new sale</h6>
</div>
</div>
<form action="addsales.php" method="POST" enctype="multipart/form-data">
  <label for="customerName">Customer Name:</label>
  <input type="text" id="customer" name="customer" class="form-control" required><br><br>
  
  <label for="date">Date:</label>
  <input type="date" id="date" name="date" class="form-control" required><br><br>
  
  <label for="productName">Product Name:</label>
  <input type="text" id="productName" name="product" class="form-control"  required><br><br>
  
  <label for="quantity">Quantity:</label>
  <input type="number" id="qty" name="qty" class="form-control"  required><br><br>
  
  <label for="price">Price:</label>
  <input type="number" id="price" name="price" step="0.01" class="form-control"  required><br><br>

  <label for="image">Image:</label>
  <input type="file" id="image" name="image" class="form-control"  required><br><br>
  
  <input type="submit" class="btn btn-primary" name="add_sales_btn" value="Submit">
</form>


<?php
include('includes/footer.php')
?>

</body>
</html>