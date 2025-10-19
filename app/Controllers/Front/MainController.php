<?php

namespace JalQart\Controllers\Front;
use JalQart\Models\IlesInfos;
use JalQart\Models\JalQart;

class MainController extends CoreController {
    
    public function accueil($arrayMatch) {
        $IlesInfos =IlesInfos::findAll();

        $this->show($arrayMatch['name'], $IlesInfos);
    }
    public function realisations($arrayMatch) {
        $JalQart = JalQart::findAll();

        $this->show($arrayMatch['name'], $JalQart);
    }
    public function contact($arrayMatch) {
        $this->show($arrayMatch['name']);
    }
    public function article($arrayMatch) {
        $IlesInfos = IlesInfos::findAll();

        $this->show($arrayMatch['name'], $IlesInfos, $arrayMatch['params']['id']);
    }
    public function erreur() {
        $this->show("404");
    }
}