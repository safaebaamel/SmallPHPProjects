<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron" style="background-image: url('assets/pictures/hosp.jpg'); background-size:cover; height: 300px; width: 100%;">
    </div>
    <div class="container m-10 mt-3">
        <div class="card">
            <div class="card-body text-center"style="background-color: #3498DB; color: white">
                Patient Details
            </div>
            <div class="card-body"> 
            </div>
            <table class="table table-hover table-responsive"">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email ID</th>
                        <th>Contact</th>
                        <th>Doctor Appointment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('../Controler/patientsdetails.controler.php');
                        include('../Controler/connection.php');
                          $con = new Connection();
                          $p = new Patient();
                          $p->printing($con->getC());  
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>