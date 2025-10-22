<main class="dashboard">
    <?php 
        require_once __DIR__ . "/includes/nav.php";
    ?>
    <div class="content">
        <p class="admin-title">List des réalisations</p>
        <div class="admin-realisations">
            <p class="admin-realisations-id">ID</p>
            <p class="admin-realisations-title">TITLE</p>
            <a href="<?= $router->generate('add') ?>" class="admin-realisations-link"><i class="fa-solid fa-square-plus fa-2x"></i></a>
        </div>
        <div class="admin-realisations-content">
            <?php foreach($arrayInfos as $infos) : ?>
            
                <div class="admin-realisation-content">
                    <p class="admin-realisation-id"><?= $infos->id ?></p>
                    <p class="admin-realisation-title"><?= $infos->titre ?></p>
                    <a href="<?= $router->generate('update', ['id' => $infos->id]) ?>" class="admin-realisation-link"><i class="fa-solid fa-square-pen fa-2x"></i></a>
                    <a href="<?= $baseUri ?>/admin/delete" class="admin-realisation-link"><i class="fa-solid fa-square-minus fa-2x"></i></a>
                </div>

            <?php endforeach ?>
        </div>
    </div>
</main>