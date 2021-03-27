<?php
//connection to the database 

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

if (isset($_GET['delete'])) { 
    $id = $_GET['id'];
    mysqli_query($db, "DELETE FROM comments WHERE id=" . $id);
    header("location: index.php");
}

$r = mysqli_query($db, "SELECT * FROM comments");

$comments = '<div id="display_area">';
while ($row = mysqli_fetch_array($r)) {
    $comments .= '<div class="comment_box">
        <span type="submit" name="delete" class="delete" data-id="' . $row['id'] . '">delete</span>
        <span class="edit" name="edit" data-id="' . $row['id'] . '">edit</span>
        <div class="display_name"> '. $row['name'] .'</div>
        <div class="display_text">' . $row['comment'] . '</div>
    </div>';
}
    $comments .= '</div>';

?>