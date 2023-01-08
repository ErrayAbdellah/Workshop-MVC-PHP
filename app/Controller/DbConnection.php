
<?php

class DBConnection{
    private $host   = "localhost";
    private $name   = "root";
    private $dbName = "workshop-mvc-php";
    private $pwd    = "";


    public function connection(){
        try{
            $dsn = "mysql:host=$this->host;dbname=$this->dbName";
            $con = new PDO($dsn,$this->name,$this->pwd) ;
            return $con ;

        }catch(PDOException $e){
            "error connection :".$e->getMessage() ;
        }
    }
}