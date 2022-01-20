<?php

declare(strict_types=1);

interface CartInterface
{
    public function add($product): void;
    public function remove($product): void;
    public function quantity($quantity, $product): void;
    public function clear(): void;
    public function cart(): array;
}

class CartShop implements CartInterface
{
    public function add($product): void
    {
    }

    public function remove($product): void
    {
    }

    public function quantity($quantity, $product): void
    {
    }

    public function clear(): void
    {
    }

    public function cart(): array
    {
        return [];
    }
}

$cart = new CartShop;
$cart->add('monitor');