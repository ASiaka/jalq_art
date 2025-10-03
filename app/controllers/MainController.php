<?php

class MainController {
    public $page;
    public $articles;
    public $id;

    public function __construct($page, $articles = [], $id = null) {
        $this->page = $page;
        $this->articles = $articles;
        $this->id = $id;
    }

    public function accueil() {
        $this->show($this->page, $this->articles);
    }
    public function realisations() {
        $this->show($this->page);
    }
    public function contact() {
        $this->show($this->page);
    }
    public function article() {
        $this->show($this->page, $this->articles, $this->id);
    }
    public function erreur() {
        $this->show("404");
    }

    private function show($page, $articles = [], $id = null) {
        $baseUri = $_SERVER['BASE_URI'];
        
        require_once __DIR__ . "/../views/includes/header.php";
        require_once __DIR__ . "/../views/" . $page . ".php";
        require_once __DIR__ . "/../views/includes/footer.php";
    }
}