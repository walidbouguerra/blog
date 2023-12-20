<?php
// Récupération de l'url
$url = htmlspecialchars($_GET['url'] ?? null);

// Segmentation de l'url
$url = explode('/', $url);

// Initialisation des paramètres de l'url
$controller = $url[0] ?? null;
$action = $url[1] ?? null;
$param = $url[2] ?? null;

// Routage
switch ($controller) {
    case 'blog':
        // $blogController = new blogController();
        // $blogController->index();
        echo 'Blog';
        break;
    case 'about':
        // $aboutController = new AboutController();
        // $aboutController->index();
        echo 'About';
        break;
    case 'contact':
        // $contactController = new contactController();
        // $contactController->index();
        echo 'Contact';
        break;
    
    default:
        // $accueilController = new accueilController();
        // $accueilController->index();
        echo 'Accueil';
        break;
}