<?php 
// require 'DbConnection.php';



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
    public static function showEdit($id,$connect){
        try{
            $qry = "SELECT * FROM joke WHERE id=:id ";
            $stmt = $connect->prepare($qry);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            "Error".$e->getMessage();
        }
    }

    public static function edit($id,$texte,$connect){
        try{
            $qry = "UPDATE joke SET texte= :texte  WHERE id=:id ";
            $stmt = $connect->prepare($qry);
            $stmt->bindParam(':texte', $texte);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

        }catch(PDOException $e){
            "Error" . $e->getMessage();
        }
    }

    public static function delete($id,$connect){
        try{
            $qry = "DELETE FROM joke WHERE id=:id ";
            $stmt = $connect->prepare($qry);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }catch(PDOException $e){
            "Error" . $e->getMessage();
        }
    }
}
