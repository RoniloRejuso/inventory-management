<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Dreams Pos admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js'></script>
</head>
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
<div class="row align-items-center w-100">
<div class="col-lg-10 col-sm-12">
<h3 class="page-title" style="color: white;">Calendar</h3>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 text-end">
<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_event">Create Event</a>
</div>
</div>
</div>

<div class="col-lg-9 col-md-8">
<div class="card bg-white">
<div class="card-body">
<div id="calendar"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="add_event" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="eventForm">
                    <div class="form-group">
                        <label>Event Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="eventName" name="eventName">
                    </div>
                    <div class="form-group">
                        <label>Event Date <span class="text-danger">*</span></label>
                        <!-- Date input field -->
                        <div class="cal-icon">
                            <input class="form-control" type="date" id="eventDate" name="eventDate">
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="calendar"></div>

<script>
    eventForm.addEventListener('submit', function (event) {
        event.preventDefault();

        // Get the event details
        var eventName = document.getElementById('eventName').value;
        var eventDate = document.getElementById('eventDate').value;

        // Create HTML for the new event
        var newEventHTML = `
            <div class="calendar-event">
                <div class="calendar-event-header">
                    <div class="calendar-event-title">${eventName}</div>
                    <div class="calendar-event-date">${eventDate}</div>
                    <button class="btn btn-danger delete-event-btn" onclick="deleteEvent(this)">Delete</button>
                </div>
                <div class="calendar-event-description">
                    <!-- Add additional event details or description here -->
                </div>
            </div>
        `;

        // Append the new event HTML to the calendar
        document.getElementById('calendar').insertAdjacentHTML('beforeend', newEventHTML);

        // Reset the form and close the modal
        eventForm.reset();
        var modal = bootstrap.Modal.getInstance(addEventModal);
        modal.hide();

        // Redirect to success.html after submitting the form
        window.location.href = 'calendar.php';
    });

    function deleteEvent(btn) {
        var eventToDelete = btn.closest('.calendar-event');
        eventToDelete.remove();
    }
</script>

 <script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>