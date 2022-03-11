<?php

namespace app\models;

use app\classes\Bind;
use PDO;

class Connection
{
    public static function Connect()
    {
        $config = (object) Bind::get('config')->database;

        $pdo = new PDO("mysql:host=$config->host;dbname=$config->dbname", $config->user, $config->password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);

        return $pdo;
    }
}
