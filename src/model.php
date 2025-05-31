<?php
namespace Chel\App;
abstract class Model{
    protected static string $tableName;
    abstract public static function save(): bool;
    public static function gettableName():string{
        return static::$tableName;
    }
};