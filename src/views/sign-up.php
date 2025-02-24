<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/svg/logo.svg" type="image/x-icon">
    <script src="../../public/js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../../public/css/sign-up.css">
    <title>Sign up</title>
</head>
<body>
    <a class="logo" href="../../index.php">
        <div class="imgBox">
            <img src="../../public/svg/logo.svg" alt="">
        </div>
        <div>eShop</div>
    </a>
    <form method="POST">
        <label for="name">Nombre</label>
        <input type="text" name="name" placeholder="Nombre y apellido">
        <label for="email">Número de celular o correo electrónico</label>
        <input type="text" name="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Debe tener al menos 6 caracteres">
        <label for="retype-pass">Vuelve a escribir la contraseña</label>
        <input type="password" name="password">
        <input type="submit" value="Continuar" class="email-button"></input>
        <div class="message" id="message"></div>
        <hr>
        <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
    </form>
    <script src="../handlers/sign-up.js"></script>
</body>
</html>