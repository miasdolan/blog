<?php
class Databse {
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    
    public function __construct($host, $username, $password, $database ) {
       $this->hoost = $host;
       $this->username = $username;
       $this->password = $password;
       $this->database = $database;
    }
    
    public function openConnection() {
        
    }
    
    public function closeConnection() {
        
    }

    public function query($string) {
        
    }
}

