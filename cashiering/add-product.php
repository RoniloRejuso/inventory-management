<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('includes/header.php')
    ?>
</head>
<body>

<?php
    include('includes/navbar.php')
    ?>

<?php
    include('includes/sidebar.php')
    ?>

<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Add</h4>
                <h6>Create new product</h6>
            </div>
        </div>

        <form action="addproduct.php" method="POST" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" id="product" name="product" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" id="category" name="category" required>
                                <option>Choose Category</option>
                                    <option>Vape Juice</option>
                                    <option>DISPOSABLE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Brand</label>
                                <select class="form-control" id="brand" name="brand" required>
                                <option>Choose Brand</option>
                                    <option>INSTABAR</option>
                                    <option>SOLOBAR</option>
                                    <option>SHIFT GRIPBAR</option>
                                    <option>VIPO VB CUBE</option>
                                    <option>NASTY</option>
                                    <option>DEMONVAPE</option>
                                    <option>CHILLAX NEO</option>
                                    <option>ENJOY</option>
                                    <option>AEGIS GEEKBAR</option>
                                    <option>PUFFMASTER</option>
                             </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Unit</label>
                                <select class="form-control" id="unit" name="unit" required>
                                    <option>Choose Unit</option>
                                    <option>Flavor</option>
                                    <option>POD</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" id="quantity" name="quantity" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" id="price" name="price" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="status" name="status" required>
                                <option>Choose Status</option>
                                    <option>AVAILABLE</option>
                                    <option>OUT OF STOCK</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" id="image" name="image" class="form-control" required>
                                <div class="image-upload">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-primary" name="add_product_btn" value="Submit">
                            <a href="productlist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>