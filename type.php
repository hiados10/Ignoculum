<?php


class Type { 

 private $IDtype;
 private $libelle;
 

    
    
function __construct($libelle )
    {
    
     $this->libelle=$libelle;
    
        
    
    }
    
    function getIdtype()
    { return $this->IDtype;}
    
    function getLibelle()
    { return $this->libelle;}

    

 function setId ($IDtype)
 { $this->IDtype=$IDtype;}
    
    function setLibelle ($libelle)
 {$this->libelle=$libelle;}
    

    
 
    
    
    
    
    
    
    

}
?>