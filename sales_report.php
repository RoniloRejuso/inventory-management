<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include('includes/header.php') ?>;
    <style>
        /* CSS for the product boxes */

        .select-report {
            text-align: right;
            margin-top: 100px;
            margin-right: 50px; /* Adjust this value as needed */
        }

        .select-report label,
        .select-report select,
        .select-report button {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px; /* Add space between elements */
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
</head>
<body>
<?php include('includes/navbar.php') ?>;
<?php include('includes/sidebar.php') ?>;

<div style="text-align: right; margin-top: 30px; margin-right: 170px;">
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

$salesQuery = "SELECT * FROM sales";
$resultSales = $con->query($salesQuery);

if ($resultSales->num_rows > 0) {
    echo '<h1 style="text-align: center; color: white; margin-top: 5px;">Sales Report</h1>';
    echo '<div style="text-align: right; margin-top: 5px">' ;
    echo '<div class="table-wrapper" style="display: inline-block; text-align: left; width: auto; margin-left: auto; margin-right: 0; width: 80%">';
    echo '<table id="sales-table" class="sales-table" style="border: 2px solid orange; background-color: gray; color: white;">';
    echo '<thead style="background-color: white; color: black;">'; // Updated background and text color for headers
    echo '<tr>';
    echo '<th style="padding: 28px; border: 1px solid gold;">Select</th>';
    echo '<th style="padding: 28px; border: 1px solid gold;">Customer</th>';
    echo '<th style="padding: 28px; border: 1px solid gold;">Product</th>';
    echo '<th style="padding: 28px; border: 1px solid gold;">Quantity</th>';
    echo '<th style="padding: 28px; border: 1px solid gold;">Price</th>';
    echo '<th style="padding: 28px; border: 1px solid gold;">Total</th>';
    echo '<th style="padding: 28px; border: 1px solid gold;">Amount Paid</th>';
    echo '<th style="padding: 28px; border: 1px solid gold;">Change</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    $totalQuantity = $totalPrice = $totalSales = 0;

    while ($row = $resultSales->fetch_assoc()) {
        $totalQuantity += $row['qty'];
        $totalPrice += $row['price'];
        $totalSales += $row['total'];

        echo '<tr>';
        echo '<td style="padding: 28px; border: 1px solid gold;"><input type="checkbox" name="item[]" value="' . $row['id'] . '" onclick="toggleEditButton()"></td>';
        echo '<td style="padding: 28px; border: 1px solid gold;">' . $row['customer'] . '</td>';
        echo '<td style="padding: 28px; border: 1px solid gold;">' . $row['product'] . '</td>';
        echo '<td style="padding: 28px; border: 1px solid gold;">' . $row['qty'] . '</td>';
        echo '<td style="padding: 28px; border: 1px solid gold;">' . $row['price'] . '</td>';
        echo '<td style="padding: 28px; border: 1px solid gold;">' . $row['total'] . '</td>';
        echo '<td style="padding: 28px; border: 1px solid gold;">' . $row['amount'] . '</td>';
        echo '<td style="padding: 28px; border: 1px solid gold;">' . $row['change'] . '</td>';
        echo '</tr>';
    }

    echo '<tr>';
echo '<td colspan="3" style="padding: 28px; border: 1px solid gold; background-color: white; color: black;"><strong>Total Quantities:</strong></td>';
echo '<td style="padding: 28px; border: 1px solid gold; background-color: white; color: black;">' . $totalQuantity . '</td>';
echo '<td colspan="2" style="padding: 28px; border: 1px solid gold; background-color: white; color: black;"><strong>Total Price:</strong></td>';
echo '<td colspan="2" style="padding: 28px; border: 1px solid gold; background-color: white; color: black;">' . $totalPrice . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td colspan="5" style="padding: 28px; border: 1px solid gold; background-color: white; color: black;"><strong>Total Sales:</strong></td>';
echo '<td colspan="3" style="padding: 28px; border: 1px solid gold; background-color: white; color: black;">' . $totalSales . '</td>';
echo '</tr>';

echo '</tbody>';
echo '</table>';
echo '</div>';
} else {
    echo "No sales data found";
}
?>











<script>
    function generateReport() {
        const selectedMonth = document.getElementById('select-month').value;
        // Redirect to a page where you process the selected month for generating the report
        window.location.href = 'generate_report.php?month=' + selectedMonth;
    }
    function generateReport() {
    const selectedMonth = document.getElementById('select-month').value;
    // Redirect to a page where you process the selected month for generating the report
    window.location.href = 'generate_report.php?month=' + selectedMonth;
}

</script>

<script src="sweetalert.min.js"></script>
<?php include('includes/footer.php')?>;
  
</body>
</html>
