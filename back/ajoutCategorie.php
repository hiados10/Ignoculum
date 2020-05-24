
<?PHP
include "../../config.php";
include "../../entities/categorie.php";
include "../../core/categorieC.php";


if (isset($_POST['nom']))
{
$categorie = new categorie($_POST['id_categorie'],$_POST['nom']);
$l = new CategorieC();
$l->ajouterCategorie($categorie);
header('Location: AfficherCategorie.php');
}
else{
	echo "nope";
}
?>