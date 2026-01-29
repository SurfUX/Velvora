<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require __DIR__ . '/../assets/vendor/phpmailer/Exception.php';
require __DIR__ . '/../assets/vendor/phpmailer/PHPMailer.php';
require __DIR__ . '/../assets/vendor/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {

    // ======================
    // SMTP SETTINGS (Hostinger)
    // ======================
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com'; // try mail.velvoratours.com if needed
    $mail->SMTPAuth = true;
    $mail->Username = 'info@velvoratravels.com';
    $mail->Password = 'VelvoraMail123!';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // ======================
    // EMAIL SETUP
    // ======================
    $mail->setFrom('info@velvoratravels.com', 'Velvora Tours');
    $mail->addAddress('info@velvoratravels.com');

    // ======================
    // CONTENT
    // ======================
    $email = $_POST['email'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email address');
    }

    $mail->Subject = "New Newsletter Subscription";
    $mail->Body = "New subscriber email:\n\n$email";

    // ======================
    // SEND
    // ======================
    $mail->send();

    echo "OK";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
