<?php
// On récupère l'article en cours
if(isset($id)) {
    $filter_articles = array_filter($ÎlesInfos, function($value) use ($id) {
        if($value["id"] === (int) $id['id']) {
            return $value["id"] === (int) $id['id'];
        } else {
            return false;
        }
    });
?>
        <div class="article_complet">
            <article class="article_complet_bloc">
<?php
    if(!empty($filter_articles)) {
        // On retourne les valeurs du tableau en cours
        $île = current(array_values($filter_articles));
?>
                <div class="article_complet_image">
        
                </div>
                <div class="article_complet_description_bloc">
                    <p class="article_complet_titre"><?= $île['titre'] ?></p>
                    <p
                        class="article_complet_description"><?= $île['contenu'] ?></p>
                    <a href=<?= $baseUri ?> class="article_complet_retour">Retour</a>
                </div>
<?php 
    } else {
?>
        <p class="article_introuvable">Article introuvable.</p>
<?php
    }
}
?>
            </article>
        </div>
