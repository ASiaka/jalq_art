<main class="update">
    <?php 
        require_once __DIR__ . "/includes/nav.php";

        // On récupère l'article en cours
        if(isset($id)) {
            $filter_JalQart = array_filter($arrayInfos, function($value) use ($id) {
                if($value->id === (int) $id) {
                    return $value->id === (int) $id;
                } else {
                    return false;
                }
            });
        }
        if(!empty($filter_JalQart)) {
            // On retourne les valeurs du tableau en cours
            $JalQart = current(array_values($filter_JalQart));
        }
    ?>
    <div class="content">
        <p class="admin-title">Mise à jour</p>
        <form action="<?= $router->generate('update-post') ?>" method="POST" class="admin-update-content">
            <p class="admin-update-id">ID : <span class="admin-update-id-span"><?= $JalQart->id ?></span></p>
            <label class="admin-update-label">
                Titre
                <input type="text" name="title" value="<?= $JalQart->titre ?>" required class="admin-update-input">
            </label>
            <label class="admin-update-label">
                Sous-titre
                <input type="text" name="sous-titre" value="<?= $JalQart->sous_titre ?>" required class="admin-update-input">
            </label>
            <label class="admin-update-label">
                Description
                <textarea type="text" name="description" required class="admin-update-description"><?= $JalQart->description ?></textarea>
            </label>
            <div class="admin-update-buttons">
                <button type="reset" class="admin-update-annuler">Annuler</button>
                <button type="submit" class="admin-update-confirmer">Confirmer</button>
            </div>
        </form>
    </div>
</main>