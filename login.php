<?php

// login.php

require("gamingzone_functions.php");

//
session_start();

if(!isset($_SESSION['loggedIn']))
{
    $_SESSION['loggedIn'] = false;
}

if(isset($_POST['mylogin']))
{
    // form is submitted

    // get posted data from login form

    // define a query to send to the database

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $userPassword = mysqli_real_escape_string($conn, $_POST['userPassword']);
    $debug = true;

    // user = test
    // pass = fiets

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `userMail` = ?");


    $query = "SELECT * FROM `users` WHERE `userMail` = '$username'";
    $result = mysqli_query($conn, $query);

    $result = mysqli_query($conn, "SELECT * FROM `users` WHERE `userMail` = '$username'");
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
            $_SESSION['Street'] = $row['userStreet'];
            $_SESSION['StreetNumber'] = $row['userStreetNumber'];
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
<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="info">
    <?php
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false)
    {
        ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input class="input" type="text" name="username" id="username">
        <input class="input" type="userPassword" name="userPassword" id="userPassword">
        <input class="buttons" type="submit" value="login" name="mylogin">
    </form>
        <?php
    }
    else
    {
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <li class="information"><p>Your name = <?php echo $_SESSION['firstname']; ?></p></li>
            <li class="information"><p>Your lastname = <?php echo $_SESSION['lastname']; ?></p></li>
            <li class="information"><p>Your mail = <?php echo $_SESSION['username']; ?></p></li>
            <li class="information"><p>Your address = <?php echo $_SESSION['address']; ?></p></li>
            <li class="information"><p>Your street = <?php echo $_SESSION['street']; ?></p></li>
            <li class="information"><p>Your street number = <?php echo $_SESSION['streetNumber']; ?></p></li>
            <input class="buttons" type="submit" value="logout" name="mylogout">
        </form>
        <?php
        }
        ?>
    <a id="" href="signup.php">Click here to sign up</a>
    </div>
</body>
</html>