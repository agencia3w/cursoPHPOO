<?php

require "vendor/autoload.php";

abstract class Banco
{
    public function depositar($valor)
    {
        return "depositando com juros de 0.3 o valor de {$valor}";
    }
}

class Itau extends Banco
{

    private $juros = 0.6;

    public function depositar($valor)
    {
        return "depositando com juros de {$this->juros} o valor de {$valor}";
    }
}

class Bradesco extends Banco
{
    private $juros = 1;

    public function depositar($valor)
    {
        return "depositando com juros de {$this->juros} o valor de {$valor}";
    }
}


$itau = new Itau();
echo $itau->depositar(100);