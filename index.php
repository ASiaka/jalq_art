<?php
require 'includes/config.php';
$stmt = $pdo->query("SELECT * FROM articles ORDER BY date_creation DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// HEADER
include './includes/header.php';

// PAGE
// Page par défaut
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
// Fichier à inclure
$fichier = "pages/" . $page . ".php";
// Vérifie que le fichier existe avant de l'inclure
if(file_exists($fichier)) {
    require __DIR__ . "/" . $fichier;
} else {
    require  __DIR__ . "/pages/404.php";
}

// FOOTER
include './includes/footer.php';
?>
