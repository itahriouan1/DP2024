<?php

use src\ChevilleCarree;
use src\ChevilleCarreeAdapter;
use src\ChevilleRonde;
use src\TrouRond;

require 'vendor/autoload.php';

$chvilleRonde = new ChevilleRonde(4);
$trouRond = new TrouRond(5);
$chvilleCarree = new ChevilleCarree(7);
var_dump($trouRond->Corresspond($chvilleRonde));
$chevilleCarreeAdaptee = new ChevilleCarreeAdapter($chvilleCarree);
var_dump($trouRond->Corresspond($chevilleCarreeAdaptee));