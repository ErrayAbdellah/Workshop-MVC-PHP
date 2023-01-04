<?php 
require 'DbConnection.php';
$con = new DBConnection();


function add(){
    echo "1";
    try{
        
        global $con ;
        $qry = "INSERT INTO blague( title, description, dateCreate) VALUES (':title',':descriptio',':dateCreate')";
        $stmt = $con->connection()->prepare($qry);
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':descriptio',$desciption);
        $stmt->bindParam(':dateCreate',$dateCreate);
        $title = "nokta 2002";
        $desciption = "nokta nadya";
        $dateCreate = date("yy-dd-mm");
        $stmt->execute();
        echo "2";
        
        echo "3";


    }catch(PDOException $e){
        "Error".$e->getMessage();
    }


}


add();


