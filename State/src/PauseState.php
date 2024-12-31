<?php

namespace src;

class PauseState implements LecteurStateInterface {

    protected Lecteur $lecteur;
    public function read()
    {
        $newState = new LectureState();
        $this->lecteur->changeState($newState);
    }
    public function speed()
    {
        
    }

    /**
     * Set the value of lecteur
     *
     * @return  self
     */ 
    public function setLecteur($lecteur)
    {
        $this->lecteur = $lecteur;

        return $this;
    }
}