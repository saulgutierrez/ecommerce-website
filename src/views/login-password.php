<?php
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
    }
?>

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
    <form id="loginPasswordForm" method="POST">
        <label for="title">Iniciar sesión</label>
        <h2><?php echo $email;?> <a href="login.php">Cambiar</a></h2>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="submit" value="Iniciar sesión" class="password-button">
        <div id="message"></div>
    </form>
    <script src="../handlers/check-password.js"></script>
</body>
</html>