<?php
get_header();
?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact us</h1>
                <p>We'd love to hear from you!</p>
</div>
</section>
<section class="content-form-section">
    <div class="container">
        <form action="" method="post" class="contact-form">
            <p>
                <label for="name">Your name:</label>
                <input type="text" id="name" name="name" required>
            </p>
            <p>
                <label for="email">Your email:</label>
                <input type="email" id="email" name="email" required>
            </p>
            <p>
                <label for="email">Subject</label>
                <input type="text" id="subject" name="subject">
            </p>
            <p>
                <label for="email">Message</label>
                <textarea type="message" id="message" rows="6" required></textarea>
            </p>
            <p>
                <input type="submit" name="submit_contact" value="send message">
            </p>

        </form>
    </div>
</section>
</main>
</div>
<?php get_footer();?>
