<?php 
include 'dbcon.php'; // Include the database connection file
?>
<?php require_once('tcpdf/tcpdf.php'); // Include TCPDF library
session_start(); // Start the session
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receipt</title>
    <!-- Include your styles within the head section -->
    <style>
        /* CSS for the receipt */
        .receipt-heading {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .receipt-info {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        .receipt-info p {
            margin-bottom: 10px;
        }

        .receipt-info p strong {
            font-weight: bold;
            margin-right: 5px;
        }
        .back-btn {
            display: block;
            width: 120px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
        .pdf-download-btn {
            display: block;
            width: 200px;
            margin: 40px auto;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 8px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .pdf-download-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php


if (isset($_POST['add_sales_btn'])) {
    // Retrieve and store form inputs
    $customer = $_POST['customer'];
    $product = $_POST['product'];
    $qty = intval($_POST['qty']); // Convert to integer
    $payment = ($_POST['payment']); // Convert to integer
    $price = floatval($_POST['price']); // Convert to float
    $amount = floatval($_POST['amount']); // Convert to float (assuming it's an amount)
    $change_amount = floatval($_POST['change']); // Convert to float (assuming it's a change amount)

    // Calculate total
    $total = $qty * $price;

    // Store values in session for use in receipt and back to POS link
    $_SESSION['total'] = $total;
    $_SESSION['amount'] = $amount;
    $_SESSION['change'] = $change_amount;

    if (empty($customer) || empty($product) || $qty <= 0 || $price <= 0) {
        // Alert user using SweetAlert if any field is empty or invalid
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill in all required fields with valid inputs!',
            }).then(() => {
                window.location.href = 'pos.php';
            });
        </script>";
    } else 
    {
        // Insert into the database
        $sql = "INSERT INTO sales (customer, product, qty,payment, price, total, amount, `change`, date)
                VALUES ('$customer', '$product', '$qty', '$payment', '$price', '$total', '$amount', '$change_amount', NOW())";

        if ($con->query($sql) === TRUE) {
            // Get the last inserted ID
            $last_id = $con->insert_id;
            // Display receipt-like details after successful checkout
            echo "<h2 class='receipt-heading'>Receipt</h2>";
            echo "<div class='receipt-info'>";
            echo "<p><strong>Customer:</strong> $customer</p>";
            echo "<p><strong>Product:</strong> $product</p>";
            echo "<p><strong>Quantity:</strong> $qty</p>";
            echo "<p><strong>Payment Type:</strong> $payment</p>";
            echo "<p><strong>Price:</strong> $price</p>";

            echo "<p><strong>ID:</strong> $last_id</p>";
            echo "<p><strong>Total:</strong> $total</p>";
            echo "<p><strong>Amount Paid:</strong> $amount</p>";
            echo "<p><strong>Change:</strong> $change_amount</p>";
            echo "</div>";

            // Create PDF and save it in the uploads folder
            $pdf = new TCPDF();
            $pdf->AddPage();
            $pdfContent = "
                <h2>Receipt</h2>
                <p><strong>Customer:</strong> $customer</p>
                <p><strong>Product:</strong> $product</p>
                <p><strong>Quantity:</strong> $qty</p>
                <p><strong>Quantity:</strong> $payment</p>
                <p><strong>Price:</strong> $price</p>
                <p><strong>Total:</strong> $total</p>
                <p><strong>Amount Paid:</strong> $amount</p>
                <p><strong>Change:</strong> $change_amount</p>
            ";
            $pdf->writeHTML($pdfContent, true, false, true, false, '');

            // Save PDF in uploads folder
            $pdfFilePath = __DIR__ . '/uploads/receipt_' . time() . '.pdf';

            $pdf->Output($pdfFilePath, 'F'); // Save the PDF file

            //echo "<a href='$pdfFilePath' class='pdf-download-btn' target='_blank'>Download PDF</a>";

            // SweetAlert confirmation with the change amount
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
            echo "<script>
    Swal.fire({
        title: 'Receipt',
        html: `
            <h2 class='receipt-heading'>Receipt</h2>
            <div class='receipt-info'>
                <p><strong>Customer:</strong> $customer</p>
                <p><strong>Product:</strong> $product</p>
                <p><strong>Quantity:</strong> $qty</p>
                <p><strong>Price:</strong> $price</p>
                <p><strong>ID:</strong> $last_id</p>
                <p><strong>Total:</strong> $total</p>
                <p><strong>Amount Paid:</strong> $amount</p>
                <p><strong>Change:</strong> $change_amount</p>
            </div>
            <a href='$pdfFilePath' class='pdf-download-btn' target='_blank'>Download PDF</a>
        `,
        showCancelButton: true,
        confirmButtonText: 'Back to POS',
        cancelButtonText: 'Done'
    }).then((result) => {
        if (!result.isConfirmed) {
            window.location.href = 'pos.php'; // Redirect back to POS page
        }
    });
</script>";

        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
}
?>
<a href="pos.php" class="back-btn">Back to POS</a>
<script src="assets/js/script.js"></script>
</body>
</html>