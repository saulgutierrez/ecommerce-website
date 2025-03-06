document.addEventListener('DOMContentLoaded', () => {
    let emailBtn = document.querySelector('.email-button');
    let emailInput = document.querySelector('input[name="email"]'); // Seleccionar el campo de texto

    emailBtn.addEventListener('click', (event) => {
        let email = emailInput.value;
        let parentDiv = emailInput.parentNode;
    
        let existingError = parentDiv.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
    
        if (email == '') {
            event.preventDefault();
            emailInput.classList.add("error-login");
    
            let insertDiv = document.createElement('div');
            insertDiv.classList.add("error-message");
            insertDiv.innerText = "Escriba su correo electrónico o su número de teléfono móvil";
    
            parentDiv.insertBefore(insertDiv, emailBtn);
        } else {
            event.preventDefault();
            $.ajax({
                url         :   '../models/check-email.php',
                type        :   'POST',
                data        :   { email: email }, // Pasar datos como objeto
                dataType    :   'text',
                success     :   function(res) {
                    if (res == 1) {
                        event.preventDefault();
                        $('#message').html('Dirección de correo electrónico o número de teléfono móvil incorrecto o no válido. Corríjalo e inténtelo nuevamente.');
                    } else {
                        location.href = 'login-password.php?email=' + email;
                    }
                }
            });
        }
    });    
});
