<?php
//connection to the database 
session_start();

$name ="";
$comm = "";

$db = mysqli_connect('localhost', 'root', '', 'ajax-crud');

if (!$db) {
    die('Error' . mysqli_error($db));
}

// save section
$errors = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $com = $_POST['comment'];
    
    if (empty($name) | empty($com)) {
        $errors = "You must fill in the fields";
    } else {
    $save = "INSERT INTO comments(name, comment) VALUES ('{$name}', '{$com}')";
    mysqli_query($db, $save);
    header("location: index.php");
}
exit();
}

// delete section 

if (isset($_GET['del_com'])) {
    $id =$_GET['del_com'];
    mysqli_query($db, "DELETE FROM comments WHERE id=$id");
    header("location: index.php");
}


// edit section

$ed = "";

if (isset($_GET['edit_com'])) {
    $ed = $_GET['edit_com'];
    $_SESSION['id'] = $ed;
    $vr = mysqli_query($db, "SELECT * FROM comments WHERE id=$ed");
    while ($row = $vr->fetch_assoc()) {
        $name =  $row['name'];
        $comm = $row['comment'];
    }
}
if (isset($_POST['edit'])) {
    $id = $_SESSION['id'];
    // echo $id;
    $n = $_POST['name'];
    $c = $_POST['comment'];
    mysqli_query($db, "UPDATE comments SET `name`= '$n',`comment`='$c' WHERE `id`='$id'");
    // header("location: index.php");
}


$r = mysqli_query($db, "SELECT * FROM comments");

$comments = '<div id="display_area">';
while ($row = mysqli_fetch_array($r)) {
    $comments .= '<div class="comment_box">
        <span type="submit" name="delete" class="delete"><a href="index.php?del_com= '. $row['id'].'">delete</a></span>
        <span type="submit" class="edit" name="edit"><a href="index.php?edit_com= '. $row['id'].'">edit</a></span>
        <div class="display_name" name= "name"> '. $row['name'] .'</div>
        <div class="display_text">' . $row['comment'] . '</div>
    </div>';
}
    $comments .= '</div>';

?>