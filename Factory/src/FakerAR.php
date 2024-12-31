<?php

namespace src;

class FakerAR extends Faker{

    
    public function setFirstName()
    {
        $table = ['omar','iman','yassin','leila'];        
        $this->firstName = $this->getRandomFromTAble($table);
        
    }
    public function setLastName(){
        $table = ['bakkali','ouazzani','berrada','iraqui'];
        $this->lastName = $this->getRandomFromTAble($table);

    }
}