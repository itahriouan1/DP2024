<?php

use src\MessageEnGras;
use src\MessageEnItalique;
use src\MessageVue;

require 'vendor/autoload.php';

$msg = new MessageVue('titre', 'contenu');
$msg->show();
echo '<br>';
$msg2 = new MessageEnItalique($msg);
$msg2->show();
echo '<br>';
$msg3 = new MessageEnGras($msg2);
$msg3->show();