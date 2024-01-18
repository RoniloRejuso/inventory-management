<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recently Added Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 20px;
            padding: 15px 20px;
            margin: 0;
            background-color: #f0f0f0;
        }

        .dataview {
            padding: 20px;
        }

        .datatable {
            width: 100%;
            border-collapse: collapse;
        }

        .datatable th,
        .datatable td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .datatable th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .datatable td {
            vertical-align: top;
        }

        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    include 'dbcon.php'; // Include the database connection file

    // Query to fetch recently added products
    $recentProductsQuery = "SELECT * FROM products WHERE date >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
    $resultRecentProducts = $con->query($recentProductsQuery);

    // Fetch data for the chart (counting products by category)
    $chartDataQuery = "SELECT category, COUNT(*) AS count FROM products GROUP BY category";
    $resultChartData = $con->query($chartDataQuery);

    // Prepare data for the chart
    $chartData = [];
    while ($row = $resultChartData->fetch_assoc()) {
        $chartData[] = [
            'name' => $row['category'],
            'y' => (int)$row['count']
        ];
    }
    ?>

    <!-- Display the recently added products -->
    <?php if ($resultRecentProducts && $resultRecentProducts->num_rows > 0): ?>
        <div class="card mb-0">
            <div class="card-body">
                <h4 class="card-title">Recently Added Products</h4>
                <div class="table-responsive dataview">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <!-- Add more headers if needed -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $resultRecentProducts->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row['product']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['brand']; ?></td>
                                    <td><?php echo $row['unit']; ?></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <!-- Add more columns if needed -->
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>No recently added products.</p>
    <?php endif; ?>

    <div class="chart-container">
    <div id="container" style="width: 500px;"></div>
</div>

<!-- JavaScript block for Highcharts -->
<script src="https://code.highcharts.com/highcharts.js"></script>
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
            text: 'Most Marketable Products',
            align: 'left'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage}</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage} %'
                }
            }
        },
        series: [{
            name: 'Products',
            colorByPoint: true,
            data: chartData // Using the data retrieved from PHP
        }]
    });
</script>

</body>
</html>
