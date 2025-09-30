<?php
require 'includes/config.php';
$stmt = $pdo->query("SELECT * FROM articles ORDER BY date_creation DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . "/controllers/MainController.php";

$page = [
    'accueil' => 'accueilMethod',
    'realisations' => 'realisationsMethod',
    'contact' => 'contactMethod',
    'article' => 'articleMethod',
];

if(isset($_GET['page'])) {
    // Page par défaut
    $currentPage = filter_input(INPUT_GET, 'page', FILTER_DEFAULT);
} else {
    $currentPage = 'accueil';
}

// Page par défaut
// $currentPage = isset($_GET['page']) ? $_GET['page'] : 'accueil';

$controller = new MainController($currentPage, $articles);

if(isset($page[$currentPage])) {
    $methodToCall = $page[$currentPage];
    $controller->$methodToCall();
} else {
    $controller->erreurMethod();
}
?>