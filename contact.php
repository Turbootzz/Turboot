<?php
include_once "header.php";
?>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script src="assets/js/emailjs.js"></script>
<div class="contact-body">
    <div id="contact-form">
        <h3 class="contact-h3">Contact us</h3>
        <div class="contact-form-class">
            <input type="hidden" name="contact_number">
            <div class="contact-form-group">
                <label for="name" class="contact-label">Your name</label>
                <div class="contact-input-group">
                    <input type="text" id="name" name="name" class="contact-form-control" required>
                </div>
            </div>
            <div class="contact-form-group">
                <label for="email" class="contact-label">Your email address</label>
                <div class="contact-input-group">
                    <input type="email" id="email" name="email" class="contact-form-control" required>
                </div>
            </div>
            <div class="contact-form-group">
                <label for="subject" class="contact-label">Subject</label>
                <div class="contact-input-group">
                    <input id="subject" name="subject" class="contact-form-control" required>
                </div>
            </div>
            <div class="contact-form-group">
                <label for="message" class="contact-label">Message</label>
                <div class="contact-input-group">
                    <textarea id="message" name="message" class="contact-form-control" rows="6" maxlength="3000"
                        required></textarea>
                </div>
            </div>
            <div class="contact-form-group">
                <button onclick="sendMail()" type="submit" id="submit-button"
                    class="contact-btn contact-btn-primary contact-btn-lg contact-btn-block">Send Message</button>
            </div>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>