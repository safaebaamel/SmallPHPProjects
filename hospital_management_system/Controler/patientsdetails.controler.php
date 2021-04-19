<?php
    class Patient {

        function printing($con) {
            $query = "SELECT * FROM appointment";
            $result = $con->query($query);
            while ($row = mysqli_fetch_array($result)) {
                $fname = $row['fname'];
                $lname = $row['lname'];
                $emailid = $row['email'];
                $contact = $row['contact'];
                $docapp = $row['docapp'];

                echo "<tr>
                <th>$fname</th>
                <td>$lname</td>
                <td>$emailid</td>
                <td>$contact</td>
                <td>$docapp</td>
            </tr>";
            }
        }

    }


?>