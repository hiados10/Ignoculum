<?php

class reservationExpC
{
		public function ajouterReservationExp($reservationExp)
	{
		$db=config::getConnexion();
		$query=$db->prepare('INSERT INTO reservationExp(id_service,cin) VALUES(:id_service,:cin)');
		$query->bindValue(':id_service',$reservationExp->getIdService());
		$query->bindValue(':cin',$reservationExp->getCin());
		$query->execute();
	}

	public function supprimerReservationExp($numReservationExp)
	{
		$sql="DELETE FROM reservationExp where numReservationExp= :numReservationExp";
		$db=config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':numReservationExp',$numReservationExp);
		try
		{
			$req->execute();
		}
		catch(Exeption $e)
		{
			die('Erreur: '.$e->getMessage());
		}
	}

	/*public function modifierReservationExp($reservationExp,$numReservationExp)
	{
		$sql="UPDATE reservationExp SET heureReservation=:heureReservation WHERE numReservation=:numReservation";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$heureReservation=$reservation->getHeureReservation();
			
			$req->bindValue(':numReservation',$numReservation);
			$req->bindValue(':heureReservation',$heureReservation);
			$req->execute();
		}
		catch (Exception $e)
        {
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }
	}*/

	public function afficherReservationExp($reservation)
	{

		echo "ID de la reservation: " . $reservation->getNumReservation() . "<br>";
		echo "ID du service : " . $reservation->getIdservice() . "<br>";
		echo "Etat de la reservation : " . $reservation->getEtatReservation() . "<br>";
		echo "CIN du client : " . $reservation->getCin() . "<br>";
		//echo "Date de la reservation : " . $reservation->getDateReservation() . "<br>";
		echo "Heure de la reservation : " . $reservation->getHeureReservation() . "<br>";

	}

	public function recupererReservationExp($numReservationExp)
	{
		$sql="SELECT * from reservationExp where numReservationExp=$numReservationExp";
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

	public function afficheReservationExp($recherche='')
	{
		$sql="SElECT numReservationExp,etatReservation,re.id_service as idService ,Nom,Prenom,NomService,PrixService From reservationExp re join service s on re.id_service = s.id_service join compte c on compte_cin = c.cin";
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

	public function rechercherReservationExp($numReservationExp)
	{
		$sql="SELECT * from reservationExp where numReservationExp=$numReservationExp";
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

	public function modifierEtatReservationExp($reservation,$numReservationExp)
	{
		$sql="UPDATE reservationExp SET etatReservation=:etatReservation WHERE numReservationExp=:numReservationExp";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			$etatReservation=$reservation->getEtatReservation();
			
			$req->bindValue(':numReservationExp',$numReservationExp);
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
}