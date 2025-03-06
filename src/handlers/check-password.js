document.addEventListener('DOMContentLoaded', () => {
    let passwordBtn = document.querySelector('.password-button');
    let passwordInput = document.querySelector('input[name="password"]'); // Seleccionar el campo de texto

    passwordBtn.addEventListener('click', (event) => {
        let password = passwordInput.value;
    });
});