<?php

require_once '../Model/blagues.php';
require_once 'DbConnection.php';

class Controller extends DBConnection{
    // connection();
    function add(){
       $connect = $this->connection();
       Blague::Add("abdeelllah",$connect);
    }
    
    function show(){
        $connect = $this->connection();
        return Blague::show($connect);
    }
}








// $test =new  Controller();
// echo "<pre>";
// var_dump($test->show());
// echo "</pre>";
