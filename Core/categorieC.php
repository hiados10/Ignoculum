<?PHP
//include "../config.php";
class CategorieC {
function afficherCategorie ($cat){
		echo "Id categorie: ".$cat->getid_categorie ()."<br>";
		echo "Nom categorie: ".$cat->getNom()."<br>";	
	}
	/*function calculerSalaire($event){
		echo $event->getDescription() * $event->getDescription();
	}*/
	function ajouterCategorie($cat){
		$sql="insert into categorie (nom) values (:nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
     //   $id_categorie=$cat->getid_categorie();
        $nom=$cat->getNom();
       
		//$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom',$nom);

		
			$req->execute();
			echo"ICIIIIIIIIIIIIIIIIIIII";
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
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
	function supprimerCategorie($id_categorie){
		$sql="DELETE FROM categorie where id_categorie= :id_categorie";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_categorie',$id_categorie);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($cat,$id_categorie){
		$sql="UPDATE categorie SET id_categorie=:id_categoriee, nom=:nom WHERE id_categorie=:id_categorie";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_categoriee=$cat->getid_categorie();
        $nom=$cat->getNom();
        
		$datas = array(':id_categoriee'=>$id_categoriee, ':id_categorie'=>$id_categorie, ':nom'=>$nom);
		$req->bindValue(':id_categoriee',$id_categoriee);
		$req->bindValue(':id_categorie',$id_categorie);
		$req->bindValue(':nom',$nom);
	

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($id_categorie){
		$sql="SELECT * from categorie where id_categorie=$id_categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategorie($nom){
		$sql="SELECT * from categorie where nom=$nom";
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