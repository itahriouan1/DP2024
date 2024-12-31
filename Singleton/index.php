<?php

require 'Singleton.php';

$single = Singleton::getInstance();

$single2 = Singleton::getInstance();

var_dump($single);

var_dump($single2);