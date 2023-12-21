<?php
namespace Blog\Models;

abstract class Model
{
    public function getAll():array
    {
        return [];
    }

    public function getOne(int $id):array
    {
        return [];
    }
}