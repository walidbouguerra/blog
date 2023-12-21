<?php
namespace Blog\Models;

abstract class Model extends Database
{
    protected $table;   

    public function getAll():array
    {
        $query = $this->query("SELECT * FROM $this->table");
        return $query->fetchAll();
    }

    public function getOne(int $id):array
    {
        return [];
    }
}