<html>
<head>
<title>CHECK YOUR EMAIL</title>
</head>
<body>

<?php

//error_reporting(E_ALL);
// error_reporting(E_STRICT);

date_default_timezone_set('Nepal/kathmandu');

require_once('PHPMailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('forgot_process.php');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
// $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp-mail.outlook.com";      // sets port for outlook server
$mail->Port       = 587;                   // set the SMTP port for the outlook server
$mail->Username   = "sailuacharya42@outlook.com";  // GMAIL username
$mail->Password   = "terminator4";            // GMAIL password

$mail->SetFrom('meetyourguide42@gmail.com', 'First Last');

$mail->AddReplyTo("programmersailesh@gmail.com","First Last");

$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "meetyourguide42@gmail.com";
$mail->AddAddress($address, "John Doe");

// $mail->AddAttachment("images/phpmailer.gif");      // attachment
// $mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

</body>
</html>
