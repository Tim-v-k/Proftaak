<?php
session_start();

require("gamingzone_functions.php");
// database connect file

if (isset($_POST["submit"]))
{
    if(!$conn)
    {
        die("could not connect:" . mysqli_error());
    }
    else
    {
        $errors = [];
        $userFirstName = $_POST["userFirstName"];
        $userFirstName = trim($userFirstName); // will remove all white space at begining and end of variable
        mysqli_real_escape_string($conn, $userFirstName); // will remove special text so we cant get hacked using mysql injection
        if($userFirstName == "")
        {
            $errors[] = "Fill in your firstname";
        }
        $userLastName = $_POST["userLastName"];
        $userLastName = trim($userLastName); 
        mysqli_real_escape_string($conn, $userLastName);
        if($userLastName == "")
        {
            $errors[] = "Fill in your lastname";
        }
        $userAge = $_POST["userAge"];
        $userAge = trim($userAge); 
        mysqli_real_escape_string($conn, $userAge);
        if($userAge == "")
        {
            $errors[] = "Fill in your age";
        }
        $userAddress = $_POST["userAddress"];
        $userAddress = trim($userAddress); 
        mysqli_real_escape_string($conn, $userAddress);
        if($userAddress == "")
        {
            $errors[] = "Fill in your userAddress";
        }
        $userStreet = $_POST["userStreet"];
        $userStreet = trim($userStreet); 
        mysqli_real_escape_string($conn, $userStreet);
        if($userStreet == "")
        {
            $errors[] = "Fill in your userStreet";
        }
        $userStreetNumber = $_POST["userStreetNumber"];
        $userStreetNumber = trim($userStreetNumber); 
        mysqli_real_escape_string($conn, $userStreetNumber);
        if($userStreetNumber == "")
        {
            $errors[] = "Fill in your userStreetNumber";
        }
        $userMail = $_POST["userMail"];
        $userMail = trim($userMail); 
        mysqli_real_escape_string($conn, $userMail);
        if($userMail == "")
        {
            $errors[] = "Fill in your userMail";
        }
        $userPassword = $_POST["userPassword"];
        $userPassword = trim($userPassword);
        mysqli_real_escape_string($conn, $userPassword);
        if($userPassword == "")
        {
            $errors[] = "Fill in your userPassword";
        }

        // both passwords do not match
        if($_POST['userPassword'] != $_POST['passwordconfirm'])
        {
            $errors[] = "Passwords do not match";
        }


        if(count($errors) == 0)
        {
            // then, define insert query
            $query = "INSERT INTO `user` (`userFirstName`,`userLastName`,`userAge`,`userAddress`,`userStreet`,`userStreetNumber`,`userMail`,`userPassword`) VALUES ('$userFirstName','$userLastName','$userAge','$userAddress','$userStreet','$userStreetNumber','$userMail','$userPassword');";
            mysqli_query($conn, $query);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>signinsignup</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
    <?php
    if(isset($errors) && count($errors) > 0)
    {
        echo "<div class=\"errorList\">\n";
        echo "\t\t<ul>\n";
        foreach($errors as $key => $value)
        {
            ?>
            <li><?php echo $value; ?></li>
            <?php
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
    
<div id="container">

    <div>
    <form method="POST">
    <input class="input" type="text" name="userFirstName" placeholder="Fill in your first name 1">
    <input class="input" type="text" name="userLastName" placeholder="Fill in your last name">
    <input class="input" type="text" name="userAge" placeholder="Fill in your age">
    <input class="input" type="number" name="userAddress" placeholder="Fill in your Address">
    <input class="input" type="text" name="userStreet" placeholder="Fill in your street name">
    <input class="input" type="text" name="userStreetNumber" placeholder="Fill in the number of the Street">
    <input class="input" type="userMail" name="userMail" placeholder="Fill in your userMail">
    <input class="input" type="password" name="userPassword" placeholder="Fill in your Password">
    <input class="input" type="password" name="passwordconfirm" placeholder="confirm your Password">
    <div class="ToS">Agree with terms of use? <input id="checkbox" type="checkbox" name="ToS"> </div>
    <input class="button" type="submit" name="submit" value="Make my account">
    <a id="" href="login.php">Click here to login</a>
    </form>
    <div>
</div>
</body>
</html>