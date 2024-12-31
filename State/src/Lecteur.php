<?php

namespace src;

class Lecteur {

    protected LecteurStateInterface $state;

    public function __construct(LecteurStateInterface $initialState) {
        $this->state = $initialState;
        $initialState->setLecteur($this);
    }

    public function read(){
        $this->state->read();
    }
    public function speed(){
        $this->state->speed();
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function changeState($state)
    {
        $this->state = $state;
        $state->setLecteur($this);

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }
}