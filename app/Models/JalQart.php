<?php

namespace JalQart\Models;
use JalQart\Utils\Database;

class JalQart {
    private $id;
    private $titre;
    private $sous_titre;
    private $description;

    function findAll() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `jalqart` ORDER BY `id` ASC';
        $pdoStatement = $databaseConnection->query($sql);
        $JalQart = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $JalQart;
    }
}