<?php

require 'DbConnection.php';
// require '../Model/blagues.php';

class ControllerJoke extends DBConnection{
    // connection();
    function add($jokes){
       $connect = $this->connection();
       Blague::Add($jokes,$connect);
    }
    
    function show(){
        $connect = $this->connection();
        $result = Blague::show($connect);
        return $result;
    }
    function edit($id,$texte){
        $connect = $this->connection();
        Blague::edit($id,$texte,$connect);
       
    }
    function delete($id){
        $connect = $this->connection();
        Blague::delete($id,$connect);
       
    }



}


