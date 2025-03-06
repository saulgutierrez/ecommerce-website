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
    <title>Login</title>
</head>
<body>
    <form>
        <label for="title">Iniciar sesión</label>
        <h2><?php echo $email;?> <a href="login.php">Cambiar</a></h2>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="submit" value="Iniciar sesión" class="password-button">
        <div class="message" id="message"></div>
    </form>
    <script src="../handlers/check-password.js"></script>
</body>
</html>