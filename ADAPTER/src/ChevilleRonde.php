<?php

namespace src;

class ChevilleRonde {
    protected float $rayon;

    public function __construct(float $rayon) {
        $this->rayon = $rayon;
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