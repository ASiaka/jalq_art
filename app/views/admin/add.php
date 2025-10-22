<main class="add">
    <?php 
        require_once __DIR__ . "/includes/nav.php";
    ?>
    <div class="content">
        <p class="admin-title">Ajout</p>
        <form action="<?= $router->generate('add-post') ?>" method="POST" class="admin-add-content">
            <label class="admin-add-label">
                Titre *
                <input type="text" name="title" value="<?= $_POST['title'] ?? '' ?>" required class="admin-add-input">
            </label>
            <label class="admin-add-label">
                Sous-titre *
                <input type="text" name="sous-titre" value="<?= $_POST['sous-titre'] ?? '' ?>" required class="admin-add-input">
            </label>
            <label class="admin-add-label">
                Description *
                <textarea type="text" name="description" required class="admin-add-description"><?= $_POST['description'] ?? '' ?></textarea>
            </label>
            <div class="admin-add-buttons">
                <a href="<?= $router->generate('dashboard') ?>">
                    <button type="button" class="admin-add-annuler">Annuler</button>
                </a>
                <button type="submit" class="admin-add-confirmer">Confirmer</button>
            </div>
        </form>
    </div>
</main>