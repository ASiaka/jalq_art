<?php

use JalQart\Utils\Database;

class ÎlesInfos {
    private $id;
    private $titre;
    private $contenu;
    private $date_creation;
    private $nom_img;

    function findAll() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `ÎlesInfos` ORDER BY `date_creation` DESC';
        $pdoStatement = $databaseConnection->query($sql);
        $ÎlesInfos = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        return $ÎlesInfos;
    }
}