<?php

require 'PHPMailer/PHPMailerAutoload.php';
require_once 'PHPMailer/class.phpmailer.php';

$message = $_GET['message'];
$email = $_GET['email'];

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> SMTPDebug = 1;
$mail -> Debugoutput = 'html';
$mail -> Host = 'smtp.gmail.com';
$mail -> Port = 465;
$mail -> SMTPSecure = 'ssl';
$mail -> SMTPAuth = true;
$mail -> Username = "hmocapstone@gmail.com";
$mail -> Password = "hmocapstone123";
$mail -> setFrom('hmocapstone@gmail.com');
$mail -> addAddress($email);
$file_to_attach = 'parts/modals/collection/billing/voucher.pdf';
$mail -> AddAttachment ($file_to_attach, '', $encoding = 'base64', $type="application/pdf");
$mail -> Subject = 'HMO';
$mail -> msgHTML($message);
$mail -> AltBody = $message;
echo $email;
if(!$mail->send()){

  echo "Mailer Error". $mail->ErrorInfo;

}
else {
  json_encode("Message Sent");
}

?>
