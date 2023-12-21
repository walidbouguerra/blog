<?php
namespace Blog\Controllers;

class AboutController extends Controller
{
    // Affiche la page about
    public function index():void
    {
        $this->render('pages/about');
    }
}