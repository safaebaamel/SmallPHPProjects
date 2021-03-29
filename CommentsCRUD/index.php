<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulate data Using Ajax, PHP and Mysql</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrapper">
        <?php if (isset($errors)) { ?>
            <p style="text-align: center; color: red;"><?php echo $errors;?></p>
        <?php } ?>
        <?php echo $comments;?>
        <form method="POST"  action="index.php" class="comment_form">
            <div>
                <label for="name">Name</label>
                <input value="<?php echo $name; ?>" type="text" name="name" id="name"> 
            </div>
            <div>
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment" cols="30" rows="5"><?php echo $comm; ?></textarea>
            </div>
            <button type="submit" name="submit" id="submit_btn">Post</button>
            <button type="submit" name="edit" id="edit_btn">Save</button>
        </form>
    </div>

    <script src ="jquery.min.js"></script>
</body>
</html>