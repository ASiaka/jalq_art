<?php

namespace JalQart\Controllers\Admin;
use JalQart\Models\IlesInfos;
use JalQart\Models\JalQart;

class AdminController {
    
    public function login($arrayMatch) {
        $this->show($arrayMatch['name']);
    }
    public function dashboard($arrayMatch) {
        $this->show($arrayMatch['name']);
    }
    public function update($arrayMatch) {
        $this->show($arrayMatch['name']);
    }
    public function add($arrayMatch) {
        $this->show($arrayMatch['name']);
    }
    public function delete($arrayMatch) {
        $this->show($arrayMatch['name']);
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