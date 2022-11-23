<?php
if (isset($_POST["submitmail"])) {
//     $name = $_POST["name"];
//     $subject = $_POST["subject"];
//     $mailForm = $_POST["mail"];
//     $message = $_POST["message"];

//     $mailTo = "tc.herman@hotmail.com";
//     $headers = "From: " . $mailForm;
//     $txt = "You have received an email from " . $name . ".\n\n" . $message;

//     mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsent");

//     error_reporting(-1);
//     ini_set('display_errors', 'On');
//     set_error_handler("var_dump");
}
?>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>