<main class="dashboard">
    <?php 
        require_once __DIR__ . "/includes/nav.php";
    ?>
    <div class="content">
        <p class="admin-title">List des réalisations</p>
        <div class="admin-realisations">
            <p class="admin-realisations-id">ID</p>
            <p class="admin-realisations-title">TITLE</p>
            <a href="<?= $baseUri ?>/admin/add" class="admin-realisations-link"><i class="fa-solid fa-square-plus fa-2x"></i></a>
        </div>
        <div class="admin-realisations-content">
            <div class="admin-realisation-content">
                <p class="admin-realisation-id">1</p>
                <p class="admin-realisation-title">JalQart L</p>
                <a href="<?= $baseUri ?>/admin/update" class="admin-realisation-link"><i class="fa-solid fa-square-pen fa-2x"></i></a>
                <a href="<?= $baseUri ?>/admin/delete" class="admin-realisation-link"><i class="fa-solid fa-square-minus fa-2x"></i></a>
            </div>
            <div class="admin-realisation-content">
                <p class="admin-realisation-id">2</p>
                <p class="admin-realisation-title">JalQart CL</p>
                <a href="<?= $baseUri ?>/admin/update" class="admin-realisation-link"><i class="fa-solid fa-square-pen fa-2x"></i></a>
                <a href="<?= $baseUri ?>/admin/delete" class="admin-realisation-link"><i class="fa-solid fa-square-minus fa-2x"></i></a>
            </div>
            <div class="admin-realisation-content">
                <p class="admin-realisation-id">3</p>
                <p class="admin-realisation-title">JalQart CL/E</p>
                <a href="<?= $baseUri ?>/admin/update" class="admin-realisation-link"><i class="fa-solid fa-square-pen fa-2x"></i></a>
                <a href="<?= $baseUri ?>/admin/delete" class="admin-realisation-link"><i class="fa-solid fa-square-minus fa-2x"></i></a>
            </div>
        </div>
    </div>
</main>