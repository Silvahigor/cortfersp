document.addEventListener('DOMContentLoaded', function() {
    emailjs.init("qYBtoqyzf0l0MyAU-");

    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();

        emailjs.sendForm('service_457xt5n', 'template_vdvl2ox', this)
            .then(function() {
                alert('Email enviado com sucesso!');
            }, function(error) {
                alert('Falha ao enviar o email: ' + JSON.stringify(error));
            });
    });
});
