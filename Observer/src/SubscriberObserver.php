<?php

namespace src;

class SubscriberObserver implements ObserverInterface{
    public function notify()
    {
        echo 'notifications envoyées aux abonnés <br>';
    }
}