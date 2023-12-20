<?php
namespace Controllers;

class BlogController extends Controller
{
    // Affiche la page blog
    public function index():void
    {
        $this->render('blog');
    }
}