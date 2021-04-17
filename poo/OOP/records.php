<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>records</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">MESSAGES WE'VE GOT</h1>
                <hr class="line">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'model.php';
                            $model = new Treatment();
                            $i = 1;
                            $rows = $model->fetch();
                            if (!empty($rows)) {
                                foreach($rows as $row) {

                        ?>
                        <tr>
                            <td> <?php echo $i++;?></td>
                            <td> <?php echo $row['name'];?></td>
                            <td> <?php echo $row['email'];?></td>
                            <td> <?php echo $row['name'];?></td>
                            <td> <?php echo $row['message'];?></td>
                            <td>
                                <a href="read.php?id=<?php echo $row['id'];?>" class="badge badge-info">Read</a>
                                <a href="delete.php?id=<?php echo $row['id'];?>" class="badge badge-danger">Delete</a>
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="badge badge-success">edit</a>
                            </td>
                    
                        </tr>
                        <?php  
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</body>
</html>