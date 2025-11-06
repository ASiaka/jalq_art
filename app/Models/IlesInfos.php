<?php

namespace JalQart\Models;
use JalQart\Models\CoreModel;
use JalQart\Utils\Database;

class IlesInfos extends CoreModel {
    private $id;
    private $titre;
    private $contenu;
    private $nom_img;

    public static function find($id) {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `ilesinfos` WHERE id = :id';
        $pdoStatement = $databaseConnection->prepare($sql);
        $pdoStatement->execute([
            ':id' => $id,
        ]);
        $result = $pdoStatement->fetchObject(static::class);
        return $result;
    }

    public static function findAll() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `ilesinfos` ORDER BY `id` ASC';
        $pdoStatement = $databaseConnection->query($sql);
        $IlesInfos = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $IlesInfos;
    }
}