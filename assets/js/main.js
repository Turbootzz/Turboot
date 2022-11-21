console.log("Turboot Website");


// EmailJS
(function(){
    emailjs.init("1fonBJy85TkzG1Jje");
 })();

 var templateParams = {
    name: 'Turboot',
    notes: 'Check test'
};
 
emailjs.send('service_iq9eq5d', 'template_bwxadoi', templateParams)
    .then(function(response) {
       console.log('SUCCESS!', response.status, response.text);
    }, function(error) {
       console.log('FAILED...', error);
    });