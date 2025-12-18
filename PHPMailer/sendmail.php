<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saranyamohan7359@gmail.com';   // your gmail
    $mail->Password   = 'defp zfme duyg itnc';           // app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Sender & Receiver
    $mail->setFrom('saranyamohan7359@gmail.com', 'Restaurant');
    $mail->addAddress('saranyamohan7359@gmail.com'); // test to same mail

    // Mail content
    $mail->isHTML(true);
    $mail->Subject = 'Test Mail from WAMP';
    $mail->Body    = '<h3>Mail sent successfully 🎉</h3>';

    $mail->send();
    echo "✅ Mail Sent Successfully";
} catch (Exception $e) {
    echo "❌ Mailer Error: {$mail->ErrorInfo}";
}
