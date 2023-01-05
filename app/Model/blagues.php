<?php 
require 'DbConnection.php';

$con = new DBConnection();
$connect = $con->connection();

function add($texte,$dateCreate){
    
    try{
        global $connect ;
        $qry = "INSERT INTO joke(texte,dateCreate) VALUES (:texte,:dateCreate)";
        $stmt = $connect->prepare($qry);
        $stmt->bindParam(':texte',$texte);
        $stmt->bindParam(':dateCreate',$dateCreate);
        $stmt->execute();
        
    }catch(PDOException $e){
        "Error".$e->getMessage();
    }
}

