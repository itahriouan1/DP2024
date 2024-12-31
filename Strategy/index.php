<?php

use src\Distance;
use src\EuclidienDistanceStrategy;
use src\ManhattanDistanceStrategy;
use src\Point;

require 'vendor/autoload.php';

$p1 = new Point(1,1);
$p2 = new Point(2,2);
$d = new Distance();
$strategy = new ManhattanDistanceStrategy();
$d->setStrategy($strategy);
echo $d->calculer($p1,$p2);
echo '<br>';
$strategy2 = new EuclidienDistanceStrategy();
$d->setStrategy($strategy2);
echo $d->calculer($p1,$p2);