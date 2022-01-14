<?php

declare(strict_types=1);

class Connection
{
    private static $connect = null;

    public static function connect()
    {
        try {
            if (!self::$connect) {
                self::$connect = new PDO("mysql:host=localhost;dbname=radiomobile", "root", "", [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            }

            return self::$connect;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}

class Model
{
    protected $connection;

    public function __construct()
    {
        $this->connection = Connection::connect();
    }

    protected function query($sql)
    {
        $query = $this->connection->query($sql);
        $query->execute();
        return $query;
    }

    protected function prepare($sql, $data)
    {
        $query = $this->connection->query($sql);
        $query->execute($data);
        return $query;
    }

    public function all()
    {
        $sql = "select * from {$this->table}";
        $query = $this->query($sql);
        return $query->fetchAll();
    }
}

class User extends Model
{
    protected $table = 'clients';

    public function usersWithIsAdmin()
    {
        $sql = "Select * from {$this->table} limit 1";
        $query = $this->query($sql);
        return $query->fetchAll();
    }
}

$user = new User;
var_dump($user->usersWithIsAdmin());
