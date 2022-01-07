<?php

require "vendor/autoload.php";

class Head
{
    public function create()
    {
        return 'Criando a cabeça';
    }
}

class Hand
{
    public function create()
    {
        return 'Criando a mão';
    }
}

class Person
{

    private $head;

    public function __construct()
    {
        $this->head = new Head; //é essencial E DEPENDE da outra para a classe existir então composição
    }

    // quando a classe depende da outra MAS não é essencial para a outra existir, então usa-se agregação
    public function create(Hand $hand)
    {
        $this->head->create();
        $hand->create();
    }
}

$person = new Person;
echo $person->create(new Hand);

/**
 * Quando usar herança, composição ou agregação
 * Heranca: a classe é um...?
 * Composição: a classe tem um ... e é essencial para existir
 * Agregação: a classe tem um ... e não é essencial para existir
 */
