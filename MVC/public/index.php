<?php

require "../bootstrap.php";

use core\Controller;
use core\Method;

// dd(app\classes\Uri::uri());

try {
    $controller = new Controller;
    $controller->load();
    // dd($controller);

    $method = new Method;
    $method = $method->load($controller);
    $controller->$method();

} catch (\Exception $e) {
    dd($e->getMessage());
}
