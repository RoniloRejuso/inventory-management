<?php
// Include your database connection here (assuming $con is your database connection)
include('dbcon.php');

if (isset($_GET['selected_month'])) {
    $selectedMonth = $_GET['selected_month'];
    
    $query = "SELECT * FROM sales WHERE date != '0000-00-00' AND MONTH(date) = ?";
    $statement = $con->prepare($query);
    $statement->bind_param('s', $selectedMonth);
    $statement->execute();
    $result = $statement->get_result();
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><input type='checkbox' name='item[]' value='" . $row['id'] . "' onclick='toggleEditButton()'></td>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['product'] . "</td>";
            echo "<td>" . $row['qty'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "<td>" . $row['amount'] . "</td>";
            echo "<td>" . $row['change'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No customers found for the selected month</td></tr>";
    }
} else {
    // Handle the case where no month is selected
    echo "<tr><td colspan='5'>Please select a month</td></tr>";
}
?>
