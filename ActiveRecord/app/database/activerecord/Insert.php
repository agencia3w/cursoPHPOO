<?php

namespace app\database\activerecord;

use app\database\connection\Connection;
use app\database\interfaces\ActiveRecordExecuteInterface;
use app\database\interfaces\ActiveRecordInterface;

class Insert implements ActiveRecordExecuteInterface
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
        $sql = "insert into {$activeRecordInterface->getTable()} (";
        $sql .= implode(',', array_keys($activeRecordInterface->getAttributes())) . ") values(";
        $sql .= ":" . implode(',:', array_keys($activeRecordInterface->getAttributes())) . ")";

        return $sql;
    }
}
