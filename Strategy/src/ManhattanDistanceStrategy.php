<?php

namespace src;

class ManhattanDistanceStrategy implements DistanceStrategyInterface {

    public function calculer(Point $p1, Point $p2): float
    {
        return abs($p1->getX()-$p2->getX())+abs($p1->getY()-$p2->getY());
    }
}