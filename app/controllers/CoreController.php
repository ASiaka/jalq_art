<?php

namespace JalQart\Controllers;

abstract class CoreController {
    protected function show($page, $arrayInfos = [], $id = null) {
        $baseUri = $_SERVER['BASE_URI'];
        
        require_once __DIR__ . "/../views/includes/header.php";
        require_once __DIR__ . "/../views/" . $page . ".php";
        require_once __DIR__ . "/../views/includes/footer.php";
    }
}