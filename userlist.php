<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include('includes/header.php') ?>
    <style>
    /* Your CSS styles for the table */
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid gold;
        text-align: right; /* Align content right */
        padding: 20px;
        color: white; /* Text color */
        background-color: gray;

    }
    th {
        background-color: #f5f5f5;
    }
    /* Container for the table */
    .table-container {
        margin-top: 70px; /* Adjust the margin-top to move the table lower */
        /* Adjust the margin-right to move the table more to the right */
        width: 80%; /* Adjust the width as needed */
        float: right;
    }
    /* Add more styles as needed */
</style>

</head>
<body>
    <?php include('includes/navbar.php') ?>
    <?php include('includes/sidebar.php') ?>

    <div class="table-container">
    <?php
// Include the database connection
include 'dbcon.php';

// Query to retrieve data from the 'users' table
$sql = "SELECT fullname, email, role_as, date FROM users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Outputting table headers
    echo "<table><tr><th style='color: black;'>Full Name</th><th style='color: black;'>Email</th><th style='color: black;'>Role As</th><th style='color: black;'>Date And Time of Login</th><th style='color: black;'>Status</th></tr>";

    // Outputting data from each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["fullname"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["role_as"]."</td>";
        echo "<td>".$row["date"]."</td>";

        // Check the time difference (12 hours) for online status
        $loginTime = strtotime($row["date"]); // Convert string date to timestamp
        $currentTime = time();
        $timeDifference = $currentTime - $loginTime;
        $status = ($timeDifference <= 43200) ? 'green' : 'black';

        // Display a colored indicator based on the online status
        echo "<td><span style='color: $status;'>●</span></td>";

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

// Close the connection
$con->close();
?>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
<script src="sweetalert.min.js"></script>
  
</body>
</html>