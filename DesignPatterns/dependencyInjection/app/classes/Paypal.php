<?php

namespace app\classes;

use app\interfaces\CheckoutInterface;

class Paypal implements CheckoutInterface
{
    public function frete()
    {
        return 'paypayl frete';
    }

    public function pay()
    {
        return 'paypal';
    }
}