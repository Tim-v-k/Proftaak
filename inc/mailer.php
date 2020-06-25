<?php include("functions.php");
$result = "";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->IsSMTP(); // enable SMTP
    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only || deze weghalen als hij het doet
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 25; // or 587
    $mail->Username = 'timmeh221312@gmail.com';                 // SMTP username
    $mail->Password = '121131Donny1233';                           // SMTP password
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );


    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('timvankol@gmail.com');     // Add a recipient
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);                                  // Set email format to HTML and send it using all the values below 
    $mail->Subject = 'Form Submission: '.$_POST['subject'];
    $mail->Body    = '<h1 align=center>Name: '.$_POST['name'].'<br>Email: '.$_POST['email'] .'<br>Message: '.$_POST['msg'].'</h1>';

    if(!$mail->send()) {
        $result= 'Message could not be sent.';
    } else {
        $result= "mail has been send";
    }
}
?>