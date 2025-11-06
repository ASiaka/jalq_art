<?php

namespace JalQart\Models;
use JalQart\Models\CoreModel;
use JalQart\Utils\Database;

class AppUser extends CoreModel {
    private $id;
    private $email;
    private $password;
    private $firstname;
    private $lastname;
    private $role;
    private $status;
    private $create_at;
    private $update_at;

    public static function find($email) {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `app_user` WHERE email = :email';
        $pdoStatement = $databaseConnection->prepare($sql);
        $pdoStatement->execute([
            ':email' => $email,
        ]);
        $result = $pdoStatement->fetchObject(static::class);
        return $result;
    }
    public static function findAll() {
        $databaseConnection = DataBase::getPDO();
        $sql = 'SELECT * FROM `app_user` ORDER BY `id` ASC';
        $pdoStatement = $databaseConnection->query($sql);
        $IlesInfos = $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
        return $IlesInfos;
    }

    public function getPassword() {
        return $this->password;
    }
    public function getId() {
        return $this->id;
    }
}