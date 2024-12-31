<?php

namespace src;

class ChevilleCarreeAdapter extends ChevilleRonde{
    protected ChevilleCarree $ChevilleCarree;
    public function __construct(ChevilleCarree $chevilleCarree){
        $this->ChevilleCarree = $chevilleCarree;
    }
    public function getRayon()
    {        
        return sqrt(pow($this->ChevilleCarree->getCote(),2)/2);
    }
}