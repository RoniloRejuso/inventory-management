<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('dbcon.php');

if (isset($_POST['register_btn'])) {
    // Your existing registration logic here
    // ...
}
?>
<head>
<?php include('includes/header.php')?>
    
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
<script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>

</head>

<body>

<?php include('includes/navbar.php')?>
<?php include('includes/sidebar.php')?>


<div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Admin Profile</h4>
                    <h6 style="background-color: #f5f5f5;">Change your Profile</h6>
                </div>
            </div>

            <div class="card" style="background-color: #f5f5f5;" >
                <div class="card-body" style="border-radius: 10px;">
                    <div class="profile-set" style="border-radius: 10px;">
                        <div class="profile-head" style="border-radius: 10px;"></div>
                        <div class="profile-top">
                            <div class="profile-content">
                                <div class="profile-contentimg">
                                    <img src="assets/img/customer/customer5.jpg" alt="img" id="blah">
                                    <div class="profileupload">
                                        <input type="file" id="imgInp">
                                        <a href="javascript:void(0);"><img src="assets/img/icons/edit-set.svg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="profile-contentname">
                                    <h2>Admin</h2>
                                    <h4 style="font-weight: bold;">Updates Your Personal Details.</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- User registration form -->
                    <form method="post" action="profilecon.php" style="background-color: #f5f5f5; color:orange"> 
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label style="font-weight: bold;">Full Name</label>
                                    <input type="text" maxlength="30" name="fullname" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label style="font-weight: bold;">Email</label>
                                    <input type="text" maxlength="30" name="email" placeholder="Enter email here">
                                </div>
                            </div>
                            
                           
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label style="font-weight: bold;">Password</label>
                                    <div class="pass-group">
                                        <input maxlength="10" type="password" name="password" class=" pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="profile.php">
    <!-- Your form fields -->
    <div class="col-12">
        <button type="submit" name="register_btn" class="btn btn-submit me-2">Save Changes</button>
        <a href="#" class="btn btn-cancel">Cancel</a>
    </div>
</form>

                        </div>
                    </form>
                    <!-- End of User registration form -->
                </div>
            </div>
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