<?php

use src\FriendObserver;
use src\Influencer;
use src\SubscriberObserver;

require 'vendor/autoload.php';

$inf = new Influencer(1);
$obs1 = new SubscriberObserver();
$obs2 = new FriendObserver();
$inf->registerObserver($obs1);
$inf->registerObserver($obs2);
$inf->unregisterObserver($obs1);
$inf->sharePhoto();