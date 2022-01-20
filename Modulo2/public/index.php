<?php

declare(strict_types=1);

abstract class Checkout
{
    abstract function pay($payment): array;
}

class PaypalCheckout extends Checkout
{
    public function pay($payment): array
    {
        return [];
    }
}

class PagseguroCheckout extends Checkout
{
    public function pay($payment): array
    {
        return [];
    }
}

$paypal = new PaypalCheckout();
$paypal->pay([]);