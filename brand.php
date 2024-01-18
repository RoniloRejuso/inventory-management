<style>
    .brands-container {
        display: grid;
        grid-template-columns: repeat(5, 1fr); /* 5 columns */
        gap: 20px; /* Adjust the gap between brand containers */
    }

    .brand-container {
        border: 1px solid #ccc;
        padding: 10px;
    }

    .products-list {
        display: grid;
        grid-template-columns: repeat(5, 1fr); /* 5 columns for products */
        gap: 10px; /* Adjust the gap between products */
    }

    .product-item {
        text-align: center;
    }

    .product-item img {
        max-width: 100%;
        height: auto;
        max-height: 100px; /* Adjust the maximum height of the images */
        display: block;
        margin: 0 auto;
    }
</style>


<div class="brands-container">
    <?php
    include 'dbcon.php'; // Include the database connection file

    $brands = ['VIPO VB CUBE', 'SOLOBAR', 'INSTABAR', 'SHIFT GRIPBAR', 'NASTY', 'DEMONVAPE', 'CHILLAX NEO', 'ENJOY', 'AEGIS GEEKBAR', 'PUFFMASTER'];

    foreach ($brands as $brand) {
        ?>
        <div class="brand-container">
            <h3><?php echo $brand; ?></h3>
            <div class="products-list">
                <?php
                $productsQuery = "SELECT * FROM products WHERE brand = '$brand' LIMIT 5"; // Limit to 5 products per brand
                $productsResult = $con->query($productsQuery);
                $products = []; // Initialize the $products array

                if ($productsResult->num_rows > 0) {
                    while ($productRow = $productsResult->fetch_assoc()) {
                        $products[] = $productRow; // Add each product to the $products array
                    }
                }

                if (!empty($products)) {
                    foreach ($products as $product) {
                        $productName = $product['product'];
                        $productPrice = $product['price'];
                        $productImage = $product['image'];
                        ?>
                        <a href="#" class="product-item" data-name="<?php echo $productName; ?>" data-price="<?php echo $productPrice; ?>">
                            <img src="<?php echo $productImage; ?>" alt="<?php echo $productName; ?>">
                            <p><?php echo $productName; ?></p>
                            <p>Price: $<?php echo $productPrice; ?></p>
                        </a>
                        <?php
                    }
                } else {
                    echo 'No products found for ' . $brand;
                }
                ?>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<div class="card card-order">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="product-container">
                    <h2>Choose Product</h2>
                    <div class="product-dropdown">
                        <button class="product-dropdown-button">Select Product</button>
                        <div class="product-dropdown-content">
                            <?php if (!empty($products)) : ?>
                                <?php foreach ($products as $product) : ?>
                                    <a href="#" class="product-item" data-name="<?php echo $product['product']; ?>" data-price="<?php echo $product['price']; ?>">
                                        <?php echo $product['product']; ?>
                                    </a>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <p>No products found</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="selected-product">
                        <h3>Selected Product:</h3>
                        <p id="selectedProductName"></p>
                        <p id="selectedProductPrice"></p>
                        <p>Quantity: <input type="number" id="selectedProductQuantity" min="1" value="1"></p>
                        <p>Total Price: <span id="totalPrice"></span></p>
                        <form id="productForm" method="post" action="add_to_sales.php">
                        <input type="hidden" id="productName" name="product">
                        <input type="hidden" id="productPrice" name="price">
                        <input type="hidden" id="productQuantity" name="quantity">
                        <button type="submit"  name="checkout_btn" id="checkoutButton" class="btn btn-primary">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Show/hide product dropdown on button click
        $('.product-dropdown-button').on('click', function() {
            $('.product-dropdown-content').toggle();
        });

        // Handling clicks on product items
        $('.product-item').on('click', function() {
            var productName = $(this).data('name');
            var productPrice = $(this).data('price');

            $('#selectedProductName').text('Product: ' + productName);
            $('#selectedProductPrice').text('Price: $' + productPrice);
            $('#productName').val(productName); // Set product name in the form
            $('#productPrice').val(productPrice); // Set product price in the form

            // Update total price based on quantity
            $('#selectedProductQuantity').on('input', function() {
                var quantity = $(this).val();
                var totalPrice = (parseFloat(productPrice) * parseInt(quantity)).toFixed(2);
                $('#totalPrice').text('$' + totalPrice);
                $('#productQuantity').val(quantity); // Set product quantity in the form
            }).trigger('input');

            // Hide dropdown after selection
            $('.product-dropdown-content').hide();
        });

        // Checkout button functionality
        $('#checkoutButton').on('click', function() {
            // Replace with your checkout logic or redirect to checkout page
            $('#productForm').submit(); // Submit the form
        });
    });
</script>

</div>
