<?php

namespace JalQart\Models;
use JalQart\Utils\Database;

class IlesInfos {
    private $id;
    private $titre;
    private $contenu;
    private $date_creation;
    private $nom_img;

    function findAll() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `IlesInfos` ORDER BY `date_creation` DESC';
        $pdoStatement = $databaseConnection->query($sql);
        $IlesInfos = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $IlesInfos;
    }
}