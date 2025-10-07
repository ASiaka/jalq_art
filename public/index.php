<?php
// Chargement des dépendances via autoload.php de composer
require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        '/' => 'accueil',
    ],
    'accueil'
);
$router->addRoutes(array(
  array(
    'GET',
    '/realisations',
    [
        '/realisations' => 'realisations',
    ],
    'realisations'
  ),
  array(
    'GET',
    '/contact',
    [
        '/contact' => 'contact',
    ],
    'contact'
  ),
  array(
    'GET',
    '/article/[i:id]',
    [
        '/article' => 'article',
    ],
    'article'
  ),
));

$match = $router->match();

$controller = new JalQart\Controllers\MainController();

if($match) {
    $methodToCall = $match['name'];
    $controller->$methodToCall($match);
} else {
    $controller = new JalQart\Controllers\MainController('erreur');
    $controller->erreur();
}