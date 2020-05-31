<?php
session_start();

require("databaseconnect.php");

if (isset($_POST["submit"]))
{
    if(!$conn)
    {
        die("could not connect:" . mysqli_error());
    }
    else
    {
        $errors = [];
        $firstname = $_POST["firstname"];
        $firstname = trim($firstname); // will remove all white space at begining and end of variable
        mysqli_real_escape_string($conn, $firstname); // will remove special text so we cant get hacked using mysql injection
        if($firstname == "")
        {
            $errors[] = "Fill in your firstname";
        }
        $lastname = $_POST["lastname"];
        $lastname = trim($lastname); 
        mysqli_real_escape_string($conn, $lastname);
        if($lastname == "")
        {
            $errors[] = "Fill in your lastname";
        }
        $streetname = $_POST["streetname"];
        $streetname = trim($streetname); 
        mysqli_real_escape_string($conn, $streetname);
        if($streetname == "")
        {
            $errors[] = "Fill in your streetname";
        }
        $housenumber = $_POST["housenumber"];
        $housenumber = trim($housenumber); 
        mysqli_real_escape_string($conn, $housenumber);
        if($housenumber == "")
        {
            $errors[] = "Fill in your housenumber";
        }
        $addition = $_POST["addition"];
        $addition = trim($addition); 
        mysqli_real_escape_string($conn, $addition);
        $zipcode = $_POST["zipcode"];
        $zipcode = trim($zipcode); 
        mysqli_real_escape_string($conn, $zipcode);
        if($zipcode == "")
        {
            $errors[] = "Fill in your zipcode";
        }
        $cityname = $_POST["cityname"];
        $cityname = trim($cityname); 
        mysqli_real_escape_string($conn, $cityname);
        if($cityname == "")
        {
            $errors[] = "Fill in your cityname";
        }
        $email = $_POST["email"];
        $email = trim($email); 
        mysqli_real_escape_string($conn, $email);
        if($email == "")
        {
            $errors[] = "Fill in your email";
        }
        $password = $_POST["password"];
        $password = trim($password);
        mysqli_real_escape_string($conn, $password);
        if($password == "")
        {
            $errors[] = "Fill in your password";
        }

        // both passwords do not match
        if($_POST['password'] != $_POST['passwordconfirm'])
        {
            $errors[] = "Passwords do not match";
        }


        if(count($errors) == 0)
        {
            $query = "INSERT INTO `users` (`firstname`,`lastname`,`streetname`,`housenumber`,`addition`,`zipcode`,`cityname`,`email`,`password`) VALUES ('$firstname','$lastname','$streetname','$housenumber','$addition','$zipcode','$cityname','$email','$password');";
            //$query = "INSERT INTO `users` (`Firstname`, ``) VALUES ('$firstname' , '');";
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
    <input class="input" type="text" name="firstname" placeholder="Fill in your first name">
    <input class="input" type="text" name="lastname" placeholder="Fill in your lastname">
    <input class="input" type="text" name="streetname" placeholder="Fill in your streetname">
    <input class="input" type="number" name="housenumber" placeholder="Fill in your housenumber">
    <input class="input" type="text" name="addition" placeholder="If you have an addition, fill it in here">
    <input class="input" type="text" name="zipcode" placeholder="Fill in your postal code">
    <input class="input" type="text" name="cityname" placeholder="Fill in the name of the place where you live">
    <input class="input" type="email" name="email" placeholder="Fill in your email">
    <input class="input" type="password" name="password" placeholder="Fill in your password">
    <input class="input" type="password" name="passwordconfirm" placeholder="confirm your password">
    <div class="ToS">Agree with terms of use? <input id="checkbox" type="checkbox" name="ToS"> </div>
    <input class="button" type="submit" name="submit" value="Make my account">
    <a id="hyperlink" href="Login.php">Click here to login</a>
    </form>
    <div>
</div>
</body>
</html>