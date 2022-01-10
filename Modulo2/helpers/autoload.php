<?php

spl_autoload_register(function ($class) {
    $base_dir = dirname(__FILE__,2) . '/';

    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        return require $file;
    }

    die("A classe {$class} não existe");
});