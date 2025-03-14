document.addEventListener('DOMContentLoaded', () => {
    let passwordBtn = document.querySelector('.password-button');
    let passwordInput = document.querySelector('input[name="password"]'); // Seleccionar el campo de texto
    let emailInput = document.querySelector('input[name="email"]'); // Seleccionar el campo de texto

    $('#loginPasswordForm').on('submit', function (event) {
        event.preventDefault();

        var formData = new FormData(this);

        let existingError = passwordInput.parentNode.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }

        if (password == '') {
            event.preventDefault();
            passwordInput.classList.add("error-login");

            let insertDiv = document.createElement('div');
            insertDiv.classList.add("error-message");
            insertDiv.innerText = "Introduce tu contraseña";

            passwordInput.parentNode.insertBefore(insertDiv, passwordBtn);
        } else {
            event.preventDefault();
            $.ajax({
                url         :   '../models/check-password.php',
                type        :   'POST',
                data        :   formData, // Pasar datos como objeto
                contentType :   false,
                processData :   false,
                success     :   function(res) {
                    if (res == 1) {
                        event.preventDefault();
                        $('#message').html('Contraseña incorrecta. Corríjala e inténtelo nuevamente.');
                    } else {
                        location.href = 'dashboard.php';
                    }
                }
            });
        }
    });
});