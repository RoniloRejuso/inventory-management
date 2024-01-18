
<style>
    #computation-pane {
        font-size:1.9rem !important;
    }
</style>
<div class="d-flex flex-column h-100">
<div class="w-100 d-flex justify-content-between" id="pos-header">
<h3>POS</h3>
</div>

<form action="addsales.php" id="pos-form" class="h-100 flex-grow-1">
<div class="card rounded-0 border-dark h-100">
    <div class="card-body d-flex h-100 py-0 px-0">
        <div class="col-8 d-flex flex-column p-2">
        <div class="d-flex align-items-center mb-1">
                <label for="customer" class="control-label col-3 me-2">Customer Name</label>
                <input type="text" autocomplete="off" class="form-control form-control-sm py-0 control-sm rounded-0" id="customer_name" name="customer_name" value="Guest">
            </div>
            <div class="d-flex align-items-center">
                <label for="product" class="control-label col-3 me-2">Enter Product Name</label>
                <input type="text" autocomplete="off" autofocus class="form-control form-control-sm control-sm rounded-0" id="product_code">
            </div>
            <div class="d-flex align-items-center">
                <label for="product" class="control-label col-3 me-2">Enter Price </label>
                <input type="text" autocomplete="off" autofocus class="form-control form-control-sm control-sm rounded-0" id="product_code">
            </div>
            <div class="d-flex align-items-center">
                <label for="product" class="control-label col-3 me-2">Enter Quantity </label>
                <input type="text" autocomplete="off" autofocus class="form-control form-control-sm control-sm rounded-0" id="product_code">
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
        <div class="col-4 bg-dark d-flex flex-column bg-gradient h-100 p-2">
            <div class="w-100 flex-grow-0">
                <fieldset class="border border-light p-1 text-light">
                    <legend class="text-light w-auto float-none fs-5">Keyboard Shortcuts</legend>
                    <label for="" class="fs-6">Ctrl + F1 = Focuses the Product Code Text Field.</label>
                    <label for="" class="fs-6">Ctrl + F2 = Focuses the Discount % Text Field.</label>
                    <label for="" class="fs-6">Ctrl + F3 = Tender Amount.</label>
                </fieldset>
            </div>
            <div class="w-100 flex-grow-1 computaion-pane">
                <div class="w-100 d-flex align-items-end h-100">
                    <div class="col-12">
                        <div class="row gx-0 mb-3">
                            <div class="col-3 text-light">Total</div>
                            <div class="col-9 text-end bg-light px-1" id="sub_total">0.00</div>
                        </div>
                        <div class="row gx-0 mb-3">
                            <div class="col-3 text-light">Amount</div>
                            <div class="col-9 text-end bg-light px-1" contenteditable id="disc_perc">0</div>
                            <input type="hidden" name="disc_perc" value="0">
                        </div>
                        <div class="row gx-0 mb-3">
                            <div class="col-3 text-light">Change</div>
                            <div class="col-9 text-end bg-light px-1" id="disc_amount">0</div>
                            <input type="hidden" name="disc_amount" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 flex-grow-0">
                <h3 class="text-light">Checkout</h3>
                <div class="w-100 px-1 bg-light text-end" id="grand-total" style="height:10vh;font-size:3rem">0.00</div>
                <input type="hidden" name="total" value="0">
                <input type="hidden" name="amount_tendered" value="0">
                <input type="hidden" name="amount_change" value="0">
            </div>
        </div>
    </div>
</div>
</form> 
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#addToItemList').on('click', function() {
        // Get values from inputs
        var qty = $('#qty').val();
        var price = $('#price').val();
        var currentDate = new Date().toLocaleDateString(); // Get current date

        // Create a table row and append to the table
        var newRow = `
            <tr>
                <td><input type="checkbox"></td>
                <td>${qty}</td>
                <td>${currentDate}</td>
                <td>Product Name</td>
                <td>${price}</td>
                <td>${qty * price}</td>
            </tr>
        `;
        
        $('#item-list tbody').append(newRow); // Append new row to the table
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#pos-form').on('submit', function(e) {
        e.preventDefault(); // Prevent form submission

        // Get values from the table and construct the receipt content
        var receiptContent = $('#item-list tbody').html();

        // Append receipt content to the receipt section
        $('#receipt table').html(receiptContent);

        // Show the receipt section
        $('#receipt').show();
    });
});
</script>