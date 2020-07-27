<?php
    $host  = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'companydb';
        $connect = mysqli_connect($host, $user, $password, $database);
        if (mysqli_connect_errno($connect)) {

        echo "Failed to connect to MySQL: " . mysqli_connect_error();

        exit();

        }else{
        echo '';
        }
?>
