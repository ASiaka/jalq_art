<?php

class MainController {
    public $page;
    public $ÎlesInfos;
    public $id;

    public function __construct($page, $ÎlesInfos = [], $id = null) {
        $this->page = $page;
        $this->ÎlesInfos = $ÎlesInfos;
        $this->id = $id;
    }

    public function accueil() {
        $this->show($this->page, $this->ÎlesInfos);
    }
    public function realisations() {
        $this->show($this->page);
    }
    public function contact() {
        $this->show($this->page);
    }
    public function article() {
        $this->show($this->page, $this->ÎlesInfos, $this->id);
    }
    public function erreur() {
        $this->show("404");
    }

    private function show($page, $ÎlesInfos = [], $id = null) {
        $baseUri = $_SERVER['BASE_URI'];
        
        require_once __DIR__ . "/../views/includes/header.php";
        require_once __DIR__ . "/../views/" . $page . ".php";
        require_once __DIR__ . "/../views/includes/footer.php";
    }
}