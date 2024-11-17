<?php
require 'vendor/autoload.php';

use App\Point;
use App\Vector;

// Nokta oluşturma
$point = new Point(3, 4);
$point->move(1, 2); // Noktayı taşı
echo "Point: ({$point->x}, {$point->y})" . PHP_EOL;

// Vektörlerle çalışma
$v1 = new Vector(3, 4);
$v2 = new Vector(0, 0); // Null vector
$v3 = new Vector(-4, 3); // Perpendicular to v1

echo "V1 Length: " . $v1->length() . PHP_EOL;
echo "V1 is perpendicular to V3: " . ($v1->isPerpendicular($v3) ? "Yes" : "No") . PHP_EOL;
echo "V2 is null vector: " . ($v2->isNull() ? "Yes" : "No") . PHP_EOL;
?>
