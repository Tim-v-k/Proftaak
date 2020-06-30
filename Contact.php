<?php include("inc/mailer.php");?>
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

    <?php require("inc\Bar.php");?>
    <form id="frmContact" action="" method="post">
            <div id="mail-status"></div>
            <div class="contact-row column-right">
    <label style="padding-top: 20px;">Name</label> <span
        id="userName-info" class="info"></span><br />
        <input type="text" name="name" id="userName" class="demoInputBox" placeholder="Enter your name" required>
    </div>
        <div class="contact-row column-right">
        <label>Email</label> <span id="userEmail-info" class="info"></span><br />
        <input type="email" name="email" id="userEmail" class="demoInputBox" placeholder="Enter your email" required>
    </div>
    <div class="contact-row">
        <label>subject</label> <span id="subject-info" class="info"></span><br />
        <input type="text" name="subject" id="subject" class="demoInputBox" placeholder="Enter the subject" required>
    </div>
    <div>
        <label>Message</label> <span id="content-info" class="info"></span><br />
        <textarea id="content" name="msg" class="demoInputBox" placeholder="Write your message" cols="30" rows="4" required></textarea>
    </div>
    <div>
        <input placeholder="submit" type="submit" name="submit" class="btnAction"></input>
    </div>
        </form>
            <div id="loader-icon" style="display: none;">
            <img src="LoaderIcon.gif" />
    </div>
    <div id="contactus-text">
            Contact us!
    </div>

        <?php require("inc\Footer.php");?>

    </div>
</body>
</html>