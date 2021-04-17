<?php
    include "model.php";

    $model = new Treatment();
    $id = $_REQUEST['id']; 
    $delete = $model->delete($id);

    if ($delete) {
        echo '<script>alert("Deleted")</script>';
        echo '<script>window.location.href = "records.php";</script>';

    }


?>