<?php
// Include your database connection here (assuming $con is your database connection)
include('dbcon.php');

if (isset($_GET['selected_month'])) {
    $selectedMonth = $_GET['selected_month'];
    
    $query = "SELECT * FROM products WHERE date != '0000-00-00' AND MONTH(date) = ?";
    $statement = $con->prepare($query);
    $statement->bind_param('s', $selectedMonth);
    $statement->execute();
    $result = $statement->get_result();
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
           
            echo "<td>" . $row['brand'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['flavor'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['unit_price'] . "</td>";
            echo "<td>" . $row['selling_price'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td><img src='" . $row['image'] . "' alt='Product Image' style='max-width: 100px; max-height: 100px;'></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='9'>No products found for the selected month</td></tr>";
    }
} else {
    // Handle the case where no month is selected
    echo "<tr><td colspan='9'>Please select a month</td></tr>";
}
?>
