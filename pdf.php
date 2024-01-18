<?php
require_once('tcpdf/tcpdf.php');
include('dbcon.php'); // Include your database connection

// Create new PDF document
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Ronilo Rejuso');
$pdf->SetTitle('Customer List PDF');
$pdf->SetSubject('Customer List');
$pdf->SetKeywords('TCPDF, PDF, Customer, List');

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Fetch data from the database
$query = "SELECT * FROM customer"; // Modify this query as per your table structure
$result = $con->query($query); // Assuming $con is your database connection

// Generate the table in the PDF
$html = '<table border="1">
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Date</th>
                <th>Product</th>
            </tr>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Populate the table with fetched data
        $html .= '<tr>';
        $html .= '<td>' . $row['id'] . '</td>';
        $html .= '<td>' . $row['customer_name'] . '</td>';
        $html .= '<td>' . $row['date'] . '</td>';
        $html .= '<td>' . $row['product'] . '</td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr><td colspan="4">No customers found</td></tr>';
}

$html .= '</table>';

// Path to the uploads folder where you want to save the PDF
$uploadPath = __DIR__ . '/uploads/';

// Ensure the uploads directory exists and has appropriate permissions
if (!file_exists($uploadPath)) {
    mkdir($uploadPath, 0755, true);
}

// File name for the PDF (you can customize this)
$fileName = 'customer_list.pdf';

// Full path to the PDF file
$filePath = $uploadPath . $fileName;

// Save the PDF in the uploads folder
// ...
// Save the PDF in the uploads folder
$pdf->writeHTML($html);
$pdf->Output($filePath, 'F');

// Provide a link for the user to download the generated PDF
echo "PDF generated: <a href='uploads/$fileName'>Download PDF</a>";


// Redirect the user after generating the PDF
header("Location: $filePath");
exit();
?>
