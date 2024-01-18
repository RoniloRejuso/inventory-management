<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include('includes/header.php')
    ?>
    <style>
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

<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4> Add Product</h4>
                <h6 style="color: white;">Create new product</h6>
            </div>
        </div>

        <form action="addproduct.php" method="POST" enctype="multipart/form-data" style="background-color: #f5f5f5;">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        
                    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label for="brand" style="color: orange;">Brand</label>
        <select class="form-control" id="brand" name="brand" onchange="populateModels()" required>
            <option value="VIPO">VIPO</option>
            <option value="SOLOBAR">SOLOBAR</option>
            <option value="INSTABAR">INSTABAR</option>
            <option value="SHIFT">SHIFT</option>
            <option value="NASTY">NASTY</option>
            <option value="DEMONVAPE">DEMONVAPE</option>
            <option value="CHILLAX NEO">CHILLAX NEO</option>
            <option value="ENJOY">ENJOY</option>
            <option value="AEGIS">AEGIS</option>
            <option value="PUFFMASTER">PUFFMASTER</option>
        </select>
    </div>
</div>


<div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label for="model" style="color: orange;">Model</label>
        <select id="model" name="model" class="form-control" onchange="populateFlavors()" required>
            
        </select>
    </div>
</div>

<div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label class="orange-label" for="flavor" style="color: orange;">Flavor</label>
        <select class="form-control" id="flavor" name="flavor" required>
            <option value="">Select Flavor</option>
            <!-- Flavors will be populated dynamically -->
        </select>
    </div>
</div>

<script>
    var flavorsData = {
        
        "VIPO": {
        "VB CUBE": {
            "set 1": "2",
            "set 2": "2",
            "set 3": "6"
        }
    },
        "SOLOBAR": {
        "SOLOBAR": {
            "fresh purple black": "2",
            "cold blast": "2",
            "home made pink": "4",
            "real mix": "1",
            "mix red farm": "2",
            "frozen monster": "3",
            "home made yellow": "3",
            "pink greek": "3"
        }
    },
    "INSTABAR": {
        "INSTABAR": {
            "bazooke": "4",
            "water": "4",
            "red manila": "5",
            "mug": "5"
        }
    },
    "SHIFT": {
        "GRIPBAR": {
            "forsetti": "4",
            "odin": "4",
            "skadi": "3",
            "tyr": "3"
        }
    },
        "NASTY": {
        "NASTY": {
            "manic magic": "3",
            "cosmic bake": "1",
            "ruby Fussion": "3",
            "midnight mix": "3",
            "crimson burts": "3",
            "Cosmic Cortland": "3"
        }
    },
        "DEMONVAPE": {
        "WARBAR": {
            "snake pits": "4",
            "man of isle": "5",
            "discharge": "3",
            "artillery": "7",
            "cult of personality": "3",
            "lies of adolf": "5",
            "mix dimension": "3",
            "anarchism": "7"
        }
    },
    "CHILLAX NEO": {
        "CHILLAX NEO": {
            "mungle fusion": "4",
            "menthol": "4",
            "twisted ghost": "3",
            "yellow hunk": "5",
            "greek freak": "4",
            "black mamba": "4",
            "moonwalk": "4",
            "frigid spore": "9"
        }
    },
    "ENJOY": {
        "ENJOY": {
            "cappuccino": "2"
        }
    },
    "AEGIS": {
        "GEEKBAR": {
            "browned top": "6",
            "ry4": "4",
            "ykt": "2",
            "root sparkle": "6",
            "vanilla cupcake": "5"
        }
    },
    "PUFFMASTER": {
        "PUFFMASTER": {
            "vl": "1",
            "ls": "1"
        }
    },
        
    };

    function populateModels() {
    var brandSelect = document.getElementById("brand");
    var modelSelect = document.getElementById("model");
    var selectedBrand = brandSelect.value;
    modelSelect.innerHTML = "<option value=''>Select Model</option>";

    if (selectedBrand !== "") {
        for (var modelPrice in flavorsData[selectedBrand]) {
            var option = document.createElement("option");
            option.value = modelPrice;
            option.text = modelPrice;
            modelSelect.appendChild(option);
        }
    }
}

function populateFlavors() {
    var brandSelect = document.getElementById("brand");
    var modelSelect = document.getElementById("model");
    var flavorSelect = document.getElementById("flavor");
    var selectedBrand = brandSelect.value;
    var selectedModelPrice = modelSelect.value;
    flavorSelect.innerHTML = "<option value=''>Select Flavor</option>";

    if (selectedBrand !== "" && selectedModelPrice !== "") {
        var flavors = flavorsData[selectedBrand][selectedModelPrice];
        for (var flavor in flavors) {
            var option = document.createElement("option");
            option.value = flavor;
            option.text = flavor + " - " + flavors[flavor];
            flavorSelect.appendChild(option);
        }
    }
}
</script>

<div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label style="color: orange;">Quantity</label>
        <input type="text" id="quantity" name="quantity" class="form-control" required>
    </div>
</div>

<div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label style="color:orange" >Selling Price</label>
        <input type="text" id="selling_price" name="selling_price" class="form-control" required>
    </div>
</div>

<div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label style="color: orange;">Unit Price</label>
        <input type="text" id="unit_price" name="unit_price" class="form-control" required>
    </div>
</div>

<script> function restrictToNumbers(inputField) {
    inputField.addEventListener('input', function () {
        this.value = this.value.replace(/[^0-9]/g, ''); // Allow only numbers
        if (this.value.length > 9) {
            this.value = this.value.slice(0, 9); // Restrict to maximum 9 characters
        }
    });
}

var quantityInput = document.getElementById('quantity');
var sellingPriceInput = document.getElementById('selling_price');
var unitPriceInput = document.getElementById('unit_price');

restrictToNumbers(quantityInput);
restrictToNumbers(sellingPriceInput);
restrictToNumbers(unitPriceInput);
</script>

<div class="col-lg-3 col-12">
    <div class="form-group">
        <label style="color: orange;">Product Image</label>
        <input type="file" id="image" name="image" class="form-control" required>
        <div class="image-upload"></div>
    </div>
</div>

<script>document.getElementById('image').addEventListener('change', function (event) {
    var file = event.target.files[0];

    // Check if a file is selected
    if (file) {
        var fileSize = file.size; // Size in bytes
        var fileType = file.type; // Mime type

        // Accepted file types
        var acceptedTypes = ['image/png', 'image/jpeg', 'image/webp'];

        // Check file type
        if (!acceptedTypes.includes(fileType)) {
            alert('Only PNG, JPEG, and WebP formats are allowed.');
            event.target.value = ''; // Clear the input field
            return;
        }

        // Check file size (in bytes)
        var maxSize = 10 * 1024 * 1024; // 10 MB
        if (fileSize > maxSize) {
            alert('File size exceeds the limit of 10 MB.');
            event.target.value = ''; // Clear the input field
            return;
        }
    }
});
</script>

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label style="color: orange;">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option>AVAILABLE</option>
                                    <option>OUT OF STOCK</option>
                                </select>
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


</script>

<?php include('includes/footer.php'); ?>

</body>
</html>