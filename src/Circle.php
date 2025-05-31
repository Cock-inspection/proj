<?php
namespace Chel\App;
class Circle extends Shape implements colorable
{
    use Printable;
    private $rad = 0;
    private ?string $color = null;
    public function __construct($radi)
    {
        parent::__construct();
        $this->rad = $radi;
    }
    public function getarea(): float{
        return M_PI * $this->rad*$this->rad;
    }

    public function getcolor(): string
    {
        return $this->color;
    }
    public function setcolor($col): void
    {
        $this->color = $col;
    }
}