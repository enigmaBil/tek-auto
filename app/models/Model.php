<?php

namespace App\models;

use Database\DBconnect;
use PDO;

abstract class Model
{
    protected DBconnect $db;
    protected $table;

    public function __construct(DBconnect $db)
    {
        $this->db = $db;
    }

    public function all(): array
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY created_at DESC");
    }

    public function findById(int $id): Model
    {
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function create(array $data, ?array $relations = null)
    {
        $columns = "";
        $values = "";
        $counter = 1;

        foreach ($data as $key => $value) {
            $comma = $counter === count($data) ? "" : ", ";
            $columns .= "{$key}{$comma}";
            $values .= ":{$key}{$comma}";
            $counter++;
        }

        return $this->query("INSERT INTO {$this->table} ($columns) VALUES($values)", $data);
    }

    public function update(int $id, array $data, ?array $relations = null)
    {
        $column = "";
        $counter = 1;

        foreach ($data as $key => $value) {
            $comma = $counter === count($data) ? "" : ", ";
            $column .= "{$key} = :{$key}{$comma}";
            $counter++;
        }

        $data['id'] = $id;

        return $this->query("UPDATE {$this->table} SET {$column} WHERE id = :id", $data);
    }

    public function destroy(int $id): bool
    {
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id]);
    }

    public function query(string $sql, array $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';

        if (str_starts_with($sql, 'DELETE') || str_starts_with($sql, 'UPDATE') || str_starts_with($sql, 'INSERT')) {
            $stmt = $this->db->getPDO()->$method($sql);
            $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);
            return $stmt->execute($param);
        }

        $fetch = is_null($single) ? 'fetchAll' : 'fetch';

        $stmt = $this->db->getPDO()->$method($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if ($method === 'query') {
            return $stmt->$fetch();
        } else {
            $stmt->execute($param);
            return $stmt->$fetch();
        }
    }
}