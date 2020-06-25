<?php
session_start();
//hallo

require("functions.php");
$connection = dBconnect();
// database connectionect file
if (isset($_POST["submit"]))
{   
    if(!$connection)
    {
        die("could not connectionect:" . mysqli_error());
    }
    else
    {
        $errors = [];
        $userFirstName = $_POST["userFirstName"];
        $userFirstName = trim($userFirstName); // will remove all white space at begining and end of variable
        mysqli_real_escape_string($connection, $userFirstName); // will remove special text so we cant get hacked using mysql injection
        if($userFirstName == "")
        {
            $errors[] = "Fill in your firstname";
        }
        $userLastName = $_POST["userLastName"];
        $userLastName = trim($userLastName); 
        mysqli_real_escape_string($connection, $userLastName);
        if($userLastName == "")
        {
            $errors[] = "Fill in your lastname";
        }
        $userAge = $_POST["userAge"];
        $userAge = trim($userAge); 
        mysqli_real_escape_string($connection, $userAge);
        if($userAge == "")
        {
            $errors[] = "Fill in your age";
        }
        $userAddress = $_POST["userAddress"];
        $userAddress = trim($userAddress); 
        mysqli_real_escape_string($connection, $userAddress);
        if($userAddress == "")
        {
            $errors[] = "Fill in your userAddress";
        }
        $userStreet = $_POST["userStreet"];
        $userStreet = trim($userStreet); 
        mysqli_real_escape_string($connection, $userStreet);
        if($userStreet == "")
        {
            $errors[] = "Fill in your userStreet";
        }
        $userStreetNumber = $_POST["userStreetNumber"];
        $userStreetNumber = trim($userStreetNumber); 
        mysqli_real_escape_string($connection, $userStreetNumber);
        if($userStreetNumber == "")
        {
            $errors[] = "Fill in your userStreetNumber";
        }
        $userMail = $_POST["userMail"];
        $userMail = trim($userMail); 
        mysqli_real_escape_string($connection, $userMail);
        if($userMail == "")
        {
            $errors[] = "Fill in your userMail";
        }
        $userPassword = $_POST["userPassword"];
        $userPassword = trim($userPassword);
        mysqli_real_escape_string($connection, $userPassword);
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
            mysqli_query($connection, $query);
        }
    }
}
?>