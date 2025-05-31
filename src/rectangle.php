<?php
namespace Chel\App;

class Rectangle extends Shape implements colorable{
    use Printable;

    public $weight, $heigh = 0;
    public ?string $color = 'none'; 
    public function __construct($weight, $heigh)
    {
        parent::__construct();
        $this->weight = $weight;
        $this->heigh = $heigh;
    }

    public function getarea(): float
    {
        return 1/2 * $this->weight * $this->heigh;
    }
    public function setcolor(string $col): void
    {
        $this->color = $col;
    }
    public function getcolor(): string
    {
        return $this->color;
    }
}