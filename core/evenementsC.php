<?php

include "C:/xampp9/htdocs/projetWeb/config.php";

class EvenementC {
    
    function AjouterEvenement($evenement)
    {
        $nom=$evenement->GetNom();
        $localisation=$evenement->GetLocalisation();
        $nbmax=$evenement->GetNbmax();
        $IDtype=$evenement->GetIdtype();
        $date_d=$evenement->GetDate_d();
        $date_f=$evenement->GetDate_f();
        $IDcat=$evenement->GetIdcat();
        $description=$evenement->GetDescription();
        $IDuser=$evenement->GetIduser();
        $img=$evenement->GetImg();
        $database=config::GetConnexion();
          $q = $database->prepare("INSERT INTO evenement (nom,localisation,nbmax,IDtype,date_d,date_f,IDcat,description,IDuser,img) VALUES
           (:nom,:localisation,:nbmax,:IDtype,:date_d,:date_f,:IDcat,:description,:IDuser,:img)");
          $q->bindParam(":nom",$nom);
          $q->bindParam(":localisation",$localisation);
          $q->bindParam(":nbmax",$nbmax);
          $q->bindParam(":IDtype",$IDtype);
          $q->bindParam(":date_d",$date_d);
          $q->bindParam(":date_f",$date_f);
          $q->bindParam(":IDcat",$IDcat);
          $q->bindParam(":description",$description);
          $q->bindParam(":IDuser",$IDuser);
          $q->bindParam(":img",$img);
          $q->execute();
    }
    function afficherEvents_foire($IDuser){
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
          on c.id_categorie = e.IDcat where t.libelle = 'foire' and e.IDuser = $IDuser";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function getEventById($IDevent){
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
          on c.id_categorie = e.IDcat where t.libelle = 'foire' and e.IDevent = $IDevent";
		$db = config::getConnexion();
		try{
        $liste=$db->prepare($sql);
        $liste->execute();
		return $liste->fetch();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
    function afficherEvents_meeting(){
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e INNER JOIN typee t INNER JOIN categorie c where t.IDtype = e.IDtype and c.id_categorie = e.IDcat and t.libelle = 'meeting' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function afficherEvents_formation(){
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e INNER JOIN typee t INNER JOIN categorie c where t.IDtype = e.IDtype and c.id_categorie = e.IDcat and t.libelle = 'formation' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function rechercher_evenement($mot)
    {
        $sql="SELECT e.* , t.libelle , c.Nom FROM evenement e INNER JOIN typee t INNER JOIN categorie c  where t.IDtype = e.IDtype and c.id_categorie = e.IDcat and t.libelle = 'foire' and e.localisation like'%".$mot."%'  ";
  
        $db =config::getConnexion();
        try{
         $list=$db->query($sql);
         return $list;
        }
          catch (Exception $e)
     { die('Erreur:'.$e->getMessage());}
    }
   
    
    
}


?>