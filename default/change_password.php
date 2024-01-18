<?php
include('change_password_process.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-color: skyblue;"> <!-- Apply sky blue background to the whole page -->
    <div class="container p-3 border border-5 rounded-3" style="width: 40%; background-color: white;"> <!-- Adjust the container's background -->
        <h1 class="display-6 text-center p-2 bg-light">
            Change Password
        </h1>
        <form action="change_password_process.php" method="post" style="background-color: skyblue; padding: 20px;">> <!-- Set the action to the same file -->
            <div class="row mb-3 justify-content-md-center">
                <label for="inputEmail" class="col-4 col-form-label" style="color: white;">Email</label>
                <div class="col-lg-auto">
                    <input type="email" maxlength="60" name="email" id="inputEmail" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3 justify-content-md-center">
                <label for="inputPassword" class="col-4 col-form-label" style="color: white;">New Password</label>
                <div class="col-lg-auto">
                    <input type="password" maxlength="15" name="new_password" id="password" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3 justify-content-md-center">
                <div class="col-8">
                    <button type="submit" class="btn btn-primary" name="change">Change</button>
                </div>
            </div>
        </form>
    </div>
    <script src="sweetalert.min.js"></script>
   

</body>
</html>
