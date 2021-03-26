<?php
    // connection to the database
    $db = mysqli_connect('localhost','root', '', 'crud');

    $errors = "";

    if(isset($_POST['submit'])) {
        $task = $_POST['task'];
        if (empty($task)) {
            $errors = "You must fill in the task";
        } else {
        mysqli_query($db, "INSERT INTO data(tasks) VALUES ('$task') ");
        header('location: index.php ');
        }
    }
    // delete a task
    if (isset($_GET['del_task'])) {
        $id = $_GET['del_task'];

        mysqli_query($db, "DELETE FROM data WHERE id=$id");
        header("location: index.php");
    }
    $tasks = mysqli_query($db, "SELECT * FROM data")

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list application with php and MYSQL</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="heading">
        <h2>Todo list application with php and MYSQL</h2>
    </div>
    <form action="index.php" method="POST">
        <?php if (isset($errors)) { ?>
            <p><?php echo $errors;?></p>
        <?php } ?>
        <input type="text" class="task_input" name="task">
        <button type="submit" class="task_btn" name="submit">Add Task</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>N</th>
                <th>Tasks</th>
                <th>Action</th>
            </tr>
            <tbody>
            <?php 
                while ($row = mysqli_fetch_array($tasks)) {?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td class="task"><?php echo $row['tasks']; ?></td>
                    <td class="delete" >
                    <a href="index.php?del_task=<?php echo $row['id'];?>">x</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </thead>
    </table>

</body>
</html>