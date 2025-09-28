<main class="accueil">
    <div class="title_content">
        <h1 class="title">Juzur al-qamar</h1>
        <p class="subtitle">Les îles de la lune</p>
    </div>
    <div class="apropos_content">
        <div class="apropos_description_bloc">
        <p class="apropos_title">JUZUR ALQAMART</p>
        <p class="apropos_description">
           Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
           Et pariatur dignissimos quaerat aspernatur atque consectetur at voluptatum veritatis.
           Magnam necessitatibus nam inventore amet hic ipsa perspiciatis facere, quam illo molestias!
        </p>
    </div>
    <div class="apropos_image">
        
    </div>
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
</main>
