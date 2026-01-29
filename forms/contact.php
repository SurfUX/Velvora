<?php

$to = "info@velvoratours.com";
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? 'New Travel Inquiry';
$message = $_POST['message'] ?? '';

$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

$fullMessage = "Name: $name\n";
$fullMessage .= "Email: $email\n\n";
$fullMessage .= "Message:\n$message";

if (mail($to, $subject, $fullMessage, $headers)) {
    echo "OK";
} else {
    echo "Email failed to send.";
}

?>
