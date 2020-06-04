<?php

//include "../../config.php";

class reservationC
{
	public function ajouterReservation($reservation)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO reservation(id_service,cin,dateReservation,heureReservation) VALUES(:id_service,:cin,:dateReservation,:heureReservation)');
		$query->bindValue(':id_service',$reservation->getIdService());
		$query->bindValue(':cin',$reservation->getCin());
		$query->bindValue(':dateReservation',$reservation->getDateReservation());
		$query->bindValue(':heureReservation',$reservation->getHeureReservation());
		$query->execute();
	}

	public function supprimerReservation($numReservation)
	{
		$sql="DELETE FROM reservation where numReservation= :numReservation";
		$db=config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':numReservation',$numReservation);
		try
		{
			$req->execute();
		}
		catch(Exeption $e)
		{
			die('Erreur: '.$e->getMessage());
		}

	}

	public function modifierReservation($reservation,$numReservation)
	{
		$sql="UPDATE reservation SET dateReservation=:dateReservation , heureReservation=:heureReservation WHERE numReservation=:numReservation";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$dateReservation=$reservation->getDateReservation();
			$heureReservation=$reservation->getHeureReservation();
			
			$req->bindValue(':numReservation',$numReservation);
			$req->bindValue(':dateReservation',$dateReservation);
			$req->bindValue(':heureReservation',$heureReservation);
			$req->execute();
		}
		catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }
	}

	public function afficherReservation($reservation)
	{

		echo "ID de la reservation: " . $reservation->getNumReservation() . "<br>";
		echo "ID du service : " . $reservation->getIdservice() . "<br>";
		echo "Etat de la reservation : " . $reservation->getEtatReservation() . "<br>";
		echo "CIN du client : " . $reservation->getCin() . "<br>";
		echo "Date de la reservation : " . $reservation->getDateReservation() . "<br>";
		echo "Heure de la reservation : " . $reservation->getHeureReservation() . "<br>";

	}

	public function recupererReservation($numReservation)
	{
		$sql="SELECT * from reservation where numReservation=$numReservation";
		$db = config::getConnexion();
		try
		{
		$reserv=$db->query($sql);
		return $reserv;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	public function afficheReservation($recherche='')
	{
		$sql="SElECT numReservation,dateReservation,heureReservation,etatReservation,r.id_service as idService ,Nom,Prenom,NomService,PrixService From reservation r join service s on r.id_service = s.id_service join compte c on compte_cin = c.cin";
		if ($recherche!='')
			$sql=$sql." where concat(concat(Nom,' '),Prenom) like '%".$recherche."%'";
		$db = config::getConnexion();
		try{
		$reserv=$db->query($sql);
		return $reserv;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		public function afficheReservation1($recherche='')
	{
		$sql="SElECT numReservation,dateReservation,heureReservation,etatReservation,r.id_service as idService ,Nom,Prenom,NomService,PrixService From reservation r join service s on r.id_service = s.id_service join compte c on r.cin = c.cin";
		if ($recherche!='')
			$sql=$sql." where concat(concat(Nom,' '),Prenom) like '%".$recherche."%'";
		$db = config::getConnexion();
		try{
		$reserv=$db->query($sql);
		return $reserv;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	public function rechercherReservation($numReservation)
	{
		$sql="SELECT * from reservation where numReservation=$numReservation";
		$db = config::getConnexion();
		try{
		$reserv=$db->query($sql);
		return $reserv;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	public function recupererService()
	{
		$sql="SELECT * from service ";
		$db = config::getConnexion();
		try
		{
		$reserv=$db->query($sql);
		return $reserv;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	public function recupererCompte()
	{
		$sql="SELECT * from compte ";
		$db = config::getConnexion();
		try
		{
		$reserv=$db->query($sql);
		return $reserv;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	public function modifierEtatReservation($etatReservation,$numReservation)
	{
		$sql="UPDATE reservation SET etatReservation=:etatReservation WHERE numReservation=:numReservation";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			
			$req->bindValue(':numReservation',$numReservation);
			$req->bindValue(':etatReservation',$etatReservation);
			$req->execute();
		}
		catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }
	}

		public function trierDate()
	{
		$sq2 = "SElECT numReservation,dateReservation,heureReservation,etatReservation,r.id_service as idService ,Nom,Prenom,NomService,PrixService From reservation r join service s on r.id_service = s.id_service join compte c on compte_cin = c.cin order by dateReservation ";
		$db = config::getConnexion();
		try{
			$tri = $db->query($sq2); 
			return $tri;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}
}
?>