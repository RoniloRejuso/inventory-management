<?php
// Include your database connection file
include 'dbcon.php';

if (isset($_GET['brand'])) {
    // Get the brand name from the GET request
    $brandName = $_GET['brand'];

    // Perform a database query to fetch product details based on the brand name
    // Adjust this query according to your database structure
    $sql = "SELECT * FROM products WHERE brand = '$brandName'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Prepare the data to be sent as JSON
        $responseData = [
            'image' => $row['image'],
            'price' => $row['price'],
            'flavor' => $row['flavor']
            // Add other columns as needed
        ];

        // Send the product details as JSON response
        header('Content-Type: application/json');
        echo json_encode($responseData);
    } else {
        echo "No product found for the given brand name";
    }
} else {
    echo "Brand name not provided";
}
?>
