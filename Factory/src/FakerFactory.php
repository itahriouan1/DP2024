<?php

namespace src;

class FakerFactory {
    public static function create($type){
        if($type=="AR"){
            $Faker = FakerARCreator::createFaker();
        }
        if($type=="FR"){
            $Faker = FakerFRCreator::createFaker();
        }
        return $Faker;
    } 
}