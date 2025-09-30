<?php
require 'includes/config.php';
$stmt = $pdo->query("SELECT * FROM articles ORDER BY date_creation DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . "/controllers/MainController.php";

if(isset($_GET['page'])) {
    // Page par défaut
    $currentPage = filter_input(INPUT_GET, 'page', FILTER_DEFAULT);
} else {
    $currentPage = 'accueil';
}

// Page par défaut
// $currentPage = isset($_GET['page']) ? $_GET['page'] : 'accueil';

$controller = new MainController($currentPage, $articles);

if($currentPage === 'accueil') {
    $controller->accueil();
} else if($currentPage === 'realisations') {
    $controller->realisations();
} else if($currentPage === 'contact') {
    $controller->contact();
} else if($currentPage === 'article') {
    $controller->article();
} else {
    $controller->erreur();
}
?>