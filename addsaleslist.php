<?php
include 'dbcon.php'; // Include the database connection file


if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_selected'])) {
        if (isset($_POST['item']) && !empty($_POST['item'])) {
            foreach ($_POST['item'] as $customerId) {
                $sql = "DELETE FROM customer WHERE id = '$customerId'";
                if (!$con->query($sql)) {
                    echo "Error deleting row: " . $con->error;
                }
            }
            // Redirect after successful deletion
            header("Location: addcustomerlist.php");
            exit();
        } else {
            echo "No rows selected for deletion.";
        }
    }
}
    if (isset($_POST['edit_selected'])) {
        if (isset($_POST['item']) && !empty($_POST['item'])) {
            foreach ($_POST['item'] as $customerId) {
                // Redirect to the edit page with the customer ID
                header("Location: update_sales.php?customer=$customerId");
                exit();
            }
        } else {
            echo "No rows selected for edit.";
        }
    }

   

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers List</title>
    <!-- Include SweetAlert in the head section -->
    
    <script src="sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    <style>
            body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding-top: 50px;
        }
        h1 {
            text-align: center;
        }
        table {
    border-collapse: collapse;
    width: 80%;
    margin: 500px 300px 5px; /* Adjust the top margin to lower the table */
    /* Other existing styles */
}
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-icon,
.edit-btn {
    position: fixed;
    top: 60px; /* Decrease this value to move the icons up */
    right: 60px; /* Change this value as needed */
    font-size: 24px;
    cursor: pointer;
}

    .delete-icon {
        padding: 5px;
        background-color: #e74c3c;
        color: #fff;
        border: none;
        border-radius: 4px;
    }
    .delete-icon:hover {
        background-color: #c0392b;
    }
    .edit-btn {
        /* Adjust the distance between the icons */
        right: 20px; /* Change this value as needed */
        padding: 5px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 4px;
    }
    .edit-btn:hover {
        background-color: #2980b9;
    }

    #print-pdf {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
    }
    h1 {
    color: white;
}
.sales-table td {
    color: white; /* Set the text color to white */
}
.sales-table tbody tr td {
    color: white; /* Set the text color to white */
}
/* Apply gold color to vertical and horizontal lines in sales-table */
#sales-table {
    border-collapse: collapse; /* Ensure borders collapse for a seamless look */
    width: 80%; /* Set width for the table */
    background-color: gray; /* Set the background color */
}

#sales-table th,
#sales-table td {
    border-right: 1px solid gold; /* Gold vertical lines */
    border-bottom: 1px solid gold; /* Gold horizontal lines */
    padding: 8px; /* Padding for spacing */
}

#sales-table th {
    background-color: gray; /* Set the background color for header cells */
    color: white; /* Text color for header cells */
}
/* Adjust background color of thead and styling of table cells */
#sales-table {
    border-collapse: collapse;
    width: 80%;
    background-color: gray;
}

#sales-table th,
#sales-table td {
    border-right: 1px solid gold;
    border-bottom: 1px solid gold;
    padding: 8px;
}

#sales-table thead th {
    background-color: white; /* Set the background color of the th elements within the thead to white */
    color: black; /* Text color for th elements */
}


</style>

<?php include('includes/header.php') ?>;
<link rel="stylesheet" href="sweetalert.css">
</head>
<body>
<?php include('includes/navbar.php') ?>;
<?php include('includes/sidebar.php') ?>;
<div style="text-align: right; margin-top: 20px;">
    <label class="delete-icon" for="deleteBtn" style="color: blue; cursor: pointer; font-size: 24px; margin-right: 20px;">🗑️</label>
    <button id="deleteBtn" style="display: none;">Delete Selected</button>
    <label class="edit-btn" for="editBtn" style="color: blue; cursor: pointer; font-size: 24px; margin-right: 20px;">✏️</label>
    <a style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; margin-left: 10px;">+</a>
</div>
    <!-- Form for selecting the month -->
    <div style="position: absolute; top: 140px; left: 280px;">
    <label for="select-month" style="color: white;">Select Month: </label>
    <span class="filter-icon" style="cursor: pointer;">
        📅 <!-- Placeholder icon -->
    </span>
    <select id="select-month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select>
</div>
<h1>Sales List</h1>

<table id="sales-table" class="sales-table" align="right" style="background-color: gray;">
    <thead style="background-color: white;">
        <tr>
            <th>Select</th>
            <th>ID</th>
            <th>Date</th>
            <th>Product</th>
            <th>Quantity</th>

            <th>Price</th>
            <th>Total</th>
            <th>Amount Paid</th>
            <th>Change</th>
            <th>Payment Type</th>
 <!-- Added Payment Type column -->
        </tr>
    </thead>
    <tbody>
        <?php 
        // Fetch data from the 'sales' table
        $sql = "SELECT * FROM sales"; 
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                // Adjust these according to your sales data structure
                echo "<td><input type='checkbox' name='item[]' value='" . $row['id'] . "' onclick='toggleEditButton()'></td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['product'] . "</td>";
                echo "<td>" . $row['qty'] . "</td>";
                
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['total'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['change'] . "</td>";
                echo "<td>" . $row['payment'] . "</td>"; // Added Payment Type column
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No sales found</td></tr>";
        }
        ?>
    </tbody>

</table>


        <div style="text-align: center; margin-top: 20px;">
    <!-- Button styled as a link -->
    <button id="print-pdf" style="background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;">
        Print PDF
    </button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#select-month').change(function() {
        var selectedMonth = $(this).val();

        $.ajax({
            url: 'custom_list.php', // Replace with the path to your PHP script handling the data retrieval
            type: 'GET',
            data: { selected_month: selectedMonth },
            success: function(data) {
                $('#sales-table tbody').html(data); // Update only the table body content with the fetched data
            },
            error: function() {
                alert('Error fetching data');
            }
        });
    });
});

<!-- Your JavaScript -->

    // Get the select element
const selectMonth = document.getElementById('select-month');

// Event listener for select change
selectMonth.addEventListener('change', function() {
    const selectedMonth = selectMonth.value;
    // Perform a fetch request or form submission passing the selectedMonth value to the server to reload the table
    // Example: fetch(`your_backend_script.php?selected_month=${selectedMonth}`)
    //     .then(response => response.text())
    //     .then(data => {
    //         // Update the table with the received data
    //         document.getElementById('customer-table').innerHTML = data;
    //     });
});
$(document).ready(function() {
    // Event listener for the Print PDF button
    $('#print-pdf').click(function() {
        Swal.fire({
            title: 'Generate PDF?',
            text: 'Do you want to generate the PDF?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, generate!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                var selectedMonth = $('#select-month').val(); // Get the selected month from a dropdown

                // Start the PDF generation and download process here
                var pdfContent = '<h1>Your PDF Content</h1><p>This is a sample PDF content.</p>';

                // Assuming you have the PDF generation logic here...
                // For demonstration purposes, let's simulate downloading the content as a file
                var blob = new Blob([pdfContent], { type: 'application/pdf' });
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'generated_pdf.pdf';
                link.click();
            }
        });
    });
});
</script>
<!-- Include necessary libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>






    <script>
        document.querySelector('.edit-btn').addEventListener('click', function() {
    editSelected();
});

document.getElementById('deleteBtn').addEventListener('click', function() {
    const checkboxes = document.querySelectorAll('#sales-table input[type="checkbox"]:checked');
    const selectedIds = Array.from(checkboxes).map(checkbox => checkbox.value);

    if (selectedIds.length === 0) {
        alert('Please select items to delete.');
    } else {
        if (confirm('Are you sure you want to delete selected items?')) {
            selectedIds.forEach(id => {
                const row = document.querySelector(`#sales-table input[value="${id}"]`).parentNode.parentNode;
                row.remove(); // Remove the row from the table

                // You might want to add logic here to perform deletion in your backend using AJAX/fetch
                // Example: send an AJAX request to delete the item with this ID from the database
                // fetch(`deleteItem.php?id=${id}`, { method: 'DELETE' })...

                console.log(`Deleted item with ID: ${id}`);
            });
        }
    }
});
        function toggleEditButton() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            const editBtn = document.querySelector('.edit-btn');
            let checkedCount = 0;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    checkedCount++;
                }
            });

            if (checkedCount > 0) {
                editBtn.style.display = 'inline-block';
            } else {
                editBtn.style.display = 'none';
            }
        }

        function editSelected() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        let checkedCount = 0;
        let customerId = '';

        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                checkedCount++;
                customerId = checkbox.value;
            }
        });

        if (checkedCount === 1) {
            // Redirect to the edit page with the selected customer ID
            window.location.href = `update_sales.php?id=${customerId}`;
        } else if (checkedCount > 1) {
            alert('Please select only one customer to edit at a time.');
        } else {
            alert('Please select a customer to edit.');
        }
    }
    </script>
<script src="sweetalert.min.js"></script>
<link rel="stylesheet" href="sweetalert.css">
<?php include('includes/footer.php') ?>;
</body>
</html>
