<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $DB = "organikusdb";

    $conn = mysqli_connect($hostName, $userName, $password, $DB);

    if(!$conn){
        die("Database not connect: ".mysqli_connect_error());
    }
    // echo "OK";
?>