<main class="delete">
    <?php 
        require_once __DIR__ . "/includes/nav.php";
    ?>
    <div class="content">
        <p class="admin-title">Suppression</p>
        <div class="admin-realisations">
            <p class="admin-realisations-id">ID</p>
            <p class="admin-realisations-title">TITLE</p>
            <input type="checkbox" id="selectAll" name="selectAll" value="All" class="admin-checkboxAll">
        </div>
        <form action="" method="POST" class="admin-realisations-content">
            <div class="admin-realisation-content">
                <p class="admin-realisation-id">1</p>
                <p class="admin-realisation-title">JalQart L</p>
                <input type="checkbox" id="one" name="one" value="1" class="admin-checkbox">
            </div>
            <div class="admin-realisation-content">
                <p class="admin-realisation-id">2</p>
                <p class="admin-realisation-title">JalQart CL</p>
                <input type="checkbox" id="two" name="two" value="2" class="admin-checkbox">
            </div>
            <div class="admin-realisation-content">
                <p class="admin-realisation-id">3</p>
                <p class="admin-realisation-title">JalQart CL/E</p>
                <input type="checkbox" id="three" name="three" value="3" class="admin-checkbox">
            </div>
            <div class="admin-delete-buttons">
                <button type="button" class="admin-delete-annuler">Annuler</button>
                <button type="submit" class="admin-delete-confirmer">Confirmer</button>
            </div>
        </form>
    </div>
</main>