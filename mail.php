<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->setFrom("$_POST[data][2]", "$_POST[data][0] $_POST[data][1]");
$mail->addAddress("info@refined-tech.com", "$_POST[data][0]");
$mail->Subject  = $_POST['data'][3];
$mail->Body     = $_POST['data'][4];
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
