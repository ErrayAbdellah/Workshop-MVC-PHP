<?php 
require 'DbConnection.php';



class Blague{
    private $id ;
    private $texte ;
    private $dateCreate ;

    function __construct($id,$title,$dateCreate)
    {
        $this->id         = $id ;
        $this->texte      = $title ;
        $this->dateCreate = $dateCreate ;
    }

    public static function Add($texte,$connect){

        try{
            $dateCreate = date('y-m-d');
            $qry = "INSERT INTO joke(texte,dateCreate) VALUES (:texte,:dateCreate)";
            $stmt = $connect->prepare($qry);
            $stmt->bindParam(':texte',$texte);
            $stmt->bindParam(':dateCreate',$dateCreate);
            $stmt->execute();
            
        }catch(PDOException $e){
            "Error".$e->getMessage();
        }
    }

    public static function show($connect){
        try{
            $qry = "SELECT * FROM joke";
            $stmt = $connect->prepare($qry);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            "Error".$e->getMessage();
        }
    }
}
