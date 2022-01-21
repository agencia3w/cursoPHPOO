<?php

declare(strict_types=1);

class Estoque
{
    private int $estoque;

    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function tirarEstoque($quantidade){
        if($quantidade > $this->estoque){
            throw new Exception("O valor informado é maior que o estoque disponível");
        }
        if($quantidade < 0){
            throw new Exception("Não pode ser informado um valor negativo.");
        }

        $this->estoque -= $quantidade;
    }
}

$estoque = new Estoque;
$estoque->setEstoque(100);
$estoque->tirarEstoque(50);
var_dump($estoque->getEstoque());