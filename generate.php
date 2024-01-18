<?php
require_once('tcpdf/tcpdf.php');

if (isset($_GET['id'])) {
    // Retrieve necessary data for PDF generation, e.g., using $_GET['id']
    $last_id = $_GET['id'];
    // Fetch required data from the database based on $last_id or any other necessary logic
    // For example:
    // $data = fetchDataFromDatabase($last_id);

    // Assuming $data contains the fetched information, create the PDF content
    $pdfContent = "
    <h2>Receipt</h2>
    <p><strong>Customer:</strong> $customer</p>
    <p><strong>Product:</strong> $product</p>
    <p><strong>Quantity:</strong> $qty</p>
    <p><strong>Price:</strong> $price</p>
    <p><strong>Total:</strong> $total</p>
    <p><strong>Amount Paid:</strong> $amount</p>
    <p><strong>Change:</strong> $change_amount</p>
    ";

    // Create PDF instance
    $pdf = new TCPDF();
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Generate PDF content
    $pdf->writeHTML($pdfContent, true, false, true, false, '');

    // Save PDF in downloads folder (or desired location)
    $pdfFilePath = __DIR__ . '/uploads/receipt_' . time() . '.pdf';
    $pdf->Output($pdfFilePath, 'F'); // Save the PDF file

    // Redirect to the generated PDF file for download
    header("Location: $pdfFilePath");
    exit();
} else {
    // Handle cases where the ID is not provided or invalid
    echo "Invalid request for PDF generation.";
}
?>
