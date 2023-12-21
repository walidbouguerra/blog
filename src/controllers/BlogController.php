<?php
namespace Blog\Controllers;

class BlogController extends Controller
{
    // Affiche la page blog
    public function index():void
    {
        $this->render('pages/blog');
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