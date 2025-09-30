<?php
$realisations = [
    [
        "img" => "JalQL.png",
        "title" => "JalQ L",
        "subtitle" => "Fond blanc",
        "description" => "Représentation des îles de la lune dans un fond blanc, éclairée par la lune."
    ],
    [
        "img" => "JalQCL.png",
        "title" => "JalQ CL",
        "subtitle" => "Fond blanc",
        "description" => "Représentation des îles de la lune dans un fond blanc, éclairée par le croissant de lune."
    ],
    [
        "img" => "JalQLE.png",
        "title" => "JalQ L/E",
        "subtitle" => "Fond blanc étoilé",
        "description" => "Représentation des îles de la lune dans un fond blanc étoilé, éclairée par la lune."
    ],
    [
        "img" => "JalQCLE.png",
        "title" => "JalQ CL/E",
        "subtitle" => "Fond blanc étoilé",
        "description" => "Représentation des îles de la lune dans un fond blanc étoilé, éclairée par le croissant de lune."
    ],
];
?>

<main class="realisations">
    <h3 class="realisations_title">Réalisations JalQ<span class="art">art</span></h3>
    <p class="realisations_subtitle">Vous trouverez ici toutes nos réalisations.</p>
    <div class="realisations_content">
        <?php foreach ($realisations as $realisation) : ?>
            <div class="realisation">
                <div class="realisation_img"></div>
                <p class="realisation_title"><?= $realisation["title"] ?></p>
                <p class="realisation_subtitle"><?= $realisation["subtitle"] ?></p>
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