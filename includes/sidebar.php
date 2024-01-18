
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li>
<a href="index.php"><img src="assets/img/icons/dash1.svg" alt="img"><span style="color: white;"> Dashboard</span> </a>
</li>

<li class="submenu">
    <a href="javascript:void(0);">
        <img src="assets/img/icons/product.svg" alt="img">
        <span style="color: white;">Product</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="color: black; background-color: gray;"> <!-- Add background-color style -->
        <li style="color: black;"><a href="add-product.php">Add Product</a></li>
        <li><a href="addproductlist.php">Product List</a></li>
    </ul>
</li>


<li class="submenu">
    <a href="javascript:void(0);">
        <img src="assets/img/icons/sales1.svg" alt="img">
        <span style="color: white;">Sales</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="color: black; background-color: gray;"> <!-- Add background-color style -->
        <li style="color: black;"><a href="addsaleslist.php">Sales List</a></li>

    </ul>
</li>


<li class="submenu">
    <a href="javascript:void(0);">
        <img src="assets/img/icons/transfer1.svg" alt="img">
        <span style="color: white;">Customer</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="background-color: gray;"> <!-- Add background-color style -->
        <li><a href="add-customer.php" style="color: white;">Add Customer</a></li>
        <li><a href="addcustomerlist.php" style="color: white;">Customer List</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="javascript:void(0);">
        <img src="assets/img/icons/application.svg" alt="img">
        <span style="color: white;">Application</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="background-color: gray;"> <!-- Add background-color style -->
        <li><a href="sched.php" style="color: white;">Calendar</a></li>
        <li><a href="email.php" style="color: white;">Email</a></li>
        <li><a href="gmail.php" style="color: white;">Read Emails</a></li>
    </ul>
</li>


<li class="submenu">
    <a href="javascript:void(0);">
        <img src="assets/img/icons/time.svg" alt="img">
        <span style="color: white;">Report</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="background-color: gray;"> <!-- Add background-color style -->
        <li><a href="inventoryreport.php" style="color: white;">Inventory Report</a></li>
        <li><a href="sales_report.php" style="color: white;">Sales Report</a></li>
    </ul>
</li>


<li class="submenu">
    <a href="javascript:void(0);">
        <img src="assets/img/icons/users1.svg" alt="img">
        <span style="color: white;">Users</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="background-color: gray;"> <!-- Add background-color style -->
        <li><a href="userlist.php" style="color: white;">Users List</a></li>
    </ul>
</li>

<!-- Settings -->
<li class="submenu">
    <a href="javascript:void(0);">
        <img src="assets/img/icons/settings.svg" alt="img">
        <span style="color: white;">Settings</span>
        <span class="menu-arrow"></span>
    </a>
    <ul style="background-color: gray;"> <!-- Add background-color style -->
        <li><a href="settings.php" style="color: white;">Settings</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="javascript:void(0);">
        <img src="assets/img/icons/admin.svg" alt="img">
        <span style="color: white;">Admin</span>
        <span class="menu-arrow"></span>
    </a>
    
    <ul style="background-color: gray;"> <!-- Add background-color style -->
        <li><a href="profile.php" style="color: white;">Admin</a></li>
        <li><a href="javascript:void(0);" onclick="logoutAndDisableBack()" style="color: white;">Log out</a></li>
    </ul>
</li>

<script type="text/javascript">
    function disableBack() { 
        window.history.forward(); 
    }

    setTimeout(disableBack, 0);

    window.onunload = function () { 
        null; 
    };

    function logoutAndDisableBack() {
        // Perform the logout action
        // For example, if using sessions in PHP, you can destroy the session
        // session_start();
        // session_destroy();
        
        // Redirect to the login page or any other appropriate page
        window.location.href = "default/auth-login.php";
    }
</script>


</div>
</div>
</div>