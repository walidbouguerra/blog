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

    public function router(string $action, int $param):void
    {
        switch ($action) {
            case 'show':
                $this->show($param);
                break;
            case 'delete':
                $this->delete($param);
                break;
            case 'update':
                $this->update($param);
                break;
            
            default:
                // L'action n'existe pas
                echo 'L\'action n\'existe pas.';
                break;
        }
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

    public function delete(int $id):void
    {

    }

    public function update(int $id):void
    {

    }
}