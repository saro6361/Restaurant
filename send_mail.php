<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'saranyamohan7359@gmail.com'; // ✅ Your Gmail
    $mail->Password   = 'becm dvrh tqee dzhb';           // ✅ App password
    $mail->SMTPSecure = 'tls';                            
    $mail->Port       = 587;

    // Sender and recipient
    $mail->setFrom('saranyamohan7359@gmail.com', 'WE CRUNCH Contact');
    $mail->addAddress('saranyamohan7359@gmail.com'); // ✅ Where you want to receive

    // Form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Email content
    $mail->isHTML(true);                                 
    $mail->Subject = 'New Message from WE CRUNCH Contact Form';
    $mail->Body    = "
        <h3>Contact Details</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    // Send email
    $mail->send();

    // Redirect to animated success page
    header("Location: message_success.html");
    exit();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
