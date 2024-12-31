<?php

namespace src;

class FakerFRCreator extends FakerCreator{
    public static function createFaker()
    {
        $Faker = new FakerFR();
        $Faker->setFirstName();
        $Faker->setLastName();
        return $Faker;
    }
}