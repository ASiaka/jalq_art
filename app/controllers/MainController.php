<?php
class MainController extends CoreController {
    
    public function accueil($arrayMatch) {
        $instanceÎlesInfos = new ÎlesInfos();
        $ÎlesInfos = $instanceÎlesInfos->findAll();

        $this->show($arrayMatch['name'], $ÎlesInfos);
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
        $instanceÎlesInfos = new ÎlesInfos();
        $ÎlesInfos = $instanceÎlesInfos->findAll();

        $this->show($arrayMatch['name'], $ÎlesInfos, $arrayMatch['params']['id']);
    }
    public function erreur() {
        $this->show("404");
    }
}