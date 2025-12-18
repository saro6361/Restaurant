<?php
// config/smtp.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require __DIR__ . '/../PHPMailer/src/Exception.php';
require __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer/src/SMTP.php';

// Create PHPMailer object
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saranyamohan7359@gmail.com';        // 🔴 your Gmail
    $mail->Password   = 'defp zfme duyg itnc';   // 🔴 Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Sender info
    $mail->setFrom('saranyamohan7359@gmail.com', 'Restaurant Website');

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
