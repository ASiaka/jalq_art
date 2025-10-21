<?php

namespace JalQart\Controllers\Admin;
use JalQart\Models\IlesInfos;
use JalQart\Models\JalQart;

class AdminController {
    
    public function login($arrayMatch) {
        $this->show($arrayMatch['target']['method']);
    }
    public function dashboard($arrayMatch) {
        $this->show($arrayMatch['target']['method']);
    }
    public function update($arrayMatch) {
        $this->show($arrayMatch['target']['method']);
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

    protected function show($page) {
        $baseUri = $_SERVER['BASE_URI'];

        require_once __DIR__ . "/../../views/front/includes/header.php";
        require_once __DIR__ . "/../../views/admin/" . $page . ".php";
        require_once __DIR__ . "/../../views/front/includes/footer.php";
    }
}