<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include Composer's autoloader
require 'vendor/autoload.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Administrator email
    $adminEmail = "admin@example.com"; // Replace with the administrator's email
    
    // Create email body
    $emailBody = "<h3>Contact Form Submission</h3>
                  <p><strong>Name:</strong> $name</p>
                  <p><strong>Email:</strong> $email</p>
                  <p><strong>Message:</strong><br>$message</p>";

    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com'; // Your Gmail address
        $mail->Password = 'your_app_password';   // Your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('your_email@gmail.com', 'Website Contact Form'); // Sender's email
        $mail->addAddress($adminEmail, 'Admin'); // Administrator's email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";
        $mail->Body = $emailBody;

        // Send the email
        if ($mail->send()) {
            echo "Message sent successfully!";
        } else {
            echo "Message could not be sent.";
        }
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
