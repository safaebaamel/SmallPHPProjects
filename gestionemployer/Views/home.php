<?php

    include './Controler/EmployesController.php';

    $data = new EmployeeControler;

    $employees = $data->getAllEmployee();

    print_r($employees);


?>