<?php

namespace src;

class FakerARCreator extends FakerCreator{
    public static function createFaker()
    {
        $Faker = new FakerAR();
        $Faker->setFirstName();
        $Faker->setLastName();
        return $Faker;
    }
}