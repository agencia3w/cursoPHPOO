<?php

declare(strict_types=1);

class Fornecedor
{
    private string $name;
    private string $local;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setLocal($local){
        $this->local = $local;
    }

    public function getLocal(){
        return $this->local;
    }
}

class Produto
{
    public Fornecedor $fornecedor;
}

$fornecedor = new Fornecedor;
$fornecedor->setName('Agencia3w');
$fornecedor->setLocal('Feira');

$produto = new Produto();
$produto->fornecedor = $fornecedor;

var_dump($produto);