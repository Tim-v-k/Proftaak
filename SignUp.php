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
            <label>Username <span class="required">* </span></label>
            <input type="text" style="border-color:green" name="Username" placeholder="Fill in your username">
        </li>
        <li>
            <label>Street Name <span class="required">* </span></label>
            <input type="text" style="border-color:green" name="streetname" placeholder="Fill in your streetname">
            <input type="number" style="border-color:green" name="housenumber" placeholder="Fill in your housenumber">
            <input type="text" style="border-color:green" name="addition" placeholder="If you have an addation fill in">
        </li>
        <li>
            <label>Zipcode <span class="required">* </span></label>
            <input type="text" style="border-color:green" name="zipcode" placeholder="Fill in your zipcode">
        </li>
        <li>
            <label>City Name <span class="required">* </span></label>
            <input type="text" style="border-color:green" name="cityname" placeholder="Fill in your City name">
        </li>
        <li>
            <label>Email. <span class="required">* </span></label>
            <input type="email" style="border-color:green" name="email" placeholder="Fill in your Email">
        </li>
        <li>
            <label>Password. <span class="required">* </span></label>
            <input type="password" style="border-color:green" name="password" placeholder="Fill in your password">
        </li>
        <li>
            <label>Confirm Password. <span class="required">* </span></label>
            <input type="password" style="border-color:green" name="passwordconfirm" placeholder="Confirm your password">
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