
<?php
require("PHPMailer/class.phpmailer.php");


$mail = new PHPMailer();
$mail->SMTPDebug = 0;


$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Host = "mail.google.com";  // specify main and backup server
$mail->Port = 25;                 // set the SMTP port for the GMAIL server

$mail->Username = "meetyourguide42@gmail.com";  // SMTP username
$mail->Password = "terminator42"; // SMTP password

$mail->From = "meetyourguide42@gmail.com";
$mail->FromName = "Mailer";
$mail->AddAddress("programmersailesh@gmail.com", "Sailesh");
$mail->AddAddress("programmersailesh@gmail.com");                  // name is optional
$mail->AddReplyTo("programmersailesh@gmail.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
// $mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
// $mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>