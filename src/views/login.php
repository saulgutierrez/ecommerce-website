<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/svg/logo.svg" type="image/x-icon">
    <script src="../../public/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../../public/css/login.css">
    <title>Login</title>
</head>
<body>
    <a class="logo" href="../../index.php">
        <div class="imgBox">
            <img src="../../public/svg/logo.svg" alt="">
        </div>
        <div>eShop</div>
    </a>
    <form method="POST">
        <label for="" class="title">Iniciar sesión</label>
        <label for="email" class="email-text">Direccion de email o numero de teléfono móvil</label>
        <input type="text" name="email">
        <input type="submit" value="Continuar" class="email-button"></input>
        <details>
            <summary>
                <img src="../../public/svg/down-arrow.svg" alt="Icono" class="icono"> ¿Necesitas ayuda?
            </summary>
            <p>¿Olvidaste tu contraseña?</p>
            <p>Otros problemas para iniciar sesión</p>
        </details>
        <div class="message" id="message"></div>
    </form>
    <div>
        <p>¿Eres nuevo en eShop?</p>
        <a href="sign-up.php">Crear tu cuenta en eShop</a>
    </div>
    <script src="../handlers/check-full-fields.js"></script>
</body>
</html>