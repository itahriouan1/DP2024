<?php

namespace src;

class EuclidienDistanceStrategy implements DistanceStrategyInterface {
    public function calculer(Point $p1, Point $p2):float
    {
        return sqrt(pow($p1->getX()-$p2->getX(),2)+pow($p1->getY()-$p2->getY(),2));

    }
}