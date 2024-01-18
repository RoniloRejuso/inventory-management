<?php
include 'dbcon.php'; // Include the database connection file

if (isset($_POST['checkout_btn'])) {
    $selectedProductsJSON = $_POST['selectedProducts'];
    $selectedProducts = json_decode($selectedProductsJSON, true);
    $outOfStock = false; // Flag to check if any product is out of stock

    foreach ($selectedProducts as $selectedProduct) {
        $productName = $selectedProduct['name'];
        $productPrice = $selectedProduct['price'];

        // Update quantity in the database
        $updateQuantityQuery = "UPDATE products SET quantity = quantity - 1 WHERE product = '$productName' AND quantity > 0";
        $con->query($updateQuantityQuery);

        // Check remaining quantity
        $checkQuantityQuery = "SELECT quantity FROM products WHERE product = '$productName'";
        $result = $con->query($checkQuantityQuery);
        $quantityData = $result->fetch_assoc();
        $remainingQuantity = $quantityData['quantity'];

        if ($remainingQuantity <= 0) {
            $outOfStock = true; // Set the flag to true if any product is out of stock
        }
    }

    if ($outOfStock) {
        // JavaScript alert for out of stock products
        echo '<script>alert("Some products are Out of Stock!");</script>';
    }

    // Redirect back to POS.php after checkout
    echo '<script>window.location.href = "pos.php";</script>';
    exit(); // Ensure that code execution stops after redirection
}
?>
<script>
    // JavaScript for showing custom-styled alert for out of stock products
    var outOfStock = "<?php echo $outOfStock; ?>";
    if (outOfStock) {
        var alertContainer = document.createElement("div");
        alertContainer.style.position = "fixed";
        alertContainer.style.top = "50%";
        alertContainer.style.left = "50%";
        alertContainer.style.transform = "translate(-50%, -50%)";
        alertContainer.style.padding = "20px";
        alertContainer.style.backgroundColor = "yellow";
        alertContainer.style.border = "2px solid #000";
        alertContainer.style.borderRadius = "10px";
        alertContainer.style.fontSize = "20px";
        alertContainer.style.zIndex = "9999";
        alertContainer.textContent = "Some products are Out of Stock!";

        document.body.appendChild(alertContainer);

        // Remove the alert after 3 seconds (3000 milliseconds)
        setTimeout(function() {
            document.body.removeChild(alertContainer);
        }, 3000);
    }
</script>
