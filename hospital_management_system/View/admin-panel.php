<?php
    include('../Controler/signin.controler.php');

    $signout = new signout();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    
</head>
<body>
    <div class="jumbotron" style="background-image: url('assets/pictures/hosp.jpg'); background-size:cover; height: 300px; width: 100%;">
    </div>
    <div class="container-fluid m-3">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color: #3498DB;">Patients</a>
                    <a href="patient-details.php" class="list-group-item ">Patient Details</a>
                    <a href="" class="list-group-item ">Add Payment/Checkout</a>
                </div>
                <hr>
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color: #3498DB;">Staff</a>
                    <a href="" class="list-group-item ">Staff Details</a>
                    <a href="" class="list-group-item ">Add New Staff </a>
                    <a href="" class="list-group-item ">Remove Staff Member</a>
                    <a href="signin.php?disconnect" class="list-group-item">Disconnect</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-center" style="background-color: #3498DB; color: #ffffff;">
                    <h2>Book An Appointment</h2>
                    </div>
                    <div class="card-body">
                        <form action="../Controler/booking.controler.php" method="post" class="form-group">
                            <label for="">First Name: </label>
                            <input type="text" name="firstname" class="form-control"><br>
                            <label for="">Last Name: </label>
                            <input type="text" name="lastname" class="form-control"><br>
                            <label for="">Email ID: </label>
                            <input type="email" name="emailid" class="form-control"><br>
                            <label for="">Contact: </label>
                            <input type="text" name="contact" class="form-control"><br>
                            <label for="">Doctor Appointment: </label>
                            <select class="form-control" name="docapp">
                                <option value="DR.Ali from 6pm to 8pm">Dr.Ali from 6pm to 8pm</option>
                                <option value="DR.John from 4pm to 6pm">Dr.John from 4pm to 6pm</option>
                            </select><br>
                            <input type="submit" class="btn btn-primary" name="btn-submit" value="Enter Appointment">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>
