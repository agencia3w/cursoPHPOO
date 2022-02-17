<?php

use app\classes\Cart;
use app\classes\CartProducts;

session_start();
require '../vendor/autoload.php';

$cartProducts = new CartProducts(new Cart);
$products = $cartProducts->products();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Cart</title>
</head>

<body>
    <h2>Cart | <a href="/">Home</a></h2>
    <hr>

    <div id="container">
        <?php if (count($products['products']) <= 0) : ?>
            <h3>O carrinho está vazio :(</h3>
        <?php else : ?>
            <ul>
                <?php foreach($products['products'] as $product): ?>
                    <li class="cart-product">
                        <b><?php echo $product['product'] ?></b>
                        <form action="quantidade.php" method="get">
                            <input type="text" name="qty" id="cart-input-qty" value="<?php echo $product['qty'] ?>">
                            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                        </form> x R$ <?php echo number_format($product['price'],'2',',','.'); ?> | <?php echo number_format($product['subtotal'],'2',',','.'); ?>
                        <a href="remover.php?id=<?php echo $product['id'] ?>" class="right btn">Remover</a>
                    </li>
                <?php endforeach?>
            </ul>

            <hr>
            <div id="cart-total-clear">
                <span id="cart-total">
                    Total: R$ <?php echo number_format($products['total'],'2',',','.'); ?>
                </span>
                <span id="cart-clear">
                    <a href="clear.php" class="btn">Limpar Carrinho</a>
                </span>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>