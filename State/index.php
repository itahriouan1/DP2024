<?php

use src\Lecteur;
use src\PauseState;

require 'vendor/autoload.php';

$initialState = new PauseState();
$Lecteur = new Lecteur($initialState);
var_dump($Lecteur->getState());
$Lecteur->read();
var_dump($Lecteur->getState());
$Lecteur->speed();
var_dump($Lecteur->getState());