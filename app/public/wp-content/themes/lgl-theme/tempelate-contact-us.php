<?php
/* Template Name: Contact Us */
// This is the Contact Us page
?>  

<?php
    get_header();
 ?>

<main class="contact-us-container">
    <section>
        <form class="contact-us-form" method="post" action="process-contact-form.php">
            <h1 class="page-title">Contact Us</h1>

            <div class="name-section">
                <label for="full-name">Full Name:</label>
                <input type="text" class="full-name" name="full-name" required>
            </div>

            <div class="email-section">
                <!-- Make it so that when a user is logged in the email auto fills -->
                <label for="email">Email:</label>
                <input type="email" class="email" name="email" required>
            </div>

            <div class="pNumber-section">
                <label for="phone">Phone Number (optional):</label>
                <input type="tel" class="phone" name="phone">
            </div>

            <div class="subject-section">
                <label for="subject">Subject:</label>
                <input type="text" class="subject" name="subject" required>
            </div>

            <div class="message-section">
                <label for="message">Message:</label>
                <textarea class="message" name="message" rows="6" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
</main>

<?php
    get_footer();
 ?>