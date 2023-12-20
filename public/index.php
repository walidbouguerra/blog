<?php
// Récupération de l'url
$url = htmlspecialchars($_GET['url'] ?? null);
// Segmentation de l'url
$url = explode('/', $url);
// Initialisation des paramètres de l'url
$controller = $url[0] ?? null;
$action = $url[1] ?? null;
$param = $url[2] ?? null;