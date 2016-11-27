<?php
require_once('PHPMailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
echo 'a';
$mail             = new PHPMailer();
$mail->IsSMTP();
$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure= "ssl";
$mail->Host       = "smtp.gmail.com"; // sets the SMTP server
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "meetyourguide42@gmail.com"; // SMTP account username
$mail->Password   = "terminator42";        // SMTP account password

$mail->SetFrom('meetyourguide42@gmail.com', 'Sailesh');

$mail->AddReplyTo("bicky.bhujel@gmail.com","Bikky");

$mail->Subject    = "PHPMailer Test Subject via smtp, basic with authentication";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "bicky.bhujel@gmail.com";
$mail->AddAddress($address, "John Doe");

$mail->AddAttachment("images/logo.png");      // attachment
$mail->AddAttachment("images/bullet.png"); // attachment

echo 'b';

if(!$mail->Send()) {
    echo 'erra';
  echo "Mailer Error: " . $mail->ErrorInfo;
  echo 'errb';
} else {
  echo "Message sent!";
  echo 's';
}echo 'd';
    ?>