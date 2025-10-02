<?php
require '../app/views/includes/config.php';
$stmt = $pdo->query("SELECT * FROM articles ORDER BY date_creation DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Chargement des dépendances via autoload.php de composer
require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . "/../app/controllers/MainController.php";

$page = [
    '/' => 'accueil',
    '/realisations' => 'realisations',
    '/contact' => 'contact',
    '/article' => 'article',
];

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);
$router->map( 'GET', '/', ['/' => 'accueil'], 'home' );
$match = $router->match();

// var_dump() avec var_dumper
// dump($page);
// var_dump() & die avec var_dumper
// dd($page);

if(isset($_GET['_url'])) {
    // Page par défaut
    $currentPage = filter_input(INPUT_GET, '_url', FILTER_DEFAULT);
} else {
    $currentPage = '/';
}

// Page par défaut
// $currentPage = isset($_GET['page']) ? $_GET['page'] : 'accueil';

$controller = new MainController($page[$currentPage], $articles);

if(isset($page[$currentPage])) {
    $methodToCall = $page[$currentPage];
    $controller->$methodToCall();
} else {
    $controller->erreur();
}
?>