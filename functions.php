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

<<<<<<< HEAD
    $games = array();
=======
    $projects = array();
>>>>>>> 9ac56e6d533c5953c513504df2e5795557dc8a8c

    $getGamesSQL = "
    SELECT * FROM `products` WHERE `productTypeId` = 1
    ";

<<<<<<< HEAD
    $resource = mysqli_query($connection, $getGamesSQL) or die (mysqli_error($connection));

    while($row = mysqli_fetch_assoc($resource))
    {
        $games[] = $row;
    }

    return $games; 
=======
    $resource = mysqli_query($connection, $getProjectsSQL) or die (mysqli_error($connection));

    while($row = mysqli_fetch_assoc($resource))
    {
        $projects[] = $row;
    }

    return $projects; 
>>>>>>> 9ac56e6d533c5953c513504df2e5795557dc8a8c
    //gets the projectfiles out the database
}

?>