<?php

function dBconnect()
{
    $host       ="localhost";
    $user       ="root";
    $pass       ="";
    $database   ="gamingzone";
    $connection = mysqli_connect($host, $user, $pass, $database) or die(mysli_error($connection));

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    return $connection;
}

function getGames()
{
    $connection = dBconnect();

    $games = array();

    $getGamesSQL = "
    SELECT * FROM `products` WHERE `productTypeId` = 1
    ";

    $resource = mysqli_query($connection, $getGamesSQL) or die (mysqli_error($connection));

    while($row = mysqli_fetch_assoc($resource))
    {
        $games[] = $row;
    }

    return $games; 
    //gets the projectfiles out the database
}

?>