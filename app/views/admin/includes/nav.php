<nav class="admin-nav">
    <p class="admin-title">BACKOFFICE</p>
    <ul class="nav-lists">
        <li class="nav-list">
            <a href="<?= $baseUri ?>/admin" class="nav-link <?= isset($_GET['_url']) && $_GET['_url'] === "/admin" ? "active-link" : "" ?>">
                <i class="fa-solid fa-house-user fa-2x"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-list">
            <a href="<?= $baseUri ?>/admin/update/1" class="nav-link <?= isset($_GET['_url']) && $_GET['_url'] === "/admin/update" ? "active-link" : "" ?>">
                <i class="fa-solid fa-square-pen fa-2x"></i>
                Update
            </a>
        </li>
        <li class="nav-list">
            <a href="<?= $baseUri ?>/admin/add" class="nav-link <?= isset($_GET['_url']) && $_GET['_url'] === "/admin/add" ? "active-link" : "" ?>">
                <i class="fa-solid fa-square-plus fa-2x"></i>
                Add
            </a>
        </li>
        <li class="nav-list">
            <a href="<?= $baseUri ?>/admin/delete" class="nav-link <?= isset($_GET['_url']) && $_GET['_url'] === "/admin/delete" ? "active-link" : "" ?>">
                <i class="fa-solid fa-square-minus fa-2x"></i>
                Delete
            </a>
        </li>
    </ul>
    <button class="logout-button">
        <i class="fa-solid fa-right-from-bracket"></i>
        Log out
    </button>
</nav>