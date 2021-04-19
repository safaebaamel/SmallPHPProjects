<?php
    
    include('connection.php');

    $con = new Connection();
    if (isset($_POST['btn-submit'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $emailid = $_POST['emailid'];
        $contact = $_POST['contact'];
        $docapp = $_POST['docapp'];

        $query = "INSERT INTO appointment (fname, lname, email, contact, docapp) VALUES ('$fname', '$lname', '$emailid','$contact', '$docapp')";

        $result = $con->getC()->query($query);
        if ($result) {
            echo "<script>alert('Appointment registered!');</script>";
            echo "<script>window.open('../View/admin-panel.php', '_self');</script>";
        }
    }

?>