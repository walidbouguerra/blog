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
        $this->render('pages/blog', compact('posts'));
    }

    public function show(int $id):void
    {
        $post = $this->model->getOne($id);
        $this->render('pages/post', compact('post'));
    }
}