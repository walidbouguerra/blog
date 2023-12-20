<?php
namespace Controllers;

class HomeController extends Controller
{
    // Affiche la page home
    public function index():void
    {
        $this->render('home');
    }
}