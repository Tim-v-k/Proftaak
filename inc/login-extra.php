<?php

// login.php

require("functions.php");
$connection = dBconnect();
//
session_start();

if(!isset($_SESSION['loggedIn']))
{
    $_SESSION['loggedIn'] = false;
}

if(isset($_POST['mylogin']))
{
    //hallo
    // form is submitted

    // get posted data from login form

    // define a query to send to the database

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $userPassword = mysqli_real_escape_string($connection, $_POST['userPassword']);
    $debug = true;

    // user = test
    // pass = fiets

    $stmt = $connection->prepare("SELECT * FROM `user` WHERE `userMail` = ?");


    $query = "SELECT * FROM `user` WHERE `userMail` = '$username'";
    $result = mysqli_query($connection, $query);

    $result = mysqli_query($connection, "SELECT * FROM `user` WHERE `userMail` = '$username'");
    if ($result && mysqli_num_rows($result) > 0)
    {
        $row = $result->fetch_array();
        if ($row['userPassword'] == $userPassword)
        {
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $row['userMail'];
            $_SESSION['firstname'] = $row['userFirstName'];
            $_SESSION['lastname'] = $row['userLastName'];
            $_SESSION['address'] = $row['userAddress'];
            $_SESSION['street'] = $row['userStreet'];
            $_SESSION['streetNumber'] = $row['userStreetNumber'];
        }
    }

}
if(isset($_POST['mylogout']))
{
    // logout
    session_destroy();
    // reload the page
    header("location:" . $_SERVER['PHP_SELF']);
}
?>