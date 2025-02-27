document.addEventListener('DOMContentLoaded', () => {
    let signUpBtn = document.querySelector('.email-button');
    let nameInput = document.querySelector('.name-input');
    let emailText = document.querySelector('.email-text');
    let emailInput = document.querySelector('.email-input');
    let passwordText = document.querySelector('.pass-text');
    let passwordInput = document.querySelector('.password-input');
    let retypePass = document.querySelector('.retype-password-input');
    let retypePassText = document.querySelector('.retype-pass');

    $('#signUpForm').on('submit', function (event) {
        event.preventDefault();

        let filledNameTextField = false;
        let filledEmailTextField = false;
        let filledPasswordTextField = false;
        let filledRetypePasswordTextField = false;


        var formData = new FormData(this);

        let name = nameInput.value;
        let parentDivName = nameInput.parentNode;

        let existingErrorName = parentDivName.querySelector('.error-message-name');
        if (existingErrorName) {
            existingErrorName.remove();
        }

        if (name == '') {
            event.preventDefault();
            nameInput.classList.add("error-sign-up");

            let insertDiv = document.createElement('div');
            insertDiv.classList.add("error-message-name");
            insertDiv.innerText = "Introduce tu nombre";

            parentDivName.insertBefore(insertDiv, emailText);
        } else {
            if (nameInput.classList.contains("error-sign-up")) {
                nameInput.classList.remove("error-sign-up");
            }
            filledNameTextField = true;
        }

        let email = emailInput.value;
        let parentDivEmail = emailInput.parentNode;

        let existingErrorEmail = parentDivEmail.querySelector('.error-message-email');
        if (existingErrorEmail) {
            existingErrorEmail.remove();
        }

        if (email == '') {
            event.preventDefault();
            emailInput.classList.add("error-sign-up");

            let insertDiv = document.createElement('div');
            insertDiv.classList.add("error-message-email");
            insertDiv.innerText = "Escriba su correo electrónico o su número de teléfono móvil";

            parentDivEmail.insertBefore(insertDiv, passwordText);
        } else {
            if (emailInput.classList.contains("error-sign-up")) {
                emailInput.classList.remove("error-sign-up");
            }
            filledEmailTextField = true;
        }

        let parentDivPassword = passwordInput.parentNode;
        let password = passwordInput.value;

        let existingErrorPassword = parentDivPassword.querySelector('.error-message-password');
        if (existingErrorPassword) {
            existingErrorPassword.remove();
        }

        if (password.length < 6) {
            event.preventDefault();
            passwordInput.classList.add("error-sign-up");

            let insertDiv = document.createElement('div');
            insertDiv.classList.add("error-message-password");
            insertDiv.innerText = "Mínimo 6 caracteres requeridos";

            parentDivPassword.insertBefore(insertDiv, retypePassText);
        } else {
            if (passwordInput.classList.contains("error-sign-up")) {
                passwordInput.classList.remove("error-sign-up");
            }
            filledPasswordTextField = true;
        }

        if ((filledEmailTextField == true) && (filledNameTextField == true) && (filledPasswordTextField == true)) {
            $.ajax({
                url             :   '../models/sign-up.php',
                type            :   'POST',
                data            :   formData,
                contentType     :   false,
                processData     :   false,
                success         :   function(response) {
                    if (response == 1) {
                        $('#message').html('Seleccione otro nombre de usuario');
                        $('#message').show();
                    } else {
                        location.href = 'dashboard.php';
                    }
                }
            });
        }
    });
});