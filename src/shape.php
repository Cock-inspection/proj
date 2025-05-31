<?php
namespace Chel\App;
abstract class Shape{
    protected static int $count = 0;

    public function __construct()
    {
        static::$count++;
    }

    abstract function getarea():float;
    public function getcount(): int{
        return static::$count;
    }
}

