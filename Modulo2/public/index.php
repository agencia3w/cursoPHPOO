<?php

declare(strict_types=1);

class CartShop
{
    public function add($product): void
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        !isset($_SESSION['cart'][$product]) ?
            $_SESSION['cart'][$product] = 1 :
            $_SESSION['cart'][$product] += 1;
    }

    public function clear(): void
    {
        if (count($this->cart()) > 0) {
            unset($_SESSION['cart']);
        }
    }

    public function cart(): array
    {
        if (isset($_SESSION['cart'])) {
            return $_SESSION['cart'];
        }

        return [];
    }
}

$cart = new CartShop;
$cart->add('product');
$cart->clear();


var_dump($cart->cart());
