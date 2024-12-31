<?php

namespace src;

abstract class Faker {
    protected string $firstName;
    protected string $lastName;


    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    abstract public function setFirstName();
    

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    abstract public function setLastName();

    public function getRandomFromTAble($table){
        $i = array_rand($table);
        return $table[$i];
        
    }
}