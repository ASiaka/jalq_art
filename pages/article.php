<?php
// On récupère l'article en cours
$filter_article = array_filter($articles, function($value) {
    return $value["id"] === (int) $_GET['id'];
});
// On retourne les valeurs du tableau en cours
$article = current(array_values($filter_article));
// var_dump($article);
?>

<div class="article_complet">
    <article class="article_complet_bloc">
        <div class="article_complet_image">

        </div>
        <div class="article_complet_description_bloc">
            <p class="article_complet_titre"><?= $article['titre'] ?></p>
            <p
                class="article_complet_description"><?= $article['contenu'] ?></p>
            <a href="index.php?page=accueil" class="article_complet_retour">Retour</a>
        </div>
    </article>
</div>