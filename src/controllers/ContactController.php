<?php
namespace Controllers;

class ContactController extends Controller
{
    // Affiche la page contact
    public function index():void
    {
        $this->render('contact');
    }
}