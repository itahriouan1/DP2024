<?php

namespace src;

class ChevilleCarree {
    protected float $Cote;
    
    public function __construct(float $Cote) {
        $this->Cote = $Cote;
    }

    /**
     * Get the value of Cote
     */ 
    public function getCote()
    {
        return $this->Cote;
    }

    /**
     * Set the value of Cote
     *
     * @return  self
     */ 
    public function setCote($Cote)
    {
        $this->Cote = $Cote;

        return $this;
    }
}