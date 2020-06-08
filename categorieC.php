<?php

//include "C:/xampp9/htdocs/projetWeb/config.php";

class CategorieC {
    
   
    function afficherCategories(){
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    
}


?>