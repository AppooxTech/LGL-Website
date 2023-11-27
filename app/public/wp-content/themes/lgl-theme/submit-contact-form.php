<?php
// Load WordPress
require('wp-load.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Include PHPMailer autoloader
    require 'vendor/autoload.php';

    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $number  = sanitize_text_field($_POST['number']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = esc_textarea($_POST['message']);

    // Create a PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Can be set to 2 for debugging
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_email@gmail.com'; // Your Gmail email
        $mail->Password   = 'your_gmail_password'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender info
        $mail->setFrom('your_email@gmail.com', 'Your Name'); // Your Name

        // Recipient
        $mail->addAddress('your_email@gmail.com'); // Your email

        // Email content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body    = "Name: $name\nEmail: $email\nPhone: $number\n\n$message";

        // Send the email
        $mail->send();

        echo 'Message has been sent!';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
