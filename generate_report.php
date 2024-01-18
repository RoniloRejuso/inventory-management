<?php
include 'dbcon.php'; // Include the database connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .button-container {
            text-align: center;
        }

        .generate-pdf-btn {
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .generate-pdf-btn:hover {
            background-color: #45a049;
        }

        .back-btn {
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET['month'])) {
    $selectedMonth = $_GET['month'];

    // Query to fetch inventory data for the selected month
    $inventoryQuery = "SELECT product, SUM(qty) AS total_quantity, price 
                       FROM sales 
                       WHERE MONTH(date) = '$selectedMonth' 
                       GROUP BY product";

    // Execute the query
    $resultInventory = $con->query($inventoryQuery);

    if ($resultInventory->num_rows > 0) {
        // Generate PDF functionality
        echo '<div class="button-container">';
        echo '<form method="post" action="generate_pdf.php">';
        echo '<input type="hidden" name="selected_month" value="' . $selectedMonth . '">';
        echo '<button type="submit" class="generate-pdf-btn" name="generate_pdf_btn">Generate PDF Inventory Report</button>';
        echo '</form>';

        // Back button to return to inventoryreport.php
        echo '<a href="inventoryreport.php" class="back-btn">Back to Inventory Report</a>';
        echo '</div>';
    } else {
        echo "No inventory data found for the selected month";
        // Back button to return to inventorylist.php even when no data is found
        echo '<a href="inventoryreport.php" class="back-btn">Back to Inventory List</a>';
    }
} else {
    echo "Month parameter not provided";
}
?>
</body>
</html>
