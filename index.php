<?php
require 'includes/config.php';
$stmt = $pdo->query("SELECT * FROM articles ORDER BY date_creation DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . "/controllers/MainController.php";

$page = [
    '/' => 'accueil',
    '/realisations' => 'realisations',
    '/contact' => 'contact',
    '/article' => 'article',
];

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