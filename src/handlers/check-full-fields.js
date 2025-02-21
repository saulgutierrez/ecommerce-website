document.addEventListener('DOMContentLoaded', () => {
    let emailBtn = document.querySelector('.email-button');
    let emailInput = document.querySelector('input[name="email"]'); // Seleccionar el campo de texto

    emailBtn.addEventListener('click', (event) => {
        let email = emailInput.value;
        if (email == '') {
            event.preventDefault();
            $('#message').html('Escriba su correo electrónico o su número de telefono móvil');
            $('#message').show();
        } else {
            $.ajax({
                url         :   '../models/check-email.php',
                type        :   'POST',
                data        :   email,
                dataType    :   'text',
                success     :   function(res) {
                    if (res == 1) {
                        $('#message').html('');
                        $('#message').html('Dirección de correo electrónico o número de teléfono móvil incorrecto o no válido. Corríjalo e inténtelo nuevamente.');
                    }
                }
            });
        }
    });
});
