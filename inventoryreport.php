
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <style>
        /* CSS for the product boxes */
        .product-container {
            text-align: right;
        }
        .product-box {
            display: inline-block;
            border: 1px solid gold; /* Gold border */
            width: calc(20% - 40px);
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: left;
            background-color: gray; /* Gray background */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: white; /* White text color */
            font-weight: bold; /* Set text to bold */
            border-radius: 8px; /* Add border radius */
        }
    </style>


    <script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php include('includes/header.php') ?>;
</head>
<body>
<?php include('includes/navbar.php') ?>;
<?php include('includes/sidebar.php') ?>;
<div style="text-align: right; margin-top: 100px; margin-right: 20px;">
    <label for="select-month" style="color: white;">Select Month: </label>
    <select id="select-month">
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>

    <button onclick="generateReport()">Generate Report</button>
</div>


   

<?php
include 'dbcon.php';

$inventoryQuery = "SELECT brand, SUM(quantity) AS total_quantity, SUM(quantity * selling_price) AS total_value FROM products GROUP BY brand";
$resultInventory = $con->query($inventoryQuery);

if ($resultInventory === false) {
    echo "Query error: " . $con->error;
} elseif ($resultInventory->num_rows > 0) {
    echo '<h1 style="text-align: center; color: white;">Products Report</h1>';
    echo '<div class="product-container">'; // Container for product boxes

    while ($row = $resultInventory->fetch_assoc()) {
        if ($row['brand'] && $row['total_quantity'] && $row['total_value']) {
            $brand = $row['brand'];
            $totalQuantity = $row['total_quantity'];
            $totalValue = $row['total_value'];
    
            echo '<div class="product-box" style="padding: 20px; color: white;  border: 1px solid gold; /* Gold border */">';
            echo "<h2>$brand</h2>";
            echo "<p>Total Quantity: $totalQuantity</p>";
            echo "<p>Total Value: $totalValue</p>";
            echo '</div>';
        } else {
            echo "Error: Missing data for a product.";
        }
    }
} else {
    echo "No inventory data found";
}
?>












<script>
   
    function generateReport() {
    const selectedMonth = document.getElementById('select-month').value;
    // Redirect to a page where you process the selected month for generating the report
    window.location.href = 'generate_report.php?month=' + selectedMonth;
}

</script>
<script src="assets/js/script.js"></script>
<script src="assets/js/script.js"></script>
<script src="sweetalert.min.js"></script>
  <?php include('includes/footer.php') ?>;
</body>
</html>
