<?php
    if (!isset($_SESSION['userId'])) {
        header('Location: ' . $router->generate('user-login'));
        exit;
    }
?>
<main class="delete">
    <?php 
        require_once __DIR__ . "/includes/nav.php";

        // Génération du token
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        extract($arrayInfos);
    ?>
    <div class="content">
        <p class="admin-title">Suppression</p>
        <div class="admin-realisations">
            <p class="admin-realisations-id">ID</p>
            <p class="admin-realisations-title">TITLE</p>
        </div>
        <form action="" method="POST" class="admin-realisations-content">
            <?php foreach($JalQartInfos as $infos) : ?>

                <div class="admin-realisation-content">
                    <p class="admin-realisation-id"><?= $infos->id ?></p>
                    <p class="admin-realisation-title"><?= $infos->titre ?></p>
                    <input type="checkbox" name="<?= $infos->id ?>" value="<?= $infos->id ?>" class="admin-checkbox">
                </div>

            <?php endforeach ?>

            <!-- Protection CSRF -->
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">

            <div class="admin-delete-buttons">
                <button type="reset" class="admin-delete-annuler">Annuler</button>
                <button type="submit" class="admin-delete-confirmer">Confirmer</button>
            </div>
            <div class="validation-message">
                <?php foreach($errors as $info) :?>
                    <p><?= $info ? "---> " . $info . " <---" : "" ?></p>
                <?php endforeach ?>
            </div>
        </form>
    </div>
</main>