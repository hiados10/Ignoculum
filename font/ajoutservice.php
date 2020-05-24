
<?PHP
include "../../config.php";
include "../../Entities/service.php";
include "../../Core/serviceC.php";

if (isset($_POST['nom_service']) and isset($_POST['idca']) and isset($_POST['prix_service']) and isset($_POST['description_service']) and isset($_FILES['img']))
{
	$fileTmpPath = $_FILES['img']['tmp_name'];
$fileName = $_FILES['img']['name'];
$fileSize = $_FILES['img']['size'];
$fileType = $_FILES['img']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
$uploadFileDir = './uploaded_files/';
$dest_path = $uploadFileDir . $newFileName;

$service1=new service($_POST['nom_service'],$_POST['idca'],$_POST['prix_service'],$_POST['description_service'],'./pictures/'.$_POST['nom_service'].'.jpg');
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3x  

$service1C=new serviceC();
$service1C->ajouterservice($service1);
header('Location: Afficherservice.php');}

		
else
{
	echo "vérifier les champs";
}
//*/

?>