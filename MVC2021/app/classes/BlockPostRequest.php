<?php

namespace app\classes;

class BlockPostRequest
{
    public static function block()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require VIEW_PATH.'denied.php';
            die();
        }
    }
}