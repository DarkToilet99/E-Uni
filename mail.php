<?php
#include 'src\PHPMailer.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

  $mail = new PHPMailer(true);
// Settings
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp.gmail.com"; // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "ane.mac99@gmail.com"; // SMTP account username example
$mail->Password   = "wtrfywowdyehchgs";        // SMTP account password example

// Content
$mail->isHTML(true);
                    // Set email format to HTML
$mail->Subject = 'E-UNI Account confirmation';
$mail->Body    = "Hello and wlecome to E-UNI!<br>Here is your confirmation code: $randomString";
$mail->addAddress($email);
$mail->From = "ane.mac99@gmail.com";
$mail->FromName = "E-UNI";
try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
