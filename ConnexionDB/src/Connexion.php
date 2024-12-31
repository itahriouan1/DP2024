<?php

namespace src;

use PDO;

class Connexion {
    private static $instance;
    protected $pdo;
    private function __construct(){
        $content = file_get_contents(__DIR__."\config.json");
        $config = json_decode($content);
        $this->pdo = new PDO("mysql:host=".$config->host.";dbname=".$config->dbname,
                                $config->username,
                                $config->password);
    }
    public static function getInstance(){
        if (self::$instance==null){
            self::$instance = new Connexion();
        }
        return self::$instance;
    }

    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }
}