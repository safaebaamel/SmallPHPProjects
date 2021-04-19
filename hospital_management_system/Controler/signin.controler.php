<?php

    class signin {

        public function sign($con) {
            $_SESSION['err'] = "";
            if(isset($_POST['submit'])) {
                session_start();
                $username = $_POST['username'];
                $password = $_POST['password'];
                
    
                $query = "SELECT * FROM login WHERE username='$username' AND password= '$password' AND role= 1";
                $test = $con->query($query);
                $row = mysqli_fetch_array($test);

                
                if (mysqli_num_rows($test)>0) {
                    $_SESSION['username'] = $username;
                    $_SESSION['idadmin'] = $row['role'];
                    header("Location:  admin-panel.php");
                } else {
                    $_SESSION['err'] = "password or email incorrect";
                }
            }
        }
    }

    class signout {
        public function __construct() {
            if (isset($_GET['disconnect'])) {
                unset($_SESSION['idadmin']);
                header('location: signin.php');
            }
        }
    }


?>