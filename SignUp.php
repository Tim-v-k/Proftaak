<?php require("inc/signup-extra.php"); ?>
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

    <ul class="form">
        <form method="POST">
        <li>
            <label>User <span class="required">* </span></label>
            <input class="input" style="border-color:green" type="text" name="userFirstName" placeholder="Fill in your first name">
            <input class="input" style="border-color:green" type="text" name="userLastName" placeholder="Fill in your last name">
            <input style="border-color:green" type="number" name="userAge" placeholder="Fill in your age">
        </li>
        <li>
            <label>Street Name <span class="required">* </span></label>
            <input class="input" type="text" style="border-color:green" name="userStreet" placeholder="Fill in your streetname">
            <input class="input" type="text" style="border-color:green" name="userStreetNumber" placeholder="Fill in your housenumber">
            <input class="input" type="text" style="border-color:green" name="userAddress" placeholder="Fill in your address">
        </li>
        <li>
            <label>Email. <span class="required">* </span></label>
            <input class="input" type="email" style="border-color:green" name="userMail" placeholder="Fill in your Email">
        </li>
        <li>
            <label>Password. <span class="required">* </span></label>
            <input class="input" type="password" style="border-color:green" name="userPassword" placeholder="Fill in your password">
        </li>
        <li>
            <label>Confirm Password. <span class="required">* </span></label>
            <input class="input" type="password" style="border-color:green" name="passwordconfirm" placeholder="Confirm your password">
        </li>
        <li>
            <input type="submit" class="SubmitButton" name="submit" value="Make my account!">
        </li>
        </form>
    </ul>

        <?php require("inc\Footer.php"); ?>
    </div>
</body>
</html>