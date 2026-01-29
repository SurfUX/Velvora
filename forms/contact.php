<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer files (your current structure)
require __DIR__ . '/../assets/vendor/phpmailer/Exception.php';
require __DIR__ . '/../assets/vendor/phpmailer/PHPMailer.php';
require __DIR__ . '/../assets/vendor/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {

    // SMTP configuration (Hostinger)
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@velvoratours.com';
    $mail->Password = '#Velvora2026'; // 👉 put mailbox password here
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL
    $mail->Port = 465;

    // Sender (must be your domain email for Hostinger)
    $mail->setFrom('info@velvoratours.com', 'Velvora Tours');

    // Safe reply-to (user email)
    if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($_POST['email'], $_POST['name'] ?? '');
    }

    // Receiver
    $mail->addAddress('info@velvoratours.com');

    // Subject
    $subject = $_POST['subject'] ?? 'New Travel Inquiry';
    $mail->Subject = $subject;

    // Message body
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail->Body =
        "Name: $name\n" .
        "Email: $email\n\n" .
        "Message:\n$message";

    // Send email
    $mail->send();

    echo "OK";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
