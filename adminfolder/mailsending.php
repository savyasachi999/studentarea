<?php
$to=$_POST['to'];
$body=$_POST['body'];
$subject=$_POST['subject'];




require_once('../email/class.phpmailer.php');
include("../email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
	  
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "interlinkspardha";  // GMAIL username
$mail->Password   = "interlink999";            // GMAIL password

$mail->SetFrom('interlinkspardha@gmail.com', 'spardha,hackoolics'); // Change the name as you want
$mail->Subject    = "$subject";
$mail->Body = "$body ";
$mail->AddAddress("$to");

$mail->Send();

echo "<script>alert('Your Response Sent')</script>"; 	  
header('location:indexad.php');

?>