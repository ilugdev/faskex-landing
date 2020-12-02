<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mailins/PHPMailer/src/Exception.php';
require '../mailins/PHPMailer/src/PHPMailer.php';
require '../mailins/PHPMailer/src/SMTP.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.erishyum.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'pruebasemail@erishyum.com';                 // SMTP username
$mail->Password = 'realmadrid2310';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('pruebasemail@erishyum.com', 'Faskex');
$mail->addAddress('miiguelangelotabata@gmail.com', 'Ashkem');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Nuevo contacto comercial';
$mail->Body    = $bodyMail;
$mail->AltBody = 'Se ha enviado una nueva solicitud de contacto comercial';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Solicitud enviada';
}