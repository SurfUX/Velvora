<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer files
require __DIR__ . '/../assets/vendor/phpmailer/Exception.php';
require __DIR__ . '/../assets/vendor/phpmailer/PHPMailer.php';
require __DIR__ . '/../assets/vendor/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {

    // ======================
    // SMTP SETTINGS
    // ======================
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';   // try mail.velvoratours.com if needed
    $mail->SMTPAuth = true;
    $mail->Username = 'info@velvoratravels.com';
    $mail->Password = 'VelvoraMail123!';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // ======================
    // EMAIL SETUP
    // ======================
    $mail->setFrom('info@velvoratravels.com', 'Velvora Tours');

    if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($_POST['email'], $_POST['name'] ?? '');
    }

    $mail->addAddress('info@velvoratravels.com');

    // ======================
    // MESSAGE
    // ======================
    $mail->Subject = $_POST['subject'] ?? 'New Travel Inquiry';

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail->Body =
        "Name: $name\n" .
        "Email: $email\n\n" .
        "Message:\n$message";

    // ======================
    // SEND
    // ======================
    $mail->send();

    echo "OK";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

?>



