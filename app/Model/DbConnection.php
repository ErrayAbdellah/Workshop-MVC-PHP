
<?php

class DBConnection{
    private $host   = "localhost";
    private $name   = "root";
    private $dbName = "workshop_mvc_php";
    private $pwd    = "";


    public function connection(){
        try{
            $dsn = "mysql:host=$this->host;dbname=$this->dbName";
            // $option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            $con = new PDO($dsn,$this->name,$this->pwd) ;
            return $con ;
        }catch(PDOException $e){
            "error connection :".$e->getMessage() ;
        }
    }
}