<?php

namespace src;

interface DistanceStrategyInterface {
    public function calculer(Point $p1, Point $p2):float;
}