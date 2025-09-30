<?php

class MainController {
    public $articles;
    public $page;

    public function __construct($page, $articles) {
        $this->page = $page;
        $this->articles = $articles;
    }

    public function accueilMethod() {
        $this->show($this->page, $this->articles);
    }
    public function realisationsMethod() {
        $this->show($this->page);
    }
    public function contactMethod() {
        $this->show($this->page);
    }
    public function articleMethod() {
        $this->show($this->page, $this->articles);
    }
    public function erreurMethod() {
        $this->show("404");
    }

    private function show($page, $articles = []) {
        require_once __DIR__ . "/../includes/header.php";
        require_once __DIR__ . "/../views/" . $page . ".php";
        require_once __DIR__ . "/../includes/footer.php";
    }
}