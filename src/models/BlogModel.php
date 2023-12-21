<?php
namespace Blog\Models;

class BlogModel extends Model
{
    protected $table = 'post';

    public function getAll():array
    {
        $query = $this->query("SELECT id, author, DATE_FORMAT(`date`, '%d/%m/%Y') as date, title, content FROM $this->table");
        return $query->fetchAll();
    }

    public function getOne(int $id):array
    {
        $query = $this->query("SELECT id, author, DATE_FORMAT(`date`, '%d/%m/%Y') as date, title, content FROM $this->table WHERE id = :id", ['id' => $id]);
        return $query->fetch();
    }
}