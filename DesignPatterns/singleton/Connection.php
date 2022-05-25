<?php

namespace app;

use PDO;

class Connection
{
    protected static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new PDO('mysql:host=localhost;dbname=activerecord','root','');
        }
        return self::$instance;
    }
}