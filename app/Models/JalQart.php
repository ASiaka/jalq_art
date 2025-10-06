<?php

use JalQart\Utils\Database;

class JalQart {
    private $id;
    private $titre;
    private $sous_titre;
    private $description;

    function findAll() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `JalQart`';
        $pdoStatement = $databaseConnection->query($sql);
        $JalQart = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        return $JalQart;
    }
}