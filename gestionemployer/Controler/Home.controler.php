<?php

    Class HomeControler {

        public function index($page) {
            include ('Views/' .$page.'.php');
        }
    }

?>