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
    td button {
            padding: 5px 10px;
            cursor: pointer;
            border: none;
            outline: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 2px 2px;
            transition-duration: 0.4s;
        }

        .btn-green {
            background-color: green;
        }

        .btn-black {
            background-color: black;
        }
</style>

</head>
<body>
    <?php include('includes/navbar.php') ?>
    <?php include('includes/sidebar.php') ?>
    <h1 style="margin-top: 50px; text-align: center; color:white "> User Settings </h1>

    <div class="table-container">
    <script>
        function disableUser(email) {
            let statusElement = document.getElementById('status_' + email);
            if (statusElement.innerText === 'Enabled') {
                statusElement.innerText = 'Disabled';
                statusElement.style.color = 'red'; // Change color to indicate disabled status
            } else {
                statusElement.innerText = 'Enabled';
                statusElement.style.color = 'green'; // Change color to indicate enabled status
            }
        }
    </script>

<?php
            // Include the database connection
            include 'dbcon.php';

            // Query to retrieve data from the 'users' table
            $userSql = "SELECT fullname, email, role_as, DATE(date) AS login_date FROM users";
            $userResult = $con->query($userSql);

            if ($userResult) {
                // Outputting the first table headers
                echo "<table><tr><th style='color: black;'>Full Name</th><th style='color: black;'>Email</th><th style='color: black;'>Role As</th><th style='color: black;'>Date</th><th style='color: black;'>Status</th><th style='color: black;'>Disable User</th></tr>";

                // Outputting data from each row for the first table
                while ($row = $userResult->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["fullname"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["role_as"]."</td>";
                    echo "<td>".$row["login_date"]."</td>"; // Display date only
                    echo "<td><span id='status_".$row["email"]."' style='color: green;'>Enabled</span></td>";
                    echo "<td><button onclick='disableUser(\"".$row["email"]."\")'>Disable/Enable</button></td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                // Error handling if query execution fails
                echo "Error: " . $con->error;
            }

            // Close the connection
            $con->close();
        ?>


    </div>

    <h1 style="margin-top: 20px; text-align: center; color:white;">Payment Settings</h1>

<div class="table-container">
    <?php
    // Sample data for the table
    $data = array(
        array("Cash"),
        array("Gcash"),
    );

    // Output the HTML table
    echo "<table>";
    echo "<tr><th style='color: black;'>Payment</th><th style='color: black;'>Status</th></tr>";

    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "<td><button onclick=\"toggleButton(this)\" class=\"btn-black\">Allowed</button></td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</div>

<script>
    function toggleButton(button) {
        button.classList.toggle("btn-green");
        button.classList.toggle("btn-black");
    }
</script>




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