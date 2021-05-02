<?php

    class Employee {

        static public function getAll() {
            $stmt = DB::connect()->prepare('SELECT * from employes');
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

?>