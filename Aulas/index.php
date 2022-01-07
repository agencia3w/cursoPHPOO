<?php

require "vendor/autoload.php";

class ShoppingCart
{
    private $get = [];
    private $product;

    public function __set($name, $value)
    {
        if (!property_exists($this, $name)) {
            $this->get[$name][] = $value;
        }

        throw new Exception("Essa propriedade já existe");
    }

    public function __get($name)
    {
        var_dump($this->get[$name]);
    }
}

$shoppingCart = new ShoppingCart;
$shoppingCart->product = 'Monitor';
$shoppingCart->product = 'Mouse';
$shoppingCart->product;
