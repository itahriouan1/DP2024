<?php

namespace src;

class FriendObserver implements ObserverInterface{
    public function notify()
    {
        echo 'notifications envoyées aux amis <br>';
    }
}