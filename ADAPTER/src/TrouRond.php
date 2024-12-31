<?php

namespace src;

class TrouRond {
    protected float $rayon;

    public function __construct(float $rayon){
        $this->rayon = $rayon;
    }

    public function Corresspond(ChevilleRonde $cheville){
        if($cheville->getRayon()<=$this->getRayon()){
            return true;
        }
        else {
            return false;
        }
    }
    

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }
}