<?php
    if (!isset($_SESSION['userId'])) {
        header('Location: ' . $router->generate('user-login'));
        exit;
    }
?>
<main class="update">
    <?php 
        require_once __DIR__ . "/includes/nav.php";

        // Génération du token
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        
        extract($arrayInfos);

        // On récupère l'article en cours
        if(isset($id)) {
            $filter_JalQart = array_filter($JalQartInfos, function($value) use ($id) {
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
        <form action="<?= $router->generate('updateId-post', ['id' => $JalQart->id]) ?>" method="POST" class="admin-update-content">
            <p class="admin-update-id">ID : <span class="admin-update-id-span"><?= $JalQart->id ?></span></p>
            <!-- Champ caché -->
            <input type="hidden" name="id" value="<?= $JalQart->id ?>">

            <label class="admin-update-label">
                Titre
                <input type="text" name="titre" value="<?= $_POST['titre'] ?? $JalQart->titre ?>" required class="admin-update-input">
            </label>
            <label class="admin-update-label">
                Sous-titre
                <input type="text" name="sous_titre" value="<?= $_POST['sous_titre'] ?? $JalQart->sous_titre ?>" required class="admin-update-input">
            </label>
            <label class="admin-update-label">
                Description
                <textarea type="text" name="description" required class="admin-update-description"><?= $_POST['description'] ?? $JalQart->description ?></textarea>
            </label>

            <!-- Protection CSRF -->
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">

            <div class="admin-update-buttons">
                <button type="reset" class="admin-update-annuler">Annuler</button>
                <button type="submit" class="admin-update-confirmer">Confirmer</button>
            </div>
        </form>
        <div class="validation-message">
            <?php foreach($errors as $info) :?>
                <p><?= $info ? "---> " . $info . " <---" : "" ?></p>
            <?php endforeach ?>
        </div>
    </div>
</main>