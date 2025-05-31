<?php
require __DIR__. "/vendor/autoload.php";

use Chel\App\Circle;

$cir = new Circle(2);
echo $cir->getarea();
$cir->setcolor("хуй");
echo "<br>".$cir->getcolor();