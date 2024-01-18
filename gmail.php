<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray; /* Gray background */
            color: black; /* Black text color */
        }
        table {
            border-collapse: collapse;
            width: 80%; /* Adjusted width to 80% */
            margin-left: auto; /* Align table to the right */
            margin-right: 0;
            border: 1px solid skyblue; /* Set border color */
            margin-top: 70px; /* Adding space above the table */
            background-color: white; /* White background for table */
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid skyblue; /* Set border color */
        }
        th {
            background-color: #eeeeee; /* Set background color for header row */
        }
        tr:nth-child(even) {
            background-color: lightblue; /* Alternate row color */
        }
        th {
            padding: 10px;
            text-align: left;
            border: 1px solid skyblue; /* Set border color */
        }

        .checkbox-column + th {
            padding-left: 20px; /* Add padding to the "From" header */
        }
        h1 {
            margin-top: 60px; /* Adding space above the h1 */
            text-align: center; /* Center the title */
            color: black; /* Black text color for the title */
        }
       
        /* Additional styles for checkboxes */
        .checkbox-column {
            width: 30px;
        }
        .checkbox-column input[type="checkbox"] {
            margin-top: 6px; /* Adjust the alignment of checkboxes */
        }

        /* Styles for the Compose button */
        .compose-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }
        .compose-button:hover {
            background-color: #0056b3;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid skyblue;
            color: black; /* Black text color */
        }
        th {
            background-color: white; /* White background for header row */
            color: black; /* Black text color for header row */
        }
    </style>
    <?php include('includes/header.php')?>
</head>
<body>
<?php include('includes/navbar.php')?>
<?php include('includes/sidebar.php')?>

<h1 style="margin-top: 70px; color: white;">Read Email</h1>
<div style="text-align: right; margin-top: 20px;">
    <a href="email.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none;">Compose</a>
</div>


   <table align="right">
      <tr style="background-color: white;">
         <th class="checkbox-column"></th>
         <th>From</th>
         <th>Subject</th>
         <th>Date</th>
      </tr>

      <?php
      $scriptUrl = "https://script.google.com/macros/s/AKfycbxT8Ocm835If-8ymPYo9Kop1FmvZCtxVPaWW_kpDgQ2pszEdai4C5gw5u-wlhAuWnFreA/exec";
      $limit  = 20; //data show per page
      $offset = 0; //start from

      $data = array(
         "action" => "inboxList",
         "limit"  => $limit,
         "offset" => $offset
      );

      $ch = curl_init($scriptUrl);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      $result = curl_exec($ch);
      $result = json_decode($result, true);

      if ($result['status'] == 'success') {
        foreach ($result['data'] as $inbox) {
            echo "<tr>";
            echo "<td class='checkbox-column'><input type='checkbox' name='delete[]' value='{$inbox['id']}'></td>";
            echo "<td>{$inbox['from']}</td>";
            echo "<td><a href='mail_read.php?id={$inbox['id']}'>{$inbox['subject']}</a></td>";
            echo "<td>{$inbox['date']}</td>";
            echo "</tr>";
        }
    }
    
      ?>
   </table>
   <?php include('includes/footer.php')?>
</body>
</html>
