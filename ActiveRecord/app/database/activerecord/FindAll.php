<?php

namespace app\database\activerecord;

use app\database\connection\Connection;
use app\database\interfaces\ActiveRecordExecuteInterface;
use app\database\interfaces\ActiveRecordInterface;
use Exception;

class FindAll implements ActiveRecordExecuteInterface
{
    private array $where = [];
    private string $limit = '';
    private string $offset = '';
    private string $fields = '*';

    public function __construct($where, $limit = '', $offset = '')
    {
        $this->where = $where;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        try {
            $query = $this->createQuery($activeRecordInterface);
            $connection = Connection::connect();
            $prepare = $connection->prepare($query);
            $prepare->execute($this->where);

            return $prepare->fetchAll();
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        if (count($this->where) > 1) {
            throw new Exception('Só é possível informar 1 índice');
        }

        $where = array_keys($this->where);
        $sql = "select {$this->fields} from {$activeRecordInterface->getTable()}";
        $sql .= (!$this->where) ? '' : " where {$where[0]}  = :{$where[0]}";
        $sql .= (!$this->limit) ? '' : " limit {$this->limit}";
        $sql .= ($this->offset != '') ? " offset {$this->offset}" : '';
        return $sql;
    }
}
