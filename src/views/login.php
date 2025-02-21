<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../public/svg/logo.svg" type="image/x-icon">
    <script src="../../public/js/jquery-3.7.1.min.js"></script>
    <title>Login</title>
</head>
<body>
    <form action="login-password.php" method="POST">
        <label for="email">Direccion de email o numero de teléfono móvil</label>
        <input type="text" name="email">
        <input type="submit" value="Continuar" class="email-button"></input>
        <div class="message" id="message"></div>
    </form>
    <script src="../handlers/check-full-fields.js"></script>
</body>
</html>