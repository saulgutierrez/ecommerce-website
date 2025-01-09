<?php
    require('../config/connection.php');

    $sqlGetProducts = "SELECT * FROM product";
    $getProducts = $conn->query($sqlGetProducts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/svg/logo.svg" type="image/x-icon">
    <title>eShop</title>
</head>
<body>
    <?php include "../src/views/includes/navbar.php"; ?>

    <div class="products-container">
    <?php
        if ($getProducts->num_rows > 0) {
            while ($rowProducts = $getProducts->fetch_assoc()) {
                $productId = $rowProducts['id'];
                $productName = $rowProducts['name'];
                $productDescription = $rowProducts['description'];
                $productPrice = $rowProducts['price'];
                $productImage = $rowProducts['image'];
    ?>
    <div class="product-card">
        <div class="imgBox">
            <img src="<?php echo $productImage; ?>" alt="">
        </div>
        <a href="product-details.php?id=<?php echo $productId; ?>">
            <div><?php echo $productName; ?></div>
        </a>
        <div><?php echo $productDescription; ?></div>
        <div>$ <?php echo $productPrice; ?> </div>
    </div>
    <?php
            }
    ?>
    <?php
        }
    ?>
    </div>
</body>
</html>