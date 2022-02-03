<?php

declare(strict_types=1);

class Checkout
{
    protected $log;
    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    public function pay(){
        return 'fez pagamento e gerou log: ' . $this->log->create();
    }
}

class Log
{
    public function create()
    {
        return 'create log';
    }
}

$checkout = new Checkout(new Log);
echo $checkout->pay();