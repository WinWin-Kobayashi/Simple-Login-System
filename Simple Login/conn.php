<?php

    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "inventory_management";

    $conn = mysqli_connect($name, $uname, $password, $db_name);

    if(!$conn) {
        echo "Connection Failed";
    }
?>