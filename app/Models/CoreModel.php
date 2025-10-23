<?php

namespace JalQart\Models;

abstract class CoreModel {

    abstract public static function find($id);
    abstract public static function findAll();
    // abstract public static function insert();
    // abstract public static function update();
    // abstract public static function delete($id);
}