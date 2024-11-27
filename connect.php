<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'testtable';
    $conn = new mysqLi($server, $username, $password, $database);

    if ($conn) {
        mysqLi_query($conn, "SET NAMES 'utf8'");
    } else {
        echo "connection failed";
    }
?>