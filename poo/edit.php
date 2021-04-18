<?php 
    include "model.php";
    $con = new Connection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO BABY STEPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="col-md-5 mx-auto"></div>
            <div class="row">
                <h1 class="text-center">Send Us a cute Message</h1>
                <hr class="line">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <?php 
                    $treat = new Treatment();
                    $id = $_REQUEST['id'];
                    $row = $treat->edit($id);

                    if (isset($_POST['update'])) {
                        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['number'])) {
                            
                            $data['name'] = $_POST['name'];
                            $data['email'] = $_POST['email'];
                            $data['mobile'] = $_POST['number'];
                            $data['message'] = $_POST['message'];
                            $data['id'] = $id;
        
                            $update = $treat->update($data);
                            header("location: records.php?id=$id");
                        
                        } else {
                            echo "<script>alert('Empty field!')</script>";
                            header("location: edit.php?id=$id");
                        }
                    }
              ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo $row['name'];?>"class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Number No.</label>
                        <input type="text" name="number" value="<?php echo $row['mobile'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="message" rows="4" placeholder="Your Message" class="form-control"><?php echo $row['message'];?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>