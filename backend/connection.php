<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "portfolio_db";
    $conn = new mysqli($server, $username, $password, $db);
    if($conn ->connect_error){
        die("Connection failed". $conn->connect_error);
    }
?>