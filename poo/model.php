<?php
    class Connection {
        public $localhost = "localhost";
        public $user = "root";
        public $passwd = "";
        public $database = "poo";
        public $con;

        public function __construct() {
            try {
                $this->con = new mysqli($this->localhost, $this->user,$this->passwd, $this->database);
            } catch (Exception $e) {
                echo "Not connected!" . $e->getMessage();
            }
        }
        public function getC() {
            return $this->con;
        }
    } 

    class Treatment extends Connection {
        
        public function insert() {
            if (isset($_POST['submit'])) {
                if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['number'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $number = $_POST['number'];
                    $message = $_POST['message'];

                    $query = "INSERT INTO records (name, email, mobile, message) VALUES ('$name', '$email', '$number', '$message')";

                    $c = $this->getC()->query($query);
                    if ($c) {
                        echo "<script>alert('Your Message has been sent successfully!')</script>";
                        echo "<script>window.location.href = 'index.php'; </script>";

                    } else {
                        echo "<script>alert('Not working!')</script>";
                        echo "<script>window.location.href = 'index.php'; </script>";
                    }
                } else {
                    echo "<script>alert('Empty field!')</script>";
                }
            }
        }

        public function fetch() {
            $data = Null;

            $sql = "SELECT * FROM records";
            if($q = $this->getC()->query($sql)) {
                while ($row = mysqli_fetch_assoc($q)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function delete($id) {
            $query = "DELETE FROM records WHERE id= '$id'";
            if ($sql = $this->getC()->query($query)) {
                return true;
            } else {
                return false;
            }
        }  
        
        public function edit($id) {
            $data = null;
            $query = "SELECT * FROM records WHERE id='$id'";
            if ($sql = $this->getC()->query($query)) {
                while ($row = $sql->fetch_assoc()) {
                    $data = $row;
                }
                return $data;
            }
        }

        public function update($data) {
            
            $query = "UPDATE records SET name= '$data[name]', email= '$data[email]', mobile= '$data[mobile]', message='$data[message]' WHERE id= '$data[id]'";
            
            if ($sql = $this->getC()->query($query)) {
                return true;
            } else {
                return false;
            }
        }
        
    }


?>