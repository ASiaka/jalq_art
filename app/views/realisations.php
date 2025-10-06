<main class="realisations">
    <h3 class="realisations_title">Réalisations JalQ<span class="art">art</span></h3>
    <p class="realisations_subtitle">Vous trouverez ici toutes nos réalisations.</p>
    <div class="realisations_content">
        <?php foreach ($arrayInfos as $realisation) : ?>
            <div class="realisation">
                <div class="realisation_img"></div>
                <p class="realisation_title"><?= $realisation["titre"] ?></p>
                <p class="realisation_subtitle"><?= $realisation["sous_titre"] ?></p>
                <p class="realisation_description"><?= $realisation["description"] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="realisations_info">
        <p class="realisations_info_title">Plus d'info sur :</p>
        <div class="realisations_info_reseaux">
            <a href="#" class="realisations_link_reseau"><i class="fa-brands fa-square-instagram fa-2x"></i></a>
            <a href="#" class="realisations_link_reseau"><i class="fa-brands fa-square-whatsapp fa-2x"></i></a>
            <a href="#" class="realisations_link_reseau"><i class="fa-brands fa-telegram fa-2x"></i></a>
        </div>
    </div>
</main>