<!DOCTYPE html>
<html>
<head>
<style>
        /* Reset default margin and padding */
               /* Reset default margin and padding */
               body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Flexbox layout classes */
         .d-flex {
            display: flex;
        }

        .flex-column {
            flex-direction: column;
        }

        .h-100 {
            height: 100%;
        }

        .w-100 {
            width: 100%;
        }

        /* Form input and label styles */
        .d-flex .form-control {
            /* Style for form inputs */
            /* Example styles */
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .d-flex .control-label {
            /* Style for form labels */
            /* Example styles */
            width: 30%;
            margin-right: 2%;
            text-align: right;
        }
 /* Styles for the right column */
 #right-column {
            background-color: #333; /* Change background color */
            color: white; /* Text color */
            padding: 15px; /* Padding around the content */
        }

        #right-column {
            background-color: #333; /* Change background color */
            color: white; /* Text color */
            padding: 15px; /* Padding around the content */
        }

        /* Additional specific styles for elements within the right column */
        #right-column .border-light {
            border-color: #ddd; /* Border color for the fieldset */
        }

        #right-column .text-light {
            color: #ddd; /* Color for text */
        }

        #right-column .bg-light {
            background-color: #ddd; /* Background color */
            color: #333; /* Text color */
        }
        .card {
            border-radius: 0;
            border: 1px solid #000;
            background-color: #fff;
        }

        .card-body {
            display: flex;
            height: 100%;
            padding: 10px;
        }

        .col-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .form-control {
            width: calc(100% - 30px);
            margin: 5px 0;
        }


        /* Adjust specific styles for your elements */
        #pos-header {
            background-color: #f0f0f0;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        #pos-header h3 {
            margin: 0;
        }

        #pos-form {
            padding: 10px;
        }

        .card {
            border-radius: 0;
            border: 1px solid #000;
            background-color: #fff;
        }

        .card-body {
            padding: 10px;
        }

        .col-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .form-control {
            width: calc(100% - 30px);
            margin: 5px 0;
        }

        .table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #000;
        }

        .table th {
            background-color: #f0f0f0;
        }
        .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin: 20px;
            background-color: #f5f5f5; /* Change the background color */
            color: #333; /* Text color */
            display: flex; /* Ensures the box adapts to its content */
        }

        .form-box form {
            width: 100%; /* Allows the form to take up all available space */
        }

        .card-body {
    padding: 20px; /* Increase padding for inner content */
}

.computaion-pane {
    height: 300px; /* Increase height */
    padding: 20px; /* Increase padding for inner content */
}

.computaion-pane .row {
    height: 80px; /* Increase row height */
}

.computaion-pane .col-9 {
    flex: 0 0 100%; /* Adjust column width */
    max-width: 100%; /* Adjust column width */
}

.computaion-pane .bg-light {
    padding: px; /* Adjust padding */
}
    </style>
</head>
<body>
<div class="d-flex flex-column h-100">
        <div class="w-100 d-flex justify-content-between" id="pos-header">
            <h3>POS</h3>
        </div>
        
<form action="addsales.php" id="pos-form" class="h-100 flex-grow-1">
<div class="card rounded-0 border-dark h-100">
    <div class="card-body d-flex h-100 py-0 px-0">
        <div class="col-8 d-flex flex-column p-2">
        <div class="d-flex align-items-center">
    <label for="customer" class="control-label col-3 me-2">Customer Name</label>
    <input type="text" class="form-control form-control-sm py-0 control-sm rounded-0" id="customer_name" name="customer_name" value="Guest">
</div>
<div class="d-flex align-items-center">
    <label for="product" class="control-label col-3 me-2">Enter Product Name</label>
    <input type="text" autocomplete="off" autofocus class="form-control form-control-sm control-sm rounded-0" id="product_name" name="product">
</div>
<div class="d-flex align-items-center">
    <label for="price" class="control-label col-3 me-2">Enter Price</label>
    <input type="text" autocomplete="off" autofocus class="form-control form-control-sm control-sm rounded-0" id="price_input" name="price">
</div>
<div class="d-flex align-items-center">
    <label for="quantity" class="control-label col-3 me-2">Enter Quantity</label>
    <input type="text" autocomplete="off" autofocus class="form-control form-control-sm control-sm rounded-0" id="quantity_input" name="qty">
</div>

            <div class="flex-grow-1 bg-dark bg-gradient bg-opacity-25 mt-4">
                <table class="table table-hover table-striped table-bordered" id="item-list">
                    <colgroup>
                        <col width="5%">
                        <col width="10%">
                        <col width="10%">
                        <col width="35%">
                        <col width="20%">
                        <col width="20%">
                    </colgroup>
                    <thead>
                        <tr class="bg-dark bg-gradient text-light">
                            <th class="py-0 px-1"></th>
                            <th class="py-0 px-1">Customer</th>
                            <th class="py-0 px-1">Date</th>
                            <th class="py-0 px-1">Product</th>
                            <th class="py-0 px-1">Qty</th>
                            <th class="py-0 px-1">Price</th>

                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div id="right-column" class="col-4 bg-dark d-flex flex-column bg-gradient h-100 p-2">
    <div class="w-100 flex-grow-0">
        <fieldset class="border border-light p-1 text-light">
            <legend class="text-light w-auto float-none fs-5">POS OF BADBUNNY</legend>
            <label for="" class="fs-6">CHILL AND KEEP VAPING.</label>
        </fieldset>
    </div>
    <div class="w-100 flex-grow-1 computation-pane">
        <div class="w-100 d-flex align-items-end h-100">
        <div class="col-12">
        <div class="row gx-0 mb-3">
            <div class="col-3 text-light">Total</div>
            <div class="col-9 text-end bg-light px-3 py-2" id="sub_total">0.00</div>
        </div>

            <div class="row gx-0 mb-3">
                <div class="col-3 text-light">Amount Paid</div>
                <div class="col-9 text-end px-3 py-2">
                    <input type="number" class="form-control form-control-sm" id="amount_paid_input" name="amount_paid" value="0">
                </div>
                <input type="hidden" name="amount_paid" value="0">
            </div>
            <div class="row gx-0 mb-3">
                <div class="col-3 text-light">Change</div>
                <div class="col-9 text-end bg-light px-3 py-2"  id="change_value">0</div>
                <input type="hidden"  name="change" id="change_input" value="0">
            </div>
        </div>
    </div>
    <div class="pt-5 flex-grow-0">
        <h3 class="text-light">Checkout</h3>
        <button type="submit" class="btn btn-primary btn-lg">Checkout</button>
        <input type="hidden" name="total" value="0">
        <input type="hidden" name="amount_tendered" value="0">
        <input type="hidden" name="amount_change" value="0">
    </div>
</div>

</form> 
</div>

<script>
    // Function to copy form field values to the table
    function copyToTable() {
        const customer = document.getElementById('customer_name').value;
        const product = document.getElementById('product_name').value;
        const quantity = document.getElementById('quantity_input').value;
        const price = document.getElementById('price_input').value;

        const table = document.getElementById('item-list').getElementsByTagName('tbody')[0];

        // Remove previous rows
        while (table.rows.length > 0) {
            table.deleteRow(0);
        }

        // Insert a new row
        const newRow = table.insertRow();
        newRow.innerHTML = `
            <td></td>
            <td>${customer}</td>
            <td>${new Date().toLocaleDateString()}</td>
            <td>${product}</td>
            <td>${quantity}</td>
            <td>${price}</td>
        `;
    }

    // Add event listeners to trigger copyToTable function on input change for all form fields
    const formFields = document.querySelectorAll('input[type="text"]');
    formFields.forEach(field => {
        field.addEventListener('input', copyToTable);
    });
    // Find the price input field and the element displaying the total
const priceInput = document.getElementById('price_input');
const subTotalElement = document.getElementById('sub_total');

// Add an input event listener to the price input field
priceInput.addEventListener('input', function() {
    // Get the entered price value
    const price = parseFloat(priceInput.value) || 0; // Parse the input value to a number

    // Update the sub total with the entered price
    subTotalElement.textContent = price.toFixed(2); // Update the text content with the formatted price
});

document.getElementById('amount_paid_input').addEventListener('input', function() {
    const totalValue = parseFloat(document.getElementById('sub_total').textContent);
    const amountPaid = parseFloat(this.value);

    const change = amountPaid - totalValue;

    document.getElementById('change_value').textContent = change.toFixed(2);
    document.getElementById('change_input').value = change.toFixed(2);
});
</script>

</body>
</html>