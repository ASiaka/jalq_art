<?php
// Chargement des dépendances via autoload.php de composer
require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
      'method' => 'accueil',
      'controller' => 'JalQart\Controllers\Front\MainController',
    ],
    'accueil'
);
$router->addRoutes(array(
  array(
    'GET',
    '/realisations',
    [
      'method' => 'realisations',
      'controller' => 'JalQart\Controllers\Front\MainController',
    ],
    'realisations'
  ),
  array(
    'GET',
    '/contact',
    [
      'method' => 'contact',
      'controller' => 'JalQart\Controllers\Front\MainController',
    ],
    'contact'
  ),
  array(
    'GET',
    '/article/[i:id]',
    [
      'method' => 'article',
      'controller' => 'JalQart\Controllers\Front\MainController',
    ],
    'article'
  ),

  //ROUTES ADMIN
  array(
    'GET',
    '/admin/login',
    [
      'method' => 'login',
      'controller' => 'JalQart\Controllers\Admin\AdminController',
    ],
    'login'
  ),
  array(
    'GET',
    '/admin',
    [
      'method' => 'dashboard',
      'controller' => 'JalQart\Controllers\Admin\AdminController',
    ],
    'dashboard'
  ),
  array(
    'GET',
    '/admin/update',
    [
      'method' => 'update',
      'controller' => 'JalQart\Controllers\Admin\AdminController',
    ],
    'update'
  ),
  array(
    'POST',
    '/admin/update',
    [
      'method' => 'update',
      'controller' => 'JalQart\Controllers\Admin\AdminController',
    ],
    'update-post'
  ),
  array(
    'GET',
    '/admin/add',
    [
      'method' => 'add',
      'controller' => 'JalQart\Controllers\Admin\AdminController',
    ],
    'add'
  ),
  array(
    'POST',
    '/admin/add',
    [
      'method' => 'add',
      'controller' => 'JalQart\Controllers\Admin\AdminController',
    ],
    'add-post'
  ),
  array(
    'GET',
    '/admin/delete',
    [
      'method' => 'delete',
      'controller' => 'JalQart\Controllers\Admin\AdminController',
    ],
    'delete'
  ),
  array(
    'POST',
    '/admin/delete',
    [
      'method' => 'delete',
      'controller' => 'JalQart\Controllers\Admin\AdminController',
    ],
    'delete-post'
  ),
));

$match = $router->match();

if( $match === false )
  {
    $erreurController = new JalQart\Controllers\Front\MainController('erreur');
    $erreurController->erreur();
    exit;
  }

$controllerToInstantiate = $match['target']['controller'];

$controller = new $controllerToInstantiate();

$methodToCall = $match['target']['method'];
// $methodToCall = $match['name'];

$controller->$methodToCall($match);