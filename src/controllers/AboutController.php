<?php
namespace Controllers;

class AboutController extends Controller
{
    // Affiche la page about
    public function index():void
    {
        $this->render('about');
    }
}