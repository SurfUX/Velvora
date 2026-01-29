<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer (your folder structure)
require __DIR__ . '/../assets/vendor/phpmailer/Exception.php';
require __DIR__ . '/../assets/vendor/phpmailer/PHPMailer.php';
require __DIR__ . '/../assets/vendor/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {

    // ================================
    // SMTP SETTINGS — HOSTINGER
    // ================================
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@velvoratours.com';
    $mail->Password = '#Velvora2027';   // your mailbox password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS
    $mail->Port = 587;

    // ================================
    // EMAIL SETUP
    // ================================
    $mail->setFrom('info@velvoratours.com', 'Velvora Tours');

    if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($_POST['email'], $_POST['name'] ?? '');
    }

    $mail->addAddress('info@velvoratours.com');

    // ================================
    // CONTENT
    // ================================
    $mail->Subject = $_POST['subject'] ?? 'New Travel Inquiry';

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail->Body =
        "Name: $name\n" .
        "Email: $email\n\n" .
        "Message:\n$message";

    // ================================
    // SEND
    // ================================
    $mail->send();

    echo "OK";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

?>
