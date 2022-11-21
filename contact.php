<?php
include_once "header.php";
?>
 
 <div class="contact-body">

<div id="contact-form">
<h3 class="contact-h3">Contact us</h3>

<form id="contact-form-id" class="contact-form-class" method="post" action="contact-process.php">
    
    <div class="contact-form-group">
        <label for="name" class="contact-label">Your name</label>
        <div class="contact-input-group">
            <input type="text" id="Name" name="name" class="contact-form-control" required>
        </div>
    </div>

    <div class="contact-form-group">
        <label for="mail" class="contact-label">Your email address</label>
        <div class="contact-input-group">
            <input type="email" id="Email" name="mail" class="contact-form-control" required>
        </div>
    </div>

    <div class="contact-form-group">
        <label for="subject" class="contact-label">Subject</label>
        <div class="contact-input-group">
            <input id="Message" name="subject" class="contact-form-control" required>
        </div>
    </div>

    <div class="contact-form-group">
        <label for="message" class="contact-label">Message</label>
        <div class="contact-input-group">
            <textarea id="Message" name="message" class="contact-form-control" rows="6" maxlength="3000" required></textarea>
        </div>
    </div>

    <div class="contact-form-group">
        <button type="submit" name="submitmail" id="contact-button" class="contact-btn contact-btn-primary contact-btn-lg contact-btn-block">Send Message</button>
    </div>

</form>
</div>

</div>
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("1fonBJy85TkzG1Jje");
   })();
</script>
<?php
include_once "footer.php";
?>