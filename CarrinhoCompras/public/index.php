<?php

use app\classes\Cart;

session_start();

require '../vendor/autoload.php';

$products = require '../app/helpers/products.php';

$cart = new Cart;
$productsInCart = $cart->cart();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>

<body>
    <div id="container">
        <h3>Cart: <?php echo count($productsInCart); ?> | <a href="cart.php">Go to Cart</a></h3>
        <ul>
            <?php foreach ($products as $index => $product) : ?>
                <li><?php echo $product['name'] ?> | <?php echo number_format($product['price'], 2, ',', '.'); ?></li> <a href="add.php?id=<?php echo $index; ?>">Add</a>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>