<?php
namespace Blog\Controllers;

class Controller
{
    // Importe une vue avec les données
    public function render(string $view, array $data=[]):void
    {
        extract($data);
        ob_start();
        include_once '../views/' . $view . '.php';
        $content = ob_get_clean();
        include_once '../views/template.php';
    }
}