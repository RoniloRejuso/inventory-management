<?php
include('high.php');
?>

<!DOCTYPE html>
<html>
    <html lang="en">
<meta charset="utf-8">
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
<head>
<?php
include('includes/header.php');
?>


 <div class="page-wrapper">
        <div class="content">
          <div class="row">


<div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash3">
        <div class="dash-widgetimg">
            <span><img src="assets/img/money.jpg" alt="img" /></span>
        </div>
        <div class="dash-widgetcontent">
            <?php
            // Include the database connection
            include 'dbcon.php';

            // Query to calculate the total sale amount (summing only the 'price' column)
            $totalSalesQuery = "SELECT SUM(price) AS total_sales FROM sales"; // Assuming 'sales' is your table name
            $resultSales = $con->query($totalSalesQuery);
            $totalSales = ($resultSales && $resultSales->num_rows > 0) ? $resultSales->fetch_assoc()['total_sales'] : 0;
            ?>
            <!-- Display the total sale amount -->
            <h5>$<span class="counters"><?php echo $totalSales; ?></span></h5>
            <h6>Total Sale Amount</h6>
        </div>
    </div>
</div>


            <div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count">
        <div class="dash-counts">
            <?php
            // Include the database connection
            include 'dbcon.php';

            // Query to count the number of customers
            $customerCountQuery = "SELECT COUNT(*) AS customer_count FROM customer"; // Assuming 'customer' is your table name
            $resultCustomer = $con->query($customerCountQuery);
            $customerCount = ($resultCustomer && $resultCustomer->num_rows > 0) ? $resultCustomer->fetch_assoc()['customer_count'] : 0;
            ?>
            <!-- Display the count of customers -->
            <h4><?php echo $customerCount; ?></h4>
            <h5>Customers</h5>
        </div>
        <div class="dash-imgs">
    <img src="assets/img/customer.jpg" alt="Your Image Description">
</div>

    </div>
</div>


<div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das1">
        <div class="dash-counts">
            <?php
            // Include the database connection
            include('dbcon.php');

            // Query to count the number of users
            $userCountQuery = "SELECT COUNT(*) AS user_count FROM users"; // Assuming 'users' is your table name
            $resultUser = $con->query($userCountQuery);
            $userCount = ($resultUser && $resultUser->num_rows > 0) ? $resultUser->fetch_assoc()['user_count'] : 0;
            ?>
            <!-- Display the count of users -->
            <h4><?php echo $userCount; ?></h4>
            <h5>Users</h5>
        </div>
        <div class="dash-imgs">
    <img src="assets/img/users.png" alt="Image Description">
</div>

    </div>
</div>





<div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das3">
        <div class="dash-counts">
            <?php
            // Include the database connection
            include 'dbcon.php';

            // Query to count the number of available products
            $productCountQuery = "SELECT COUNT(*) AS product_count FROM products"; // Assuming 'products' is your table name
            $resultProduct = $con->query($productCountQuery);
            $productCount = ($resultProduct && $resultProduct->num_rows > 0) ? $resultProduct->fetch_assoc()['product_count'] : 0;
            ?>
            <!-- Display the count of available products -->
            <h4><?php echo $productCount; ?></h4>
            <h5>Products Available</h5>
        </div>
        <div class="dash-imgs">
    <img src="assets/img/vape.jpg" alt="Product Image">
</div>

    </div>
</div>
 
<style>
   .chart-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    #container,
    #inventoryChart {
        width: 50%; /* Adjust the width as needed */
        height: 400px; /* Adjust the height as needed */
    }
   
</style>

  <title>Browser Market Shares</title>
  <!-- Include the Highcharts library -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  
</head>
<body>

<?php
include('includes/navbar.php');
?>
  <?php
include('includes/sidebar.php');
?>




<div class="chart-container" style="margin: 20px; border: 5px solid gold; border-radius: 8px; padding: 20px;">
    <!-- Create a container for the chart -->
    <div id="container" style="width: 700px;"></div>
</div>

<!-- JavaScript block -->
<script>
    // Data retrieved from PHP
    var chartData = <?php echo json_encode($results); ?>;

    // Creating the Highcharts chart
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Flavor Sales Distribution'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Sales',
            colorByPoint: true,
            data: chartData // Using the data retrieved from PHP
        }]
    });
</script>


<?php
include('dbcon.php'); // Include the database connection file

// Query to count the number of products in the products table
$productCountQuery = "SELECT COUNT(*) as product_count FROM products";
$resultProductCount = $con->query($productCountQuery);

$totalProducts = 0;
if ($resultProductCount && $resultProductCount->num_rows > 0) {
    $row = $resultProductCount->fetch_assoc();
    $totalProducts = $row['product_count'];
}

// Query to fetch product names and calculate their percentages
$inventoryDataQuery = "SELECT brand, COUNT(*) as count FROM products GROUP BY brand";
$resultInventoryData = $con->query($inventoryDataQuery);

$inventoryData = [];
if ($resultInventoryData && $resultInventoryData->num_rows > 0) {
    while ($row = $resultInventoryData->fetch_assoc()) {
        $inventoryData[] = [
            'name' => $row['brand'],
            'y' => ($row['count'] / $totalProducts) * 100 // Calculate inventory percentage
        ];
    }

    // Find the brand with the highest quantity percentage
    $highestQuantityBrand = "";
    $highestQuantityPercentage = 0;
    foreach ($inventoryData as $data) {
        if ($data['y'] > $highestQuantityPercentage) {
            $highestQuantityPercentage = $data['y'];
            $highestQuantityBrand = $data['name'];
        }
    }
}
?>

<div class="chart-container" style="margin: 20px; border: 5px solid gold; border-radius: 8px; padding: 20px;">
    <!-- Create a container for the chart -->
    <div id="inventoryChart" style="width: 700px;"></div>
</div>

<!-- Display the brand with the highest quantity percentage -->
<h3 style="color: red;">Highest Quantity Brand: <?php echo $highestQuantityBrand; ?></h3>

<!-- JavaScript block for Highcharts -->
<script>
    // Data retrieved from PHP
    var inventoryData = <?php echo json_encode($inventoryData); ?>;

    // Creating the Highcharts chart
    Highcharts.chart('inventoryChart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Product Inventory Percentage'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Inventory Percentage',
            colorByPoint: true,
            data: inventoryData // Using the data retrieved from PHP
        }]
    });
</script>

<?php
include 'dbcon.php'; // Include the database connection file

// Retrieve products data including the 'flavor' and 'quantity' columns
$sql = "SELECT brand, model, date, flavor, quantity FROM products"; // Include the 'flavor' and 'quantity' columns
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data in a table with styling
    echo "<style>
            table {
                border-collapse: collapse;
                width: 80%;
                margin: 20px auto;
                border: 2px solid orange;
                margin-left: 5px; /* Adjust the left margin */
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                border: 2px solid orange;
                background-color: gray;
            }
            th {
                background-color: #f5f5f5;
                color: black;
            }
        </style>";
        echo '<h2 style="color: white;">List of Expiring products:</h2>';

    echo "<table>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Flavor</th>
                <th>Quantity</th> <!-- New column for Quantity -->
                <th>Expiry Date</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        $brand = $row["brand"];
        $model = $row["model"];
        $flavor = $row["flavor"];
        $quantity = $row["quantity"]; // Retrieve quantity column data
        $dateEntered = strtotime($row["date"]);
        $expiryDate = date('Y-m-d', strtotime('+1 year', $dateEntered)); // Calculate expiry date

        echo "<tr>
                <td>$brand</td>
                <td>$model</td>
                <td>$flavor</td>
                <td>$quantity</td> <!-- Display Quantity column data -->
                <td>$expiryDate</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
?>



<?php
include('includes/footer.php')
?>
<script src="assets/js/sweetalert.min.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script>
  // Check if the message has already been displayed
  if (!sessionStorage.getItem('loginSuccessShown')) {
    // If not shown, display the message
    swal("Successfully logged in!", {
      button: "Welcome Admin!",
    });
    // Set a flag in session storage to indicate that the message has been shown
    sessionStorage.setItem('loginSuccessShown', 'true');
  }
</script>


</body>
</html>
