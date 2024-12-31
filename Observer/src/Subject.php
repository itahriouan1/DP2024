<?php

namespace src;

class Subject {
    protected $Observers = [];
    public function registerObserver(ObserverInterface $observer){
        $this->Observers[] = $observer;
    }
    public function unregisterObserver(ObserverInterface $observer){
        if(in_array($observer, $this->Observers)){
            $id=array_search($observer, $this->Observers);
            unset($this->Observers[$id]);
        }
    }
    public function notifyObservers(){
        foreach($this->Observers as $observer){
            $observer->notify();
        }
    }
}