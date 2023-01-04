<?php

class Blague{
    private $id ;
    private $title ;
    private $desciption ;
    private $dateCreate ;

    function __construct($id,$title,$desciption,$dateCreate)
    {
        $this->id         = $id ;
        $this->title      = $title ;
        $this->desciption = $desciption ;
        $this->dateCreate = $dateCreate ;
    }

    public function Add(){
        
    }
}