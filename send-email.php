<?php

$email = $_POST['email'];
$message = $_POST['message'];

$body = <<<HTML
    <p><b>Contact from website form.</b></p>
    <br>
    <p>From:</p>
    <p>$email</p>
    <br>
    <p>Message:</p>
    <p><b>$message</b></p>
HTML;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host       = 'smtp.dot5hosting.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'contacto@chanovera.com';
$mail->Password   = '098CJjhTuhhjk***df45';
$mail->SMTPSecure = 'ssl';
$mail->Port       = 465;

$mail->SetFrom($email);
$mail->addAddress('contacto@chanovera');
$mail->msgHTML($body);
$mail->AltBody = strip_tags($body);
$mail->CharSet = 'UTF-8';
$mail->send();