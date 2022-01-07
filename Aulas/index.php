<?php

require "vendor/autoload.php";

class ShoppingCart
{
    public function __toString()
    {
        return "Chamando o toString";
    }
}

$shoppingCart = new ShoppingCart;
echo $shoppingCart;
