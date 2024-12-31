<?php

namespace src;

class FakerFR extends Faker{
    public function setFirstName()
    {
        $table = ['eric','emanuel','marie','sabine'];
        $this->firstName = $this->getRandomFromTAble($table);
    }
    public function setLastName(){
        $table = ['macron','lepin','sarcozi','blanc'];
        $this->lastName = $this->getRandomFromTAble($table);
    }
}