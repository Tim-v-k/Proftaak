<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>GamingZone</title>
    <?php require("inc\KopBar.php"); ?>
</head>
<body>
    <div class="bg">
        <?php require("inc\Bar.php"); ?>    

    <ul class="form">
        <form method="POST">
        <li>
            <label>Fill in your username. <span class="required">* </span></label>
            <input type="text" style="border-color:green" name="Username" placeholder="Fill in your username">
        </li>
        <li>
            <label>Fill in your password. <span class="required">* </span></label>
            <input type="password" style="border-color:green" name="password" placeholder="Fill in your password">
        </li>
        <li>
            <label>Confirm your password. <span class="required">* </span></label>
            <input type="password" style="border-color:green" name="passwordconfirm" placeholder="Confirm your password">
        </li>
        <li>
            <input type="submit" class="SubmitButton" name="submit" value="Login!">
        </li>
        </form>
    </ul>

        <?php require("inc\Footer.php"); ?>
    </div>
</body>
</html>