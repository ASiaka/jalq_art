<?php

class MainController {
    public $articles;
    public $page;

    public function __construct($page, $articles) {
        $this->page = $page;
        $this->articles = $articles;
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
        $this->show($this->page, $this->articles);
    }
    public function erreur() {
        $this->show("404");
    }

    private function show($page, $articles = []) {
        require_once __DIR__ . "/../includes/header.php";
        require_once __DIR__ . "/../views/" . $page . ".php";
        require_once __DIR__ . "/../includes/footer.php";
    }
}