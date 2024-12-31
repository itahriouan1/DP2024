<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="type">Langue:</label>
        <select name="type" id="type">
            <option value="AR">Arabe</option>
            <option value="FR">Français</option>
        </select>
        <input type="submit" value="ok">
    </form>
</body>
</html>
<?php

use src\FakerAR;
use src\FakerFactory;
use src\FakerFR;

require 'vendor/autoload.php';

if(isset($_POST['type'])){
    
    $type= $_POST['type'];

    $Faker = FakerFactory::create($type);
    
    var_dump($Faker);
}

