<?php

namespace JalQart\Controllers\Front;

abstract class CoreController {
    protected function show($page, $arrayInfos = [], $id = null) {
        $baseUri = $_SERVER['BASE_URI'];

        require_once __DIR__ . "/../../views/front/includes/header.php";
        require_once __DIR__ . "/../../views/front/" . $page . ".php";
        require_once __DIR__ . "/../../views/front/includes/footer.php";
    }
}