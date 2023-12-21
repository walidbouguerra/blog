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
}