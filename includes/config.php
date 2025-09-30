<?php
$dataSource ='mysql:host=localhost;dbname=jalq_art';
$user = 'root';
$pass = '';
$options = array(
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
);

try {
    $pdo = new PDO(
        $dataSource,
        $user,
        $pass,
        $options
    );
} catch (PDOException $exception) {
    echo 'La connexion à la base de données a échoué,
          veuillez contacter un administrateur';
    echo $exception->getMessage();
}