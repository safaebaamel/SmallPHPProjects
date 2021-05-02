<?php

    require_once './autoload.php';
    require_once './Controler/Home.controler.php';

    $home = new HomeControler;

    $pages = ['home', 'update', 'delete', 'add'];

    if(isset($_GET['page'])) {
        if (in_array($_GET['page'], $pages)) {
            $page = $_GET['page'];
            $home->index($page);
        } else {
            include ('Views/Includes/404.php');
        }
    } else {
        $home->index('home');
    }

?>