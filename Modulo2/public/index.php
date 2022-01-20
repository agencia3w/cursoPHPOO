<?php

declare(strict_types=1);

class Teste
{
    public function t(): string
    {
        return 'teste na classe pai';
    }
}

class TesteSub extends Teste
{
    public function t(): string
    {
        return 'teste na classe filha';
    }
}

$teste = new TesteSub();
echo $teste->t();