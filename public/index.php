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
$action = $url[1] ?? null;
$param = $url[2] ?? null;

// Routage
switch ($controller) {
    case 'blog':
        $blogController = new BlogController();
        if (isset($action) && is_numeric($param)) {
            switch ($action) {
                case 'show':
                    $blogController->show($param);
                    break;
                case 'delete':
                    $blogController->delete($param);
                    break;
                case 'update':
                    $blogController->update($param);
                    break;
                
                default:
                    // L'action n'existe pas
                    echo 'L\'action n\'existe pas.';
                    break;
            }
        } else {
            $blogController->index();
        }
        break;
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
        $blogController->index();
        break;
}