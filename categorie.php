<?php


class Categorie { 

 private $id_categorie;
 private $Nom;
 

    
    
function __construct($id_categorie,$Nom)
    {
     $this->id_categorie=$id_categorie;
     $this->Nom=$Nom;
    
        
    
    }
    
    function getId_categorie()
    { return $this->id_categorie;}
    
    function getNom()
    { return $this->Nom;}

    

 function setNom ($Nom)
 { $this->Nom=$Nom;}
    
    function setId_categorie ($id_categorie)
 {$this->id_categorie=$id_categorie;}
    

    
 
    
    
    
    
    
    
    

}
?>