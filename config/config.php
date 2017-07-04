<?php
class Config{
    
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $dbname = 'mydb';
    
    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";
        try{
            $conn = new PDO($dsn,$this->user,$this->pass);
        } catch (PDOException $ex) {
            echo 'Something\'s Wrong!!! --> '.$ex;
        }
    }
    
}