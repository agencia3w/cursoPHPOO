<?php

require "vendor/autoload.php";

interface HeadInterface
{
    public function create();
}

class Head implements HeadInterface
{
    public function create()
    {
        return 'Cabeça';
    }
}

class HeadLoiro implements HeadInterface
{
    public function create()
    {
        return 'Loiro';
    }
}

class Person {

    private $head;

    public function __construct(HeadInterface $head)
    {
        $this->head = $head;
    }

    public function create(){
        return $this->head->create();
    }
}

$person = new Person(new HeadLoiro);
echo $person->create();