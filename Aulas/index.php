<?php

require "vendor/autoload.php";

class ShoppingCart
{
    private $products = [];

    public function __call($name, $params)
    {
        $this->products[] = $params;
    }

    public function products()
    {
        return $this->products;
    }
}

$shoppingCart = new ShoppingCart;
$shoppingCart->add('Monitor');
$shoppingCart->add('Mouse');
$shoppingCart->add('Teclado');
var_dump($shoppingCart->products());
