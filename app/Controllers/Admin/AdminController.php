<?php

namespace JalQart\Controllers\Admin;
use JalQart\Models\IlesInfos;
use JalQart\Models\JalQart;

class AdminController {
    
    public function login($arrayMatch) {
        $this->show($arrayMatch['target']['method']);
    }
    public function dashboard($arrayMatch) {
        $arrayInfos = JalQart::findAll();
        
        $this->show($arrayMatch['target']['method'], $arrayInfos);
    }
    public function update($arrayMatch) {
        $arrayInfos = JalQart::findAll();

        $this->show($arrayMatch['target']['method'], $arrayInfos, $arrayMatch['params']['id']);
    }
    public function add($arrayMatch) {
        $this->show($arrayMatch['target']['method']);
    }
    public function delete($arrayMatch) {
        $this->show($arrayMatch['target']['method']);
    }
    // public function erreur() {
    //     $this->show("404");
    // }

    private function show($page, $arrayInfos = [], $id = null) {
        global $router;
        $baseUri = $_SERVER['BASE_URI'];

        require_once __DIR__ . "/../../views/front/includes/header.php";
        require_once __DIR__ . "/../../views/admin/" . $page . ".php";
        require_once __DIR__ . "/../../views/front/includes/footer.php";
    }
}