<main class="update">
    <?php 
        require_once __DIR__ . "/includes/nav.php";
    ?>
    <div class="content">
        <p class="admin-title">Mise à jour</p>
        <form action="" method="POST" class="admin-update-content">
            <label class="admin-update-label">
                Titre
                <input type="text" name="title" value="JalQart CL/E" required class="admin-update-input">
            </label>
            <label class="admin-update-label">
                Sous-titre
                <input type="text" name="sous-titre" value="Fond blanc" required class="admin-update-input">
            </label>
            <label class="admin-update-label">
                Description
                <textarea type="text" name="description" required class="admin-update-description">Représentation des îles de la lune dans un fond blanc, éclairée par la lune.</textarea>
            </label>
            <div class="admin-update-buttons">
                <button type="button" class="admin-update-annuler">Annuler</button>
                <button type="submit" class="admin-update-confirmer">Confirmer</button>
            </div>
        </form>
    </div>
</main>