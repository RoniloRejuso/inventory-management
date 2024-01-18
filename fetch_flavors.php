<?php
// Assuming you have a database connection established
include('dbcon.php');
if (isset($_POST['brandId'])) {
  $brandId = $_POST['brandId'];

  // Perform a database query to fetch flavors based on $brandId
  // Replace this query with your own logic to fetch flavors from the database

  // Sample query (you need to adjust this based on your table structure)
  $sql = "SELECT flavor FROM products WHERE brand"; // Adjust this query based on your database schema
  $result = $con->query($sql);

  $flavors = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $flavors[] = $row["flavor"];
    }
  }

  // Return the flavors as JSON
  echo json_encode($flavors);
}
?>
