<?php

use src\Connexion;

require "vendor/autoload.php";

$connexion = Connexion::getInstance();
$pdo = $connexion->getPdo();
$stm = $pdo->prepare("SELECT * FROM personne");
$stm->execute();
$result = $stm->fetchAll();
var_dump($result);