console.log("Turboot Website");

// EmailJS

let PUBLIC_KEY = config.PUBLIC_KEY;
let SERVICE_ID = config.SERVICE_ID;
let TEMPLATE_ID = config.TEMPLATE_ID;
(function () {
   emailjs.init(PUBLIC_KEY);
})();

function sendMail(SERVICE_ID, TEMPLATE_ID) {
   var params = {
      name : document.getElementById("name").value,
      email : document.getElementById("email").value,
      subject : document.getElementById("subject").value,
      message : document.getElementById("message").value,
   }
   emailjs.send(SERVICE_ID, TEMPLATE_ID, params).then(function (res) {
      alert("Mail succesfully sent! " + res.status);
   })
}