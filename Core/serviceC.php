<?php 
//include "../config.php"; 
Class serviceC {
	function ajouterservice($service)
	{
		
		$sql="insert into service (nom_service,prix_service,idca,description_service,img) values (:nom_service,:prix_service,:idca,:description_service,:img)";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$nom_service=$service->getNom_service();
			$idca=$service->getIdca();
			$prix_service=$service->getPrix_service();
			$description_service=$service->getDescription_service();
			$img=$service->getImg();

			$req->bindValue(':nom_service',$nom_service);
			$req->bindValue(':idca',$idca);
			$req->bindValue(':prix_service',$prix_service);
			$req->bindValue(':description_service',$description_service);
			$req->bindValue(':img',$img);

			$req->execute();
		}
		catch (Exception $e){
			echo 'Erreur: '.$e->getMessage();
		}
	}

	function Affichservice()
	{
		$sq2 = "select * from service s JOIN categorie c on s.idca = c.id_categorie ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}

	function supprimerservice($id_service)
	{
		$sql="DELETE FROM service where id_service= :id_service";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id_service',$id_service);
		try{
			$req->execute();
		// header('Location: index.php');
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

		function Modifierservice($cat,$id_service)
		{
			$sql="UPDATE service SET  nom_service=:nom_service,idca=:idca,prix_service=:prix_service,description_service=:description_service,img=:img WHERE id_service=:id_service";
			
			$db = config::getConnexion();

			try{		
				$req=$db->prepare($sql);
				//$id_service=$cat->getId_service();
				$nom_service=$cat->getNom_service();
				$idca=$cat->getIdca();
				$prix_service=$cat->getprix_service();
				$description_service=$cat->getdescription_service();
				$img=$cat->getImg();

				$datas = array(':id_service'=>$id_service, ':nom_service'=>$nom_service, ':idca'=>$idca, ':prix_service'=>$prix_service, ':description_service'=>$description_service, ':img'=>$img);
				$req->bindValue(':id_service',$id_service);
				$req->bindValue(':nom_service',$nom_service);
				$req->bindValue(':prix_service',$prix_service);
				$req->bindValue(':description_service',$description_service);
				$req->bindValue(':idca',$idca);
				$req->bindValue(':img',$img);

				$s=$req->execute();
				//header('Location: AfficherCategorie.php');
			}
			catch (Exception $e){
				echo " Erreur ! ".$e->getMessage();
				echo " Les datas : " ;
				print_r($datas);
			}
			
		}
		function recupererservice($id_service){
			$sql="SELECT * from service where id_service=$id_service";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function rechercherListeservice($nom_service){
			$sql="SELECT * from service s INNER JOIN categorie c on s.idca = c.id_categorie where nom_service like'%".$nom_service."%' or description_service like'%".$nom_service."%' ";
			$db = config::getConnexion();
			try{
				$liste=$db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	
	
/*	function trier($par)
	{
	  $sql="SELECT * FROM service where idca=$par ;";
		$db = config::getConnexion();
		try{
		$result=$db->query($sql);

	  $result->execute();
	  $listeservices= $result->fetchALL(PDO::FETCH_OBJ);
	  return $listeservices;

		}
		catch (Exception $e){
		  die('Erreur: '.$e->getMessage());
		} 
	}*/

	function trier($cat)
	{
		$sq2 = "select * from service s JOIN categorie c on s.idca = c.id_categorie where idca=$cat ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sq2); 
			return $liste;
		}
			catch(Exception $ee){
			echo 'Erreur: '.$ee->getMessage();
		}
	}
	function trierp()
	{
		$sq2 = "select * from service s JOIN categorie c on s.idca = c.id_categorie order by prix_service";
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
		$sq2 = "select * from service s JOIN categorie c on s.idca = c.id_categorie order by nom_service ";
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
