<?php
/* Template Name: Contact Us */
// This is the Contact Us page
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
// Load WordPress
require('wp-load.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Include PHPMailer autoloader
    require 'vendor/autoload.php';

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $number = sanitize_text_field($_POST['number']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = esc_textarea($_POST['message']);

    // Create a PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Can be set to 2 for debugging
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com'; // Your Gmail email
        $mail->Password = 'your_gmail_password'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender info
        $mail->setFrom('your_email@gmail.com', 'Your Name'); // Your Name

        // Recipient
        $mail->addAddress('your_email@gmail.com'); // Your email

        // Email content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = "Name: $name\nEmail: $email\nPhone: $number\n\n$message";

        // Send the email
        $mail->send();

        echo 'Message has been sent!';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>

<?php get_header(); ?>
<div class="contact-us-container">
    <section class="form-container">
        <form class="contact-us-form" method="post" action="<?php echo esc_url(get_permalink()); ?>">
            <h1 class="page-title">Contact Us</h1>

            <div class="name-section">
                <label for="full-name">Full Name:</label>
                <input type="text" name="name" class="full-name" required>
            </div>

            <div class="email-section">
                <label for="email">Email:</label>
                <input type="email" name="email" class="email" required>
            </div>

            <div class="pNumber-section">
                <label for="phone">Phone Number (optional):</label>
                <input type="tel" name="number" class="phone">
            </div>

            <div class="subject-section">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" class="subject" required>
            </div>

            <div class="message-section">
                <label for="message">Message:</label>
                <textarea class="message" name="message" rows="6" required></textarea>
            </div>
            <button class="submit-btn" type="submit" name="submit">Submit</button>
        </form>
    </section>
    <?php
    get_footer();
    ?>
</div>