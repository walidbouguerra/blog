<?php
// Autoload
require_once '../vendor/autoload.php';

// Classes
use Blog\Controllers\BlogController;
use Blog\Controllers\AboutController;
use Blog\Controllers\ContactController;

// Récupération de l'url
$url = htmlspecialchars($_GET['url'] ?? null);

// Segmentation de l'url
$url = explode('/', $url);

// Initialisation des paramètres de l'url
$controller = $url[0] ?? null;
$param = $url[1] ?? null;

// Routage
switch ($controller) {
    case 'about':
        $aboutController = new AboutController();
        $aboutController->index();
        break;
    case 'contact':
        $contactController = new ContactController();
        $contactController->index();
        break;
    
    default:
        $blogController = new BlogController();
        if ($controller === 'blog' && is_numeric($param)) {
            $blogController->show($param);
        } else {
            $blogController->index();
        }
        break;
}