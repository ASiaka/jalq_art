<main class="add">
    <?php 
        require_once __DIR__ . "/includes/nav.php";
        
        // Génération du token
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    ?>
    <div class="content">
        <p class="admin-title">Ajout</p>
        <form action="<?= $router->generate('add-post') ?>" method="POST" class="admin-add-content">
            <label class="admin-add-label">
                Titre *
                <input type="text" name="titre" value="<?= $_POST['titre'] ?? '' ?>" required class="admin-add-input">
            </label>
            <label class="admin-add-label">
                Sous-titre *
                <input type="text" name="sous_titre" value="<?= $_POST['sous_titre'] ?? '' ?>" required class="admin-add-input">
            </label>
            <label class="admin-add-label">
                Description *
                <textarea type="text" name="description" required class="admin-add-description"><?= $_POST['description'] ?? '' ?></textarea>
            </label>

            <!-- Protection CSRF -->
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
            
            <div class="admin-add-buttons">
                <a href="<?= $router->generate('dashboard') ?>">
                    <button type="button" class="admin-add-annuler">Annuler</button>
                </a>
                <button type="submit" class="admin-add-confirmer">Confirmer</button>
            </div>
        </form>
        <div class="add-message">
            <?php foreach($arrayInfos as $info) :?>
                <p><?= $info ? "---> " . $info . " <---" : "" ?></p>
            <?php endforeach ?>
        </div>
    </div>
</main>