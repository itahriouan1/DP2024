<?php

namespace src;

class RalentiState implements LecteurStateInterface {

    protected Lecteur $lecteur;
    public function read()
    {
        $newState = new PauseState();
        $this->lecteur->changeState($newState);   
    }
    public function speed()
    {
        $newState = new LectureState();
        $this->lecteur->changeState($newState);
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