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
        
    }

    public static function findAll() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT `id`, `titre`, `contenu` FROM `ilesinfos` ORDER BY `id` ASC';
        $pdoStatement = $databaseConnection->query($sql);
        $IlesInfos = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $IlesInfos;
    }

    public static function insert() {

    }
    public static function update() {

    }
    public static function delete($id) {

    }
}