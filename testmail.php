<html>
 <body>
<?PHP
require_once('mailer/class.phpmailer.php');
$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = "hello there testing email";
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "localhost"; // SMTP server
$mail->Username = "Amon";
$mail->Password = "Agoiano1";
$mail->AddReplyTo("amon@faria.cc","Amon Faria");

$mail->SetFrom('amon@faria.cc', 'Amon Faria');


$address = "afaria@carbonite.com";
$mail->AddAddress($address, "Amon Faria");

$mail->Subject    = "PHPMailer Test Subject via mail(), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
?>
 </body>
</html>
