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
$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

if ($this->connection->connect_error) {
die ("<p>Error:" . $this->connection->connect_error . "</p>");
}
}

public function openConnection(){

}

public function query($string) {

}
}

