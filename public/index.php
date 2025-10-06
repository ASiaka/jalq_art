<?php
// Chargement des dépendances via autoload.php de composer
require __DIR__ . '/../vendor/autoload.php';
// Connexion base de données
require __DIR__ . '/../app/Utils/DataBase.php';
// Tout nos données - affichage, suppression, ajout
require __DIR__ . '/../app/Models/ÎlesInfos.php';
require __DIR__ . '/../app/Models/JalQart.php';
// Controller
require __DIR__ . "/../app/Controllers/MainController.php";

$instanceÎlesInfos = new ÎlesInfos();
$ÎlesInfos = $instanceÎlesInfos->findAll();

$instanceJalQart = new JalQart();
$JalQart = $instanceJalQart->findAll();

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);
$router->map(
    'GET',
    '/',
    [
        '/' => 'accueil',
        'ÎlesInfos' => $ÎlesInfos,
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
        'ÎlesInfos' => $ÎlesInfos,
    ],
    'article'
  ),
));
$match = $router->match();
$controller = new MainController($match['name'], $ÎlesInfos, $match['params']);

if($match) {
    $methodToCall = $match['name'];
    $controller->$methodToCall();
} else {
    $controller = new MainController('erreur');
    $controller->erreur();
}