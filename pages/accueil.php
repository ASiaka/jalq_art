<main class="accueil">
    <div class="title_content">
        <h1 class="title">Juzur al-qamar</h1>
        <p class="subtitle">Les îles de la lune</p>
    </div>

    <div class="articles">
    <?php foreach ($articles as $article): ?>
        <article class="article">
            <h2 class="article_titre"><?= htmlspecialchars($article['titre']) ?></h2>
            <p class="article_paragraphe"><?= substr(htmlspecialchars($article['contenu']), 0, 70) ?>...</p>
            <a href="index.php?page=article&id=<?= $article['id'] ?>"  class="article_suite">Lire la suite</a>
        </article>
    <?php endforeach; ?>
    </div>

    <!-- <div class="decouvrir_content">
        <p class="decouvrir">Découvrir</p>
        <a href="index.php?page=apropos" class="fleche">&#9660;</a>
    </div> -->
</main>
