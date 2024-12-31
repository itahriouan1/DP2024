<?php

namespace src;

class Distance {
    protected DistanceStrategyInterface $strategy;
    public function calculer(Point $p1, Point $p2) {
        return $this->strategy->calculer($p1, $p2);
    }

    /**
     * Set the value of strategy
     *
     * @return  self
     */ 
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }
}