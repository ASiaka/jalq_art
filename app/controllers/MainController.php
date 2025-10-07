<?php

namespace JalQart\Controllers;
use JalQart\Models\IlesInfos;
use JalQart\Models\JalQart;

class MainController extends CoreController {
    
    public function accueil($arrayMatch) {
        $instanceIlesInfos = new IlesInfos();
        $IlesInfos = $instanceIlesInfos->findAll();

        $this->show($arrayMatch['name'], $IlesInfos);
    }
    public function realisations($arrayMatch) {
        $instanceJalQart = new JalQart();
        $JalQart = $instanceJalQart->findAll();

        $this->show($arrayMatch['name'], $JalQart);
    }
    public function contact($arrayMatch) {
        $this->show($arrayMatch['name']);
    }
    public function article($arrayMatch) {
        $instanceIlesInfos = new IlesInfos();
        $IlesInfos = $instanceIlesInfos->findAll();

        $this->show($arrayMatch['name'], $IlesInfos, $arrayMatch['params']['id']);
    }
    public function erreur() {
        $this->show("404");
    }
}