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
    function afficherEvents_foire(){
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
          on c.id_categorie = e.IDcat where t.libelle = 'foire' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	


    function afficherEvents(){
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
          on c.id_categorie = e.IDcat ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function afficherEventsById($IDuser){
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
          on c.id_categorie = e.IDcat where e.IDuser = $IDuser ";
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
          on c.id_categorie = e.IDcat where e.IDevent = $IDevent";
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
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where t.libelle = 'meeting' ";
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
		$sql="SELECT e.* , t.libelle , c.Nom FROM evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where  t.libelle = 'formation'";
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
        $sql="SELECT e.* , t.libelle , c.Nom FROM evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where t.libelle = 'foire' and  e.localisation like'%".$mot."%' ";
  
        $db =config::getConnexion();
        try{
         $list=$db->query($sql);
         return $list;
        }
          catch (Exception $e)
     { die('Erreur:'.$e->getMessage());}
    }
   
    function SupprimerEvent($IDevent)
    {
        $database=config::GetConnexion();
          $q = $database->prepare("DELETE FROM evenement where IDevent=:IDevent");
          $q->bindParam(":IDevent",$IDevent);
          $q-> execute();
    }
    
    function modifierEvent($evenement,$IDevent){
		$sql="UPDATE evenement SET nom=:nom, localisation=:localisation,nbmax=:nbmax,IDtype=:IDtype,
        date_d=:date_d ,date_f=:date_f ,IDcat=:IDcat  ,description=:description,img=:img   WHERE IDevent=:IDevent";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
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
        $datas = array(':nom'=>$nom, ':localisation'=>$localisation, ':nbmax'=>$nbmax,':IDtype'=>$IDtype,':date_d'=>$date_d,
        ':date_f'=>$date_f , ':IDcat'=>$IDcat , ':description'=>$description , ':img'=>$img);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':localisation',$localisation);
		$req->bindValue(':nbmax',$nbmax);
		$req->bindValue(':IDtype',$IDtype);
		$req->bindValue(':date_d',$date_d);
        $req->bindValue(':date_f',$date_f);
        $req->bindValue(':IDcat',$IDcat);
        $req->bindValue(':description',$description);
        $req->bindValue(':img',$img);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    function participerClient($IDuser,$IDevent)
    {
        $sql="INSERT INTO participerevent values ($IDevent,$IDuser)";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function rechercheEvent($IDuser)
    {
        $sql="SELECT IDevent FROM evenement where IDuser = $IDuser";
  
        $db =config::getConnexion();
        try{
         $list=$db->query($sql);
         return $list;
        }
          catch (Exception $e)
     { die('Erreur:'.$e->getMessage());}
    }
    function trierp()
	{
		$sq2 = "select * from evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where t.libelle = 'foire' order by e.date_d ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}
	function triera()
	{
		$sq2 = "select * from evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where t.libelle = 'foire' order by e.nom ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
    }
    function trierp_formation()
	{
		$sq2 = "select * from evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where t.libelle = 'formation' order by e.date_d ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}
	function triera_formation()
	{
		$sq2 = "select * from evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where t.libelle = 'formation' order by e.nom ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}
    function trierp_meeting()
	{
		$sq2 = "select * from evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where t.libelle = 'meeting' order by e.date_d ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}
	function triera_meeting()
	{
		$sq2 = "select * from evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat where t.libelle = 'meeting' order by e.nom ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
    }
    
    function trierp_all()
	{
		$sq2 = "select * from evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat  order by c.Nom ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}
	function triera_all()
	{
		$sq2 = "select * from evenement e  JOIN typee t on t.IDtype = e.IDtype  JOIN categorie c
        on c.id_categorie = e.IDcat order by e.nom ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
    }
    function calculerPart($IDevent)
    {
        $sq2 = "SELECT count(*) as nb from participerevent p INNER JOIN evenement e on e.IDevent = p.IDevent where p.IDevent = $IDevent";
		$db = config::getConnexion();
		try{
            $liste = $db->query($sq2);
            $event = $liste->fetch();
		$nombre_part=$event['nb'];
			return $nombre_part;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}  
	}
	
    function checkIfClientParticipated($IDevent,$idClient)
    {
        $sq2 = "SELECT * from participerevent where IDevent=$IDevent and IDuser=$idClient";
		$db = config::getConnexion();
		try{
            $liste = $db->query($sq2);
            $event = $liste->fetchAll();
			return $event;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}  
    }

    function incrementPart($IDevent,$nb)
	{
		$sq2 = "UPDATE evenement SET nbpart = $nb where IDevent = $IDevent";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}



	function createNewParticipation($user,$event){
		$this->participerClient($user,$event);
		$nb=$this->calculerPart($event);
		echo $nb;
		$this->incrementPart($event,$nb);
	}

	function cancelParticipation($user,$event){
		$sq2 = "DELETE from participerevent where IDevent=$event and IDuser=$user";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}

}


?>