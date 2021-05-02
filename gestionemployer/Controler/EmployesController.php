<?php

    class EmployeeControler {

        public function getAllEmployee() {
            $employes = Employee::getAll();

            return $employes;
        }
    }

?>