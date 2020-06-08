<?php


class Evenement { 

 private $IDevent;
 private $nom;
 private $localisation;
 private $nbmax;
 private $IDtype;
 private $date_d;
 private $date_f;
 private $IDcat;
 private $description;
 private $nbpart;
 private $IDuser;
 private $img;
 

    
    
function __construct($nom,$localisation,$nbmax,$IDtype, $date_d,$date_f,$IDcat,$description,$IDuser,$img)
    {
     $this->nom=$nom;
     $this->localisation=$localisation;
     $this->nbmax=$nbmax;
     $this->IDtype=$IDtype;
     $this->date_d=$date_d;
     $this->date_f=$date_f;
     $this->IDcat=$IDcat;
     $this->description=$description;
     $this->nbpart=0;
     $this->IDuser=$IDuser;
     $this->img=$img;
    }
    
    function getIdevent()
    { return $this->IDevent;}

    function getIduser()
    { return $this->IDuser;}
    
    
    function getNom()
    { return $this->nom;}
    function getLocalisation()
    { return $this->localisation;}
    
    function getNbmax()
    { return $this->nbmax;}
    function getIdtype()
    { return $this->IDtype;}
    
    function getDate_d()
    { return $this->date_d;}
    function getDate_f()
    { return $this->date_f;}
    
    function getIdcat()
    { return $this->IDcat;}
    function getDescription()
    { return $this->description;}
    function getNbpart()
    { return $this->nbpart;}
    function getImg()
    { return $this->img;}
   
    

 function setIdevent ($IDevent)
 { $this->IDevent=$IDevent;}
    
    function setNom ($nom)
 {$this->nom=$nom;}

 function setLocalisation ($localisation)
 { $this->localisation=$localisation;}
    
    function setNbmax ($nbmax)
 {$this->nbmax=$nbmax;}

 function setId ($IDtype)
 { $this->IDtype=$IDtype;}
    
    function setDate_d ($date_d)
 {$this->date_d=$date_d;}

 function setDate_f ($date_f)
 { $this->date_f=$date_f;}
    
    function setIdcat ($IDcat)
 {$this->IDcat=$IDcat;}

 function setDescription ($description)
 { $this->description=$description;}

 function setImg($img)
 { $this->img=$img;}
    
    

    
 
    
    

}
?>