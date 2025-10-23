<?php

namespace JalQart\Models;
use JalQart\Models\CoreModel;
use JalQart\Utils\Database;

class JalQart extends CoreModel {
    public $id;
    public $titre;
    public $sous_titre;
    public $description;

    public static function find($id) {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `jalqart` WHERE id = :id';
        $pdoStatement = $databaseConnection->prepare($sql);
        $pdoStatement->execute([
            ':id' => $id,
        ]);
        $result = $pdoStatement->fetchObject(static::class);
        return $result;
    }

    public static function findAll() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `jalqart` ORDER BY `id` ASC';
        $pdoStatement = $databaseConnection->query($sql);
        $result = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, static::class);
        return $result;
    }

    public function insert() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'INSERT INTO `jalqart` (`titre`, `sous_titre`, `description`) VALUES (:titre, :sous_titre, :description)';
        $pdoStatement = $databaseConnection->prepare($sql);
        $pdoStatement->execute([
            ':titre' => $this->titre,
            ':sous_titre' => $this->sous_titre,
            ':description' => $this->description,
        ]);
    }

    public function update() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'UPDATE `jalqart` SET titre = :titre, sous_titre = :sous_titre, description = :description WHERE id = :id';
        $pdoStatement = $databaseConnection->prepare($sql);
        $pdoStatement->execute([
            ':id' => 10,
            ':titre' => 'test1',
            ':sous_titre' => 'le test1',
            ':description' => 'test1 description',
        ]);
    }
    
    public function delete($id) {
        $databaseConnection = DataBase::getPDO();
        $sql = 'DELETE FROM `jalqart` WHERE id = :id';
        $pdoStatement = $databaseConnection->prepare($sql);
        $pdoStatement->execute([
            ':id' => $id,
        ]);
    }
}