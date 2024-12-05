<?php

abstract class dbConnect {

    public $host = "localhost";
    public $dbname = "bateaubdd";
    public $username = "root";
    public $password = "";
    
    public function dbConnect() {
        try {
            $dbConnect = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnect;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
