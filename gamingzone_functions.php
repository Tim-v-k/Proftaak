<?php 

//hallo
    $servername ="localhost";
    $username   ="root";
    $password   ="";
    $dbname     ="gamingzone";
    $connection = new mysqli($servername, $username, $password, $dbname);

    if (!$connection)
    {
    die("connection failed");
    }
    
?>