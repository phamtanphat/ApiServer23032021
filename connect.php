<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "recipes_meal";


    $con = new mysqli($host, $username, $password, $databaseName);

    $con->set_charset("utf8");
?>