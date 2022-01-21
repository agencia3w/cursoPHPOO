<?php

declare(strict_types=1);

trait validaCpf
{
    public function validaCpf()
    {
        return 'validar cpf';
    }
}

trait StringUtils
{
    public function slug()
    {
        return 'slug';
    }
}

abstract class Checkout
{
    abstract public function pay();
}

class PagseguroCheckout extends Checkout
{
    use validaCpf, StringUtils;
    public function pay()
    {
    }
}

class PaypalCheckout extends Checkout
{
    use validaCpf;
    public function pay()
    {
    }
}
