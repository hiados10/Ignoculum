<?PHP
	include "C:/xampp9/htdocs/projetWeb/entities/evenements.php";
	include "C:/xampp9/htdocs/projetWeb/core/evenementsC.php";

	if (isset($_POST['nom']) and isset($_POST['localisation']) and isset($_POST['nbmax']) and isset($_POST['IDtype']) and isset($_POST['date_d']) and isset($_POST['date_f'])and isset($_POST['IDcat'])
	 and isset($_POST['description']) and isset($_FILES['img'])){

		$fileTmpPath = $_FILES['img']['tmp_name'];
$fileName = $_FILES['img']['name'];
$fileSize = $_FILES['img']['size'];
$fileType = $_FILES['img']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
$uploadFileDir = './uploaded_files/';
$dest_path = $uploadFileDir . $newFileName;
 
if(move_uploaded_file($_FILES['img']['tmp_name'], 'uploads/'.$_POST['nom'].'.jpg'))
{
	$evenement1=new Evenement($_POST['nom'],$_POST['localisation'],$_POST['nbmax'],$_POST['IDtype'],$_POST['date_d'],$_POST['date_f'],
	$_POST['IDcat'],$_POST['description'],"1",'./uploads/'.$_POST['nom'].'.jpg');
	$evenement1C=new EvenementC();
	$evenement1C->AjouterEvenement($evenement1);
  $message ='File is successfully uploaded.';
}
//		var_dump($_FILES['img']);

		
		
	}
	else{
		echo "vérifier les champs";
    }
    header('Location:services.php');
