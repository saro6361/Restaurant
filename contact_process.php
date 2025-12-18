<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'saranyamohan7359@gmail.com'; // 🔴 your Gmail
    $mail->Password   = 'snbquwgucmmgpuby';   // 🔴 App Password only
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('saranyamohan7359@gmail.com', 'WE CRUNCH');
    $mail->addAddress('saranyamohan7359@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Contact Form Message';
    $mail->Body    = "
        <b>Name:</b> {$_POST['name']} <br>
        <b>Email:</b> {$_POST['email']} <br>
        <b>Message:</b> {$_POST['message']}
    ";

    $mail->send();
    header("Location: message_success.php");
    exit;

} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
