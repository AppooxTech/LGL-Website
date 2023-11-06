<?php
/* Template Name: Contact Us */
// This is the Contact Us page
?>  
<?php
    get_header();
 ?>



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Include PHPMailer autoloader
    require 'vendor/autoload.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create a PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Can be set to 2 for debugging
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'codenotion.dev@gmail.com'; // THIS EMAIL NEEDS TO CHANGE
        $mail->Password = 'RaminKurosh2023!!'; // THIS PASSWORD NEEDS TO CHANGE
        $mail->SMTPSecure = 'tls'; // To enable TLS encryption
        $mail->Port = 587;

        // Sender info
        $mail->setFrom('your_email@gmail.com', 'Your Name'); // "Your Name" should be changed

        // Recipient
        $mail->addAddress('your_email@gmail.com'); // "send gmail should be aimed at my account"

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

<main class="contact-us-container">
    <section>
        <form class="contact-us-form" method="post" action="<?php echo esc_url( home_url( '/contact-us-page/' ) ); ?>">>
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
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>
</main>



<?php
    get_footer();
 ?>