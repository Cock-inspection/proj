<?php
namespace Chel\App;
trait Printable
{
    public function printinfo():void{
        echo static::class
        . "Площадь ". $this->getarea()
        . "Цвет " . $this->getcolor() ?? "none";
    }
}