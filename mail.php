<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
    $alert = "";
    if(isset($_POST['alert'])){
        $_SESSION['alert'] = $_POST['alert'];
    }

?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail  = new PHPMailer;


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
  
    try{
        $mail->IsSMTP();
	//$mail->SMTPDebug = 2;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = "wemakewebsites247.com";
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->Username = "wmw247@wemakewebsites247.com";
	$mail->Password = "BC1VDC+e)X@#";
    

        
        $mail->setFrom('wmw247@wemakewebsites247.com');
        $mail->addAddress('prasathjp95@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'Project Booking : ' .$name;
        $mail->Body = "<h2> Details of Booking </h2>
                      <p> <b> Name : </b> $name </p>
                      <p> <b> Email : </b> $email </p>
                      <p> <b> Mobile : </b> $mobile </p>
                      <p> <b> Message : </b> $message </p>";
        
        $mail->send();
        $alert = "<div class ='alert-success'><span>Your Booking has been Submitted! Thank You!</span> </div>";
    }   catch(Exception $e){
        $alert = "<div class ='alert-error'><span>Oops! Something Wrong!</span> </div>";
    }
       
}

?>