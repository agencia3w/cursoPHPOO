<?php

namespace app\database\activerecord;

use app\database\connection\Connection;
use app\database\interfaces\ActiveRecordExecuteInterface;
use app\database\interfaces\ActiveRecordInterface;

class Delete implements ActiveRecordExecuteInterface
{
    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        try {
            $query = $this->createQuery($activeRecordInterface);
            $connection = Connection::connect();
            $prepare = $connection->prepare($query);
            return $prepare->execute($activeRecordInterface->getAttributes());
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        $sql = "delete from {$activeRecordInterface->getTable()} where id = :id";
        return $sql;
    }
}
