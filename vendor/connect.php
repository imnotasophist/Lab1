<?php

    $connect = mysqli_connect('localhost', 'root', '', 'lab4');

    if (!$connect) {
        die('Error connect to DataBase');
    }