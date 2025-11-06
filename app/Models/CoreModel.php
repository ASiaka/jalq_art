<?php

namespace JalQart\Models;

abstract class CoreModel {

    abstract public static function find($id);
    abstract public static function findAll();
}