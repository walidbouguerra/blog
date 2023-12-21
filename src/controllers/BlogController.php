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
        $posts = $this->model->getAll();
        $this->render('pages/blog', ['posts' => $posts]);
    }

    public function show(int $id):void
    {
        $this->render('pages/post', []);
    }

    public function delete(int $id):void
    {

    }

    public function update(int $id):void
    {

    }
}