<?php
if (isset($_POST['message'])  && isset($_POST['email'])) {
    // Get the message from the POST data
    $message = sanitize_text_field($_POST['message']);

    // Create the email content
    $to = "raminkhareji@gmail.com"; // Replace with your recipient's email address
    $subject = "Contact Us Form Submission";
    $message_body = "Message:\n$message\n";
    $headers = array("content-type: text/plain; charset=UTF-8");

    if (wp_mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Email sending failed
        echo "Sorry, there was an issue sending your message. Please try again later.";
    }
}