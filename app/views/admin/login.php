<main class="login">
    <?php
        // Génération du token
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    ?>
    <div class="content">
        <p class="admin-login-title">Connexion</p>

        <?php if (!empty($_SESSION['flash_error'])): ?>
            <p class="error"><?= htmlspecialchars($_SESSION['flash_error']) ?></p>
            <?php unset($_SESSION['flash_error']); ?>
        <?php endif; ?>

        <form action="<?= $router->generate('user-login-post') ?>" method="POST" class="admin-login-form">
            <label class="admin-login-label">
                Username *
                <input type="text" name="username" autocomplete="off" required class="admin-login-username">
            </label>
            <label class="admin-login-label">
                Password *
                <input type="password" name="password" autocomplete="off" required class="admin-login-password">
            </label>
            <!-- Protection CSRF -->
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">

            <button type="submit" class="admin-login-connexion">Connexion</button>
        </form>
        <div class="validation-message">
            <?php foreach($arrayInfos as $info) :?>
                <p><?= $info ? "---> " . $info . " <---" : "" ?></p>
            <?php endforeach ?>
        </div>
    </div>
</main>