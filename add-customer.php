<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
include('includes/header.php')
?>
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
    <style>
        .invalid-input {
    border-color: yellow;
}
/* Additional CSS to reset margins and padding */
form {
    background-color: #f5f5f5; /* Off-white background color */
    margin: 0; /* Remove default margins */
    padding: 0; /* Remove default padding */
}
label{
            color: orange;
        }
        /* CSS to add curved edges to the form */
form {
    background-color: #f5f5f5; /* Off-white background color */
    border-radius: 10px; /* Adjust the radius to your preference */
    padding: 20px; /* Add padding for spacing */
}

    </style>
</head>
<body>
    <?php
    include('includes/navbar.php')
    ?>
    <?php
    include('includes/sidebar.php')
    ?>


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Customer Management</h4>
                <h6 style="color: white;">Add Customer</h6>
            </div>
        </div>

        <form action="addsales.php" method="POST" enctype="multipart/form-data" style="background-color: #f5f5f5;">
            <div class="card">
                <div class="card-body">
                    <div class="row">
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label for="id" style="color: orange;">Id</label>
                <input type="text" id="id" name="id" class="form-control" required>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label for="customer_name" style="color: orange;">Customer Name</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control" required>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label style="color: orange;">Date</label>
                <div class="input-group">
                    <input type="text" id="date" name="date" class="form-control" maxlength="2" placeholder="DD" required>
                    <span class="input-group-text">/</span>
                    <input type="text" id="month" name="month" class="form-control" maxlength="2" placeholder="MM" required>
                    <span class="input-group-text">/</span>
                    <input type="text" id="year" name="year" class="form-control" maxlength="4" placeholder="YYYY" required>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label for="product" style="color: orange;">Product</label>
                <input type="tel" id="product" name="product" class="form-control" required>
            </div>
        </div>

        <div class="col-lg-12">
            <input type="submit" class="btn btn-primary" name="add_customer_btn" value="Submit">
            <a href="javascript:void(0);" class="btn
btn-cancel">Cancel</a>
</div>
</div>

</form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('id').addEventListener('input', function (event) {
        var value = event.target.value;
        var regex = /^\d{0,6}$/; // Regex to allow only numbers and a maximum of 6 characters
        if (!regex.test(value)) {
            event.target.value = value.replace(/[^\d]/g, '').slice(0, 6); // Remove non-numeric characters and limit to 6 characters
        }
    });

    document.getElementById('customer_name').addEventListener('input', function(event) {
    var value = event.target.value.trim(); // Trim leading and trailing spaces
    event.target.value = value;
});

    document.getElementById('customer_name').addEventListener('input', function (event) {
        var value = event.target.value;
        if (value.length > 40) {
            event.target.value = value.slice(0, 40); // Limit to 40 characters
        }
    });
    
    
    document.getElementById('date').addEventListener('input', function (event) {
    var value = event.target.value.replace(/\D/g, '').substring(0, 2); // Extract only digits and limit to 2 characters
    var day = parseInt(value);

    // Validate day (should not exceed 31 or be less than 1)
    if (value.length === 2) {
        if (day > 31 || day < 1) {
            event.target.value = value.slice(0, 1);
        } else {
            event.target.value = value;
        }
    } else {
        event.target.value = value;
    }
});

document.getElementById('month').addEventListener('input', function (event) {
    var value = event.target.value.replace(/\D/g, '').substring(0, 2); // Extract only digits and limit to 2 characters
    var month = parseInt(value);

    // Validate month (should not exceed 12 or be less than 1)
    if (value.length === 2) {
        if (month > 12 || month < 1) {
            event.target.value = value.slice(0, 1);
        } else {
            event.target.value = value;
        }
    } else {
        event.target.value = value;
    }
});

document.getElementById('product').addEventListener('input', function(event) {
    var value = event.target.value.trim(); // Trim leading and trailing spaces
    event.target.value = value;
});

document.getElementById('year').addEventListener('input', function (event) {
    var value = event.target.value.replace(/\D/g, '').substring(0, 4); // Extract only digits and limit to 4 characters
    var year = parseInt(value);

    // Validate year (should not be lower than 2022)
    if (value.length === 4) {
        if (year < 2022) {
            event.target.value = value.slice(0, 3);
        } else {
            event.target.value = value;
        }
    } else {
        event.target.value = value;
    }
});





    document.getElementById('product').addEventListener('input', function (event) {
        var value = event.target.value;
        if (value.length > 40) {
            event.target.value = value.slice(0, 40); // Limit to 40 characters
        }
    });
</script>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

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