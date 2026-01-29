<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../assets/vendor/phpmailer/Exception.php';
require __DIR__ . '/../assets/vendor/phpmailer/PHPMailer.php';
require __DIR__ . '/../assets/vendor/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@velvoratours.com';
    $mail->Password = 'YOUR_EMAIL_PASSWORD'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('info@velvoratours.com', 'Velvora Tours');
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    $mail->addAddress('info@velvoratours.com');

    $mail->Subject = $_POST['subject'];
    $mail->Body =
        "Name: " . ($_POST['name'] ?? '') . "\n" .
        "Email: " . ($_POST['email'] ?? '') . "\n\n" .
        "Message:\n" . ($_POST['message'] ?? '');

    $mail->send();
    echo "OK";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
