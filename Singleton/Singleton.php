<?php

class Singleton {
    private static $instance;
    private function __construct()
    {
    }
    private function __clone()
    {
        
    }
    public static function getInstance(){
        if(self::$instance==null){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}