<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/vendor/phpmailer/src/Exception.php';
require '../assets/vendor/phpmailer/src/PHPMailer.php';
require '../assets/vendor/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@velvoratours.com';
    $mail->Password = '#Velvora2026'; // mailbox password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL
    $mail->Port = 465;

    $mail->setFrom('info@velvoratours.com', 'Velvora Tours');
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    $mail->addAddress('info@velvoratours.com');

    $mail->Subject = $_POST['subject'];
    $mail->Body = 
        "Name: {$_POST['name']}\n" .
        "Email: {$_POST['email']}\n\n" .
        "Message:\n{$_POST['message']}";

    $mail->send();
    echo "OK";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
