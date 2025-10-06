<main class="accueil">
    <div class="apropos_content">
        <div class="apropos_description_bloc">
            <p class="apropos_title">Juzur alQam<span class="apropos_art">art</span></p>
            <p class="apropos_description">
                Juzur Al-Qamart est une marque artistique dont le nom vient de l&apos;arabe جزر القمر,
                signifiant « les îles de la Lune », en référence à l&apos;archipel des Comores.
                À travers des réalisations artistiques — telles que des toiles,
                des t-shirts et d'autres supports créatifs — la marque célèbre l&apos;amour des quatre îles et l'attachement à leurs origines profondes.
                Chaque création vise à mettre en lumière la richesse culturelle et la beauté naturelle des Comores,
                en proposant une vision artistique empreinte de fierté, d&apos;identité et d&apos;héritage.
            </p>
        </div>
        <div class="apropos_image">
            
        </div>
    </div>
    <div class="title_content">
        <h1 class="title">Juzur al-qamar</h1>
        <p class="subtitle">Les îles de la lune</p>
        <p class="description">
            Les Comores sont un archipel volcanique de l&apos;océan Indien,
            situé entre l&apos;Afrique de l&apos;Est et Madagascar.
            Il comprend quatre îles principales : Ngazidja, Mohéli, Anjouan et Mayotte.
            L&apos;archipel est reconnu pour sa diversité culturelle, ses plages,
            ses volcans et sa riche biodiversité marine.
        </p>
    </div>
    <div class="articles">
        <?php foreach ($ÎlesInfos as $île): ?>
            <article class="article">
                <h2 class="article_titre"><?= htmlspecialchars($île['titre']) ?></h2>
                <p class="article_paragraphe"><?= substr(htmlspecialchars($île['contenu']), 0, 70) ?>...</p>
                <a href="./article/<?= $île['id'] ?>"  class="article_suite">Lire la suite</a>
            </article>
        <?php endforeach; ?>
    </div>
</main>
