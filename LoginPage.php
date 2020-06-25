<?php require("inc/login-extra.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Proftaak">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>GamingZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("inc\KopBar.php"); ?>
</head>
<body>
    <div class="bg">
        <?php require("inc\Bar.php"); ?>    

        <?php
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false)
    {
        ?>
        <ul class="form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <li>
                <label>Fill in your username. <span class="required">* </span></label>
                <input type="text" style="border-color:green" name="username" id="username" placeholder="Fill in your Email">
            </li>
            <li>
                <label>Fill in your password. <span class="required">* </span></label>
                <input type="password" style="border-color:green" name="userPassword" id="userPassword" placeholder="Fill in your password">
            </li>
            <li>
                <input type="submit" class="SubmitButton" name="mylogin" value="login">
            </li>
            </form>
        </ul>
    <?php
    }
    else
    {
    ?>
    <div id="login-container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <li class="information"><p>Your name = <?php echo $_SESSION['firstname']; ?></p></li>
    <li class="information"><p>Your lastname = <?php echo $_SESSION['lastname']; ?></p></li>
    <li class="information"><p>Your mail = <?php echo $_SESSION['username']; ?></p></li>
    <li class="information"><p>Your address = <?php echo $_SESSION['address']; ?></p></li>
    <li class="information"><p>Your street = <?php echo $_SESSION['street']; ?></p></li>
    <li class="information"><p>Your street number = <?php echo $_SESSION['streetNumber']; ?></p></li>
    <input class="SubmitButton" type="submit" value="logout" name="mylogout">
    </form>
    </div>
    <?php
    }
    ?>

    <?php require("inc\Footer.php"); ?>
    </div>
</body>
</html>