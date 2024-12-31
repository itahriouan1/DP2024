<?php

namespace src;

class Influencer extends Subject {
    protected int $id;

    public function __construct(int $id){
        $this->id = $id;
    }
    public function sharePhoto(){
        echo "photo partagée par l'influenceur ".$this->id.'<br>';
        $this->notifyObservers();
    }
}