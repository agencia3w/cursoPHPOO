<?php

declare(strict_types=1);

require '../vendor/autoload.php';

class Template
{
    const PATH = 'app/views';

    public function load()
    {
        return self::PATH;
    }
}

class Twig extends Template
{
    const PATH = 'app/views/twig';
}

echo (new Twig)->load();