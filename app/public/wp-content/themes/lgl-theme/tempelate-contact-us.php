<?php
/* Template Name: Contact Us */
// This is the Contact Us page
?>  
<?php
    get_header();
 ?>

<main class="contact-us-container">
    <section>
        <form class="contact-us-form" method="post">
            <h1 class="page-title">Contact Us</h1>

            <div class="name-section">
                <label for="full-name">Full Name:</label>
                <input type="text" name="name" class="full-name" required>
            </div>

            <div class="email-section">
                <!-- Make it so that when a user is logged in the email auto fills -->
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
            <button name="submit">Submit</button>
        </form>
    </section>
</main>


<!-- Here we make a Post request to the contact-form.php using ajax to execute mailing -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#submit').click(function() {
        // Get the user's message from the textarea
        var message = $('#message').val();

        // Send the message to the server via AJAX
        $.ajax({
            type: 'POST',
            url: 'http://lgl-website.local/contact-form.php', // Replace with the actual server endpoint
            data: { message: message },
            success: function(response) {
                $('#form-response').html(response);
            }
        });
    });
});
</script>


<?php
    if (isset($_POST['submit'])) {
        // Check if the form is submitted
    
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $number = sanitize_text_field($_POST['number']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_text_field($_POST['message']);


        // Create the email content
        $to = "raminkhareji@gmail.com"; // Replace with your recipient's email address
        $subject = "Contact Us Form Submission: $subject";
        $message_body = "Name: $name\n";
        $message_body .= "Email: $email\n";
        $message_body .= "Phone Number: $number\n";
        $message_body .= "Message:\n$message\n";
        $headers = "content-type: text/plain; charset=UTF-8";

        
        if (wp_mail($to, $subject, $message_body, $headers)) {
            // Email sent successfully
            echo "Thank you for your message. We will get back to you soon.";
        } else {
            // Email sending failed
            echo "Sorry, there was an issue sending your message. Please try again later.";
        }
        };
    get_footer();
 ?>