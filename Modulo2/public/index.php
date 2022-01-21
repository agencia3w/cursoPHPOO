<?php

declare(strict_types=1);

$obj = new class('Paulinho')
{
    public function __construct($name)
    {
    }

    public function getName()
    {
        return $this->name;
    }
};

var_dump($obj->getName());
