<!DOCTYPE html>
<html lang="en">
<head>


<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<?php include('includes/header.php'); ?>

</head>
<body>

</div>
<?php include('includes/navbar.php'); ?>
<?php include('includes/sidebar.php'); ?>
<div class="page-wrapper cardhead">
<div class="content">

<div class="page-header">
<div class="row">

<div class="col-sm-12" style="background-color: white;">
    <h3 class="page-title">Flot Chart</h3>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active" >Flot Charts</li>
    </ul>
</div>
</div>
</div>

<div class="row">

<div class="col-md-6" style="background-color: white;">
<div class="card">
<div class="card-header">
<div class="card-title">Bar Chart</div>
</div>
<div class="card-body  chart-set">
<div class="h-250" id="flotBar1"></div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="card">
<div class="card-header">
<div class="card-title">Bar Chart</div>
</div>
<div class="card-body chart-set">
<div class="h-250" id="flotBar2"></div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="card">
<div class="card-header">
<div class="card-title">Line Chart</div>
</div>
<div class="card-body chart-set">
<div class="h-250" id="flotLine1"></div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="card">
<div class="card-header">
<div class="card-title">Line ChartPOints</div>
</div>
<div class="card-body chart-set">
<div class="h-250" id="flotLine2"></div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="card">
<div class="card-header">
<div class="card-title">Area Chart</div>
</div>
<div class="card-body chart-set">
<div class="h-250" id="flotArea1"></div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="card">
<div class="card-header">
<div class="card-title">Area Chart Points</div>
</div>
<div class="card-body chart-set">
<div class="h-250" id="flotArea2"></div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="card">
<div class="card-header">
<div class="card-title">Pie Chart</div>
</div>
<div class="card-body chart-set">
<div class="h-250" id="flotPie1"></div>
</div>
</div>
</div>


<div class="col-md-6">
<div class="card">
<div class="card-header">
<div class="card-title">Donut Chart</div>
</div>
<div class="card-body chart-set">
<div class="h-250" id="flotPie2"></div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

<?php include('includes/footer.php'); ?>
<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/flot/jquery.flot.js"></script>
<script src="assets/plugins/flot/jquery.flot.fillbetween.js"></script>
<script src="assets/plugins/flot/jquery.flot.pie.js"></script>
<script src="assets/plugins/flot/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>