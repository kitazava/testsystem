<?php

    $connect = mysqli_connect('localhost', 'root', '', 'testsystem');

    if (!$connect) {
        die('Error connect to DataBase');
    }

?>