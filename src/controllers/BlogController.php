<?php
namespace Blog\Controllers;
use Blog\Models\BlogModel;

class BlogController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new BlogModel();
    }

    // Affiche la page blog
    public function index():void
    {
        $data = $this->model->getAll();
        $this->render('pages/blog', $data);
    }

    public function show(int $id):void
    {

    }

    public function delete(int $id):void
    {

    }

    public function update(int $id):void
    {

    }
}