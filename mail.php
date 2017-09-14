<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom("$_POST[2]", "$_POST[0] $_POST[1]");
$mail->addAddress("daveperlman89@me.com", "$_POST[0]");
$mail->Subject  = "$_POST[3]";
$mail->Body     = "$_POST[4]";
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
