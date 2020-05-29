<?PHP
include "../../core/categorieC.php";
include "../../config.php";
$categorieC=new CategorieC();
if (isset($_POST["id_categorie"])){
	$categorieC->supprimerCategorie($_POST["id_categorie"]);
	header('Location: AfficherCategorie.php');
}
?>