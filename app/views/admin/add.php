<main class="add">
    <?php 
        require_once __DIR__ . "/includes/nav.php";
    ?>
    <div class="content">
        <p class="admin-title">Ajout</p>
        <form action="" method="POST" class="admin-add-content">
            <label class="admin-add-label">
                Titre *
                <input type="text" name="title" required class="admin-add-input">
            </label>
            <label class="admin-add-label">
                Sous-titre *
                <input type="text" name="sous-titre" required class="admin-add-input">
            </label>
            <label class="admin-add-label">
                Description *
                <textarea type="text" name="description" required class="admin-add-description"></textarea>
            </label>
            <div class="admin-add-buttons">
                <button type="button" class="admin-add-annuler">Annuler</button>
                <button type="submit" class="admin-add-confirmer">Confirmer</button>
            </div>
        </form>
    </div>
</main>