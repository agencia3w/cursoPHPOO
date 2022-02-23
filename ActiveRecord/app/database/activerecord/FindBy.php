<?php

namespace app\database\activerecord;

use app\database\connection\Connection;
use app\database\interfaces\ActiveRecordExecuteInterface;
use app\database\interfaces\ActiveRecordInterface;

class FindBy implements ActiveRecordExecuteInterface
{
    private string $field;
    private string $value;
    private string $fields;

    public function __construct($field, $value, $fields = '*')
    {
        $this->field = $field;
        $this->value = $value;
        $this->fields = $fields;
    }

    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        try {
            $query = $this->createQuery($activeRecordInterface);
            $connection = Connection::connect();
            $prepare = $connection->prepare($query);

            $prepare->execute([
                $this->field => $this->value
            ]);

            return $prepare->fetch();
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        $sql = "select {$this->fields} from {$activeRecordInterface->getTable()} where {$this->field} = :{$this->field}";
        return $sql;
    }
}
