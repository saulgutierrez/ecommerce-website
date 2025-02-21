<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <title>eShop</title>
</head>
<body>
    <nav>
        <a href="#" class="logo">
            <div class="imgBox">
                <img src="../public/svg/logo.svg" alt="">
            </div>
            <div>eShop</div>
        </a>
        <li class="searchForm" id="searchForm" onsubmit="return false;">
            <input type="searchQuery" placeholder="Buscar en eShop">
            <button type="submit" class="search-btn">
                <div class="imgBox">
                    <img src="../public/svg/search.svg" alt="">
                </div>
            </button>
        </li>
        <li>
            <a href="#" class="menu">
                <div>Hola, identificate</div>
                <div>Cuenta y Listas</div>
            </a>
            <div class="float-menu hidden">
                <a href="../src/views/login.php" class="login-btn">Identicarse</a>
                <div class="newcomer-link">¿Eres un cliente nuevo? <a href="">Empieza aquí</a></div>
                <hr class="div-line">
                <div class="account-content">
                    <div>
                        <h1>Listas</h1>
                        <a href="">Crear una wishlist</a>
                    </div>
                    <div>
                        <h1>Mi cuenta</h1>
                        <a href="">Mi cuenta</a>
                        <a href="">Mis pedidos</a>
                        <a href="">Mis recomendaciones</a>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a href="#">
                <div>Devoluciones</div>
                <div>y Pedidos</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="imgBox">
                    <img src="../public/svg/shopping-cart.svg" alt="">
                </div>
                <div>Carrito</div>
            </a>
        </li>
    </nav>
    <script src="../src/ui/navbar.js"></script>
</body>
</html>